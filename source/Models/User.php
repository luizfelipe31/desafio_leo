<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Source\Support\Message;
use Source\Core\Session;
use Exception;

class User extends DataLayer {

    /** @var MESSAGE */
    protected $message;

    public function __construct() {
        parent::__construct("users", ["first_name", "last_name", "user_name"]);
        $this->message = new Message();
    }

    /**
     * Método para salvar ou alterar um usuário
     * @return bool
     */
    public function save(): bool {

        if (empty($this->id)) {

            if (!$this->validateUserName() || !$this->validatePassword() || !parent::save()) {
                return false;
            }

            
        } else {
            if (!parent::save()) {
                return false;
            }
        }

        return true;
    }

    /**
     * Método para validação de E-mail ao incluir usuário
     * @return bool
     */
    protected function validateUserName(): bool {
        if (empty($this->user_name)) {
            $this->fail = new Exception("Informe um nome de usuário");
            return false;
        }

        $userName = null;
        if (!$this->id) {
            $userName = $this->find("user_name = :user_name and status!=2", "user_name={$this->user_name}")->count();
        } else {
            $userName = $this->find("user_name = :user_name AND id != :id  and status!=2", "user_name={$this->user_name}&id={$this->id}")->count();
        }

        if ($userName) {
            $this->fail = new Exception("Nome de usuário já cadastrado");
            return false;
        }
        return true;
    }

    /**
     * Método para validação de senha para inclusão de usuário já incluinda senha criptografada
     * @return bool
     */
    protected function validatePassword(): bool {
        if (empty($this->password) || strlen($this->password) < 5) {
            $this->fail = new Exception("Informe uma senha com pelo menos 5 caracteres");
            return false;
        }

        if (password_get_info($this->password)["algo"]) {
            return true;
        }

        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return true;
    }

    /**
     * Método para achar um usuário pelo user name
     * @param string $user_name
     * @param string $columns
     * @return \Source\Models\User|null
     */
    public function findByUserName(string $user_name, string $columns = "*"): ?User {

        $find = $this->find("user_name= :e and status=1", "e={$user_name}", $columns)->fetch();

        return $find;
    }

    /**
     * @return string
     */
    public function fullName(): string {
        return "{$this->first_name} {$this->last_name}";
    }



    /**
     * Método para entrar no sistema
     * @param string $email
     * @param string $password
     * @param bool $save
     * @param int $level
     * @return bool
     */
    public function login(string $user_name, string $password, bool $save = false, int $level = 0): bool {

        if (!is_passwd($password)) {
            $this->fail = new Exception("A senha informada não é válida");
            return false;
        }

        $user = $this->findByUserName($user_name);

        if (!$user) {
            $this->fail = new Exception("Usuário informado não está cadastrado");
            return false;
        }

        if ($user->status == 2) {
            $this->fail = new Exception("Usuário informado não está cadastrado");
            return false;
        }

        if ($user->status == 3) {
            $this->fail = new Exception("Usuário está bloqueado");
            return false;
        }


        if (!passwd_verify($password, $user->password)) {

            $request_limit = $this->request_limit($user_name);

            if ($request_limit >= 5) {
                $this->fail = new Exception("Você estourou limite de 5 tentativas, seu login foi bloqueado, acesse seu e-mail para desbloquear ou mude sua senha em 'Esqueceu a senha?'.");
            } else {
                $this->fail = new Exception("Senha incorreta");
            }

            return false;
        }


        if (passwd_rehash($user->password)) {
            $user->password = $password;
            $user->save();
        }

   
        (new Session())->set("authUser", $user->id);

        return true;
    }

    /**
     * Método para carregar usuario na session caso a validação tenha sido efetuada
     * @return \Source\Models\User|null
     */
    public static function UserLog(): ?User {
        $session = new Session();
        if (!$session->has("authUser")) {
            return null;
        }

        return (new User)->findByid($session->authUser);
    }

    /**
     * Método para sair do sistema
     * @return void
     */
    public static function logout(): void {

        $session = new Session();
        $session->unset("authUser");
    }
}
