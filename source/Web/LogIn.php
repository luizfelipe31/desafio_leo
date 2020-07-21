<?php

namespace Source\Web;

use Source\Core\Controller;
use Source\Models\User;
use Source\Models\Course;

/**
 * Description of LogIn
 *
 * @author Luiz
 */
class LogIn extends Controller {

    public function __construct($router) {
        parent::__construct($router, CONF_VIEW_WEB);
    }

    /**
     * Admin access redirect
     */
    public function root(): void {
        $user = User::UserLog();

        if ($user) {
            $courses = (new Course())
                    ->find("(user = :user ||  user=0)  AND status = '1'",
                            "user={$user->id}")
                    ->order("id")
                    ->fetch(true);
        } else {
            $courses = (new Course())
                    ->find("user=0  AND status = '1'")
                    ->order("id")
                    ->fetch(true);
        }


        $courses_headers1 = (new Course())
                ->find("id=2")
                ->fetch();

        $courses_headers2 = (new Course())
                ->find("id=3")
                ->fetch();

        $courses_headers3 = (new Course())
                ->find("id=4")
                ->fetch();

  
       echo $this->view->render("index", [
            'user_login' => $user,
            'courses' => $courses,
            'courses_headers1' => $courses_headers1,
            'courses_headers2' => $courses_headers2,
            'courses_headers3' => $courses_headers3
        ]);
    }

    /**
     * @param array|null $data
     */
    public function login(?array $data): void {
        $user = User::UserLog();

        if (!empty($data["user_name"]) && !empty($data["password"])) {

            $user = new User();
            $login = $user->login($data["user_name"], $data["password"], true, 1);

            if ($login) {
                $json["redirect"] = url("/");
            } else {
                $json["message"] = $this->message->error($user->fail()->getMessage())->render();
            }

            echo json_encode($json);
            return;
        }

        echo $this->view->render("index", [
            'user_login' => $user
        ]);
    }

    public function logout(): void {
        User::logout();
        redirect("/");
    }

}
