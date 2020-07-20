<?php

namespace Source\Web;

use Source\Core\Controller;
use Source\Support\Pager;
use Source\Models\User;
use Source\Support\Upload;

/**
 * Web Controller
 *
 * @author Luiz
 */
class Web extends Controller {

    public function __construct($router) {
        parent::__construct($router, CONF_VIEW_WEB);
    }

    public function addUser(?array $data): void {
        if (!empty($data['csrf'])) {

            if ($_REQUEST && !csrf_verify($_REQUEST)) {
                $json["message"] = $this->message->error("Erro ao enviar o formulário, atualize a página")->render();
                echo json_encode($json);
                return;
            }

            if (empty($data["first_name"]) || empty($data["last_name"]) || empty($data["user_name"]) || empty($data["password"])) {
                $json["message"] = $this->message->error("Preencha todos os campos")->render();
                echo json_encode($json);
                return;
            }
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            $data = (object) $post;

            $userCreate = new User();
            $userCreate->first_name = $data->first_name;
            $userCreate->last_name = $data->last_name;
            $userCreate->user_name = $data->user_name;
            $userCreate->password = $data->password;

            if (!empty($_FILES["photo"])) {
                $files = $_FILES["photo"];
                $upload = new Upload();
                $image = $upload->image($files, $userCreate->fullName(), 600);

                if (!$image) {
                    $json["message"] = $upload->message()->render();
                    echo json_encode($json);
                    return;
                }

                $userCreate->photo = $image;
            }

            if (!$userCreate->save()) {
                $json["message"] =  $userCreate->fail()->getMessage();
                echo json_encode($json);
                return;
            }

           $user = new User();
           $user->login($data->user_name, $data->password, true, 1);
            
            $this->message->success("Usuário cadastrado com sucesso...")->flash();
            echo json_encode(["reload" => true]);
            return;
        }
    }

    /**
     * 
     * @param array $data
     * @return void
     */
    public function updateUser(?array $data): void {
        if (!empty($data['csrf'])) {

            if ($_REQUEST && !csrf_verify($_REQUEST)) {
                $json["message"] = $this->message->error("Erro ao enviar o formulário, atualize a página")->render();
                echo json_encode($json);
                return;
            }

            if (empty($data["first_name"]) || empty($data["last_name"]) || empty($data["user_name"])) {
                $json["message"] = $this->message->error("Preencha todos os campos")->render();
                echo json_encode($json);
                return;
            }

            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            $data = (object) $post;

            $userUpdate = (new User())->findById($data->id);

            if (!$userUpdate) {
                $this->message->error("Você tentou gerenciar um usuário que não existe")->flash();
                echo json_encode(["redirect" => url("/")]);
                return;
            }

            $userUpdate->first_name = $data->first_name;
            $userUpdate->last_name = $data->last_name;
            $userUpdate->user_name = $data->user_name;
            //upload photo
            if (!empty($_FILES["photo"])) {
                if ($userUpdate->photo && file_exists(__DIR__ . "/../../../" . CONF_UPLOAD_DIR . "/{$userUpdate->photo}")) {
                    unlink(__DIR__ . "/../../../" . CONF_UPLOAD_DIR . "/{$userUpdate->photo}");
                }

                $files = $_FILES["photo"];
                $upload = new Upload();
                $image = $upload->image($files, $userUpdate->fullName(), 600);

                if (!$image) {
                    $json["message"] = $upload->message()->render();
                    echo json_encode($json);
                    return;
                }

                $userUpdate->photo = $image;
            }

            if (!$userUpdate->save()) {
                $json["message"] = $userUpdate->fail()->getMessage();
                echo json_encode($json);
                return;
            }

            $this->message->success("Usuário atualizado com sucesso...")->flash();
            echo json_encode(["reload" => true]);
            return;
        }
    }

    /**
     * SITE NAV ERROR
     * @param array $data
     * @return void
     */
    public function error(array $data): void {

        $error = new \stdClass();

        switch ($data['errcode']) {
            case "problemas":
                $error->code = "OPS";
                $error->title = "Estamos enfrentando problemas!";
                $error->message = "Parece que nosso serviço não está indisponível no momento. Já estamos resolvendo e agradecemos pela compreenssão";
                $error->linkTitle = "ENVIAR E-MAIL!";
                $error->link = "Muito:" . CONF_MAIL_SUPPORT;
                break;
            case "manutencao":
                $error->code = "OPS";
                $error->title = "Desculpe, Estamos em manutenção!";
                $error->message = "Em Breve retornaremos com novidades em nosso conteúdo";
                $error->linkTitle = null;
                $error->link = null;
                break;
            default:
                $error->code = $data["errcode"];
                $error->title = "Ooops. Conteúdo indisponível :/";
                $error->message = "Sentimos muito, mas o conteúdo que você tentou acessar não existe, está indisponível no momento ou foi removido :/";
                $error->linkTitle = "Continue navegando!";
                $error->link = url_back();
                break;
        }

        echo $this->view->render("error", [
            "error" => $error
        ]);
    }

}
