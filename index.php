<?php

ob_start();

require __DIR__ . "/vendor/autoload.php";

date_default_timezone_set("America/Sao_Paulo");

use Source\Core\Session;
use CoffeeCode\Router\Router;

$router = new Router(url(), ":");

$router->namespace("Source\Web");
$router->group(null);

/*LOGIN*/
$router->get("/", "LogIn:root");
$router->post("/login", "LogIn:login");
$router->get("/logout", "LogIn:logout");

/*USER*/
$router->post("/update_profile", "Web:updateUser");
$router->post("/add_profile", "Web:addUser");

/*COURSE*/
$router->get("/buscar/{terms}", "Web:courseSearch");
$router->post("/update_course", "Web:updateCourse");
$router->post("/add_course", "Web:addCourse");
$router->get("/course/{id}", "Web:Course");

/**
 * ERRORS
 */
$router->namespace("Source\Web")->group("/ops");
$router->get("/{errcode}", "Web:error", "web.error");

/**
 * ROUTE PROCESS
 */
$router->dispatch();

/**
 * ERROR PROCESS
 */
if ($router->error()) {
    $router->redirect("web.error", ["errcode" => $router->error()]);
}

ob_end_flush();