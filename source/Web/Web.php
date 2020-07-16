<?php

namespace Source\Web;

use Source\Core\Controller;
use Source\Support\Pager;
use Source\Models\User;

/**
 * Web Controller
 *
 * @author Luiz
 */
class Web extends Controller {

    public function __construct($router) {
        parent::__construct($router, CONF_VIEW_WEB);
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
