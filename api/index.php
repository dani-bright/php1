<?php

require_once '../vendor/autoload.php';

//importation des classes
use App\api\core\Router;
use App\api\core\Container;

$router = new Router();


//container
$container = new Container();

//controleur
$controller = $container->get($router->getRoute()['route']['controller']);
//var_dump($controller);

$method = $router->getRoute()['route']['method'];
$uriVars = $router->getRoute()['uriVars'];
$controller->$method($uriVars);

$database = $container->get('core.database');
$database->connect();

?>