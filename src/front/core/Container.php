<?php
    namespace App\front\core;
    
    class Container {
        public function get(string $idService){
            $services = [
                'controller.homepage' => function(){
                    return new \App\front\controller\HomepageController();
                },
                'controller.countries' => function(){
                    return new \App\front\controller\CountryController();
                },
                'controller.not.found' => function(){
                    return new \App\front\controller\NotFoundController();
                }
            ];

            return $services[$idService]();
        }
    }