<?php
date_default_timezone_set('America/Sao_Paulo');

// var_dump($_SERVER);
define("ROOT", "http://{$_SERVER['SERVER_NAME']}:8888");

define("SITE", "Cadastro de Filmes");

define("DATA_LAYER_CONFIG", [
    "driver" 	=> "mysql",
    "host"      => "db",
    "port"      => "3306",
    "dbname" 	=> "printi",
    "username" 	=> "admin",
    "passwd" 	=> "admin",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);
