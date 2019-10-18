<?php
    namespace App\api\core;
    
    class Container {
        private $services = [];
        public function get(string $idService){
            $this->services = [
                'controller.homepage' => function(){
                    return new \App\api\controller\HomepageController(
                        $this->services['repository.city']()
                    );
                },
                'controller.countries' => function(){
                    return new \App\api\controller\CountryController(
                        $this->services['repository.country']()
                    );
                },
                'controller.not.found' => function(){
                    return new \App\api\controller\NotFoundController();
                },
                'core.dotenv' => function(){
                    return new \App\api\core\Dotenv();
                },
                'core.database' => function(){
                    return new \App\api\core\Database($this->services['core.dotenv']());
                },
                'repository.city' => function(){
                    return new \App\api\repository\CityRepository($this->services['core.database']());
                },
                'repository.country' => function(){
                    return new \App\api\repository\CountryRepository($this->services['core.database']());
                },
            ];

            return $this->services[$idService]();
        }
    }