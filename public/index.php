<?php

require_once '../vendor/autoload.php';

use App\Router;
use App\Controller\HomeController;
use App\Controller\UserController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', UserController::class, 'hello');
Router::add('GET', '/world', UserController::class, 'world');
Router::add('GET', '/about', HomeController::class, 'about');
Router::add('GET', '/contac', UserController::class, 'contac');

Router::run();

// $className = "App\Controller\HomeController";
// $functionNama = "Hello";

// $controller = new $className();
// $controller->$functionNama;
