<?php

use Framework\Router;

require __DIR__ . '/../vendor/autoload.php';
require "../helpers.php";

require basePath('Framework/Database.php');
require basePath('Framework/Router.php');

$router = new Router;

$routes = require basePath('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router->route($uri);
