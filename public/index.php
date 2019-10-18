<?php

    require_once '../vendor/autoload.php';

    //importation des classes
    use App\front\core\Router;
    use App\front\core\Container;

    $router = new Router();


    //container
    $container = new Container();

     //controleur
     $controller = $container->get($router->getRoute()['route']['controller']);
     //var_dump($controller);

     $method = $router->getRoute()['route']['method'];
     $uriVars = $router->getRoute()['uriVars'];
     $controller-> $method($uriVars);

?>