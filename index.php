<?php

ob_start();

require __DIR__ . "/vendor/autoload.php";

date_default_timezone_set("America/Sao_Paulo");

use Source\Core\Session;
use CoffeeCode\Router\Router;

$router = new Router(url(), ":");

$router->namespace("Source\Web");
$router->group(null);
$router->get("/", "LogIn:root");

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