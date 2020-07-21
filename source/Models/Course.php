<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use \CoffeeCode\DataLayer\Connect;
use Source\Support\Message;
use Exception;

/**
 * Description of Course
 *
 * @author Luiz
 */
class Course extends DataLayer {

    /** @var MESSAGE */
    protected $message;

    public function __construct() {
        parent::__construct("courses", ["title", "subtitle"]);
        $this->message = new Message();
    }

    /**
     * Método para salvar ou alterar curso
     * @return bool
     */
    public function save(): bool {

        if (empty($this->id)) {

            if (!$this->validateCourseName() || !parent::save()) {
                return false;
            }
        } else {
            if (!$this->validateCourseName() || !parent::save()) {
                return false;
            }
        }

        return true;
    }

    protected function validateCourseName(): bool {
        if (empty($this->title)) {
            $this->fail = new Exception("Informe um título de curso");
            return false;
        }

        $courseName = null;
        if (!$this->id) {
            $courseName = $this->find("title = :title and status!=2", "title={$this->title}")->count();
        } else {
            $courseName = $this->find("title = :title AND id != :id  and status!=2", "title={$this->title}&id={$this->id}")->count();
        }

        if ($courseName) {
            $this->fail = new Exception("Título de curso já cadastrado");
            return false;
        }
        return true;
    }

    /**
     *
     * @param string $title
     * @param string $columns
     * @return \Source\Models\User|null
     */
    public function findByTitle(string $title, string $columns = "*"): ?User {

        $find = $this->find("title= :e and status=1", "e={title}", $columns)->fetch();

        return $find;
    }

    /**
     * 
     * @return type
     */
    public function queryCourse() {
        $connect = Connect::getInstance();

        $result = $connect->query("SELECT id,title,subtitle,user,photo FROM courses WHERE id='" . $this->id . "' ");
        return $result->fetchAll();
    }

}
