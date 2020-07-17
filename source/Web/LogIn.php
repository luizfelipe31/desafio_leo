<?php

namespace Source\Web;

use Source\Core\Controller;
use Source\Models\User;

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
        
        echo $this->view->render("index",[]);
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

        echo $this->view->render("index",[]);
    }


}
