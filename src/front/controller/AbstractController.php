<?php
    namespace App\front\controller;
    
    abstract class AbstractController{
        private $path = __DIR__.'/../../../template/';
        protected function render(string $view,array $uriVars ):void{
            extract($uriVars);
            require_once $this->path.$view;
        }
    }

?>