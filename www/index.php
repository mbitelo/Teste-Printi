<?php

require __DIR__ . "/vendor/autoload.php";

$route = new \CoffeeCode\Router\Router(ROOT);

/**
 * APP
 */
$route->namespace("Source\App");


/**
 * filmes
 */
$route->group("filmes");
$route->post("/cadastrar", "Filmes:cadastrar");
$route->get("/consultar", "Filmes:consultar");

/**
 * categorias
 */
$route->group("categorias");
$route->get("/consultar", "Categorias:consultar");

/**
 * ROUTE
 */
$route->dispatch();

/**
 * ERROR REDIRECT
 */
if ($route->error()) {
    header('Content-Type: application/json; charset=UTF-8');
    http_response_code(404);
    echo json_encode(["message" => "Não foi possível processar a requisição"], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
}