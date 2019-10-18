<?php

    namespace App\front\controller;
    
    use App\front\controller\AbstractController;
    class HomepageController extends AbstractController
    {
        public function index(array $uriVars){
            $date = new \DateTime();//antislash pour dire qu'on se refere aux class définies dans php meme
            $this->render("index.php", [
                'id' =>  $uriVars['id'],
                'date' => $date->format('d/m/y'),
            ]);
        }
    }
    

?>