<?php

require_once __DIR__ . '/../vendor/autoload.php';

use GhostCodeNight\PhpMvc\App\Router;
use GhostCodeNight\PhpMvc\Controller\HomeController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');
Router::add('GET', '/about', HomeController::class, 'about');

Router::run();

// $className = "GhostCodeNight\PhpMvc\Controller\HomeController";
// $functionName = "hello";

// $controller = new $className;
// $controller->$functionName();
