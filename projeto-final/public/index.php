<?php

ini_set('display_errors', 1);

include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;
use App\Controller\ErrorController;

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

function createRoute(string $controllerName, string $methodName)
{
    return [
        'controller' => $controllerName,
        'method' => $methodName,
    ];
}

$routes = [
    '/' => createRoute(IndexController::class, 'indexAction'),
    '/produtos' => createRoute(ProductController::class, 'listAction'),
    '/produtos/novo' => createRoute(ProductController::class, 'addAction'),
    '/produtos/editar' => createRoute(ProductController::class, 'editAction'),
    '/categoria' => createRoute(CategoryController::class, 'listAction'),
    '/categoria/novo' => createRoute(CategoryController::class, 'addAction'),
    '/categoria/editar' => createRoute(CategoryController::class, 'editAction'),
];

if(false === isset($routes[$url])) {
    (new ErrorController()) -> notFoundAction();

}

$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

(new $controllerName())->$methodName();

//$c = new IndexController();
//$c->loginAction();
//
//$p = new ProductController();
//$p->listAction();
//$p->addAction();
//$p->editAction();
//
//$cat = new CategoryController();
//$cat->listAction();
//$cat->addAction();
//$cat->editAction();

//echo 'Ola mundo';