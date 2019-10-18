<?php

    namespace App\front\core;

    class Router {
        private $routes = [
            //ajouter un nombre après le slash : #^/(?<id>\d+)$#
            '#^/(?<id>\d+)$#' => [
                'controller' => 'controller.homepage',
                'method' => 'index'
            ],
        ];

        private $route = [
            'controller' => 'controller.not.found',
            'method' => 'index'
        ];

        private $uriVars = [];

        public function getRoute():array{
            $uri = $_SERVER['REQUEST_URI'];
            foreach ($this->routes as $key => $value) {
                if(preg_match($key, $uri, $this->uriVars)){
                    $this->route = $this->routes[$key];
                }
            }
            return [
                'route' => $this->route,
                'uriVars' => $this->uriVars
            ];
        }
    }

?>