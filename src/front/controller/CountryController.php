<?php

    namespace App\front\controller;
    
    use App\front\controller\AbstractController;
    class CountryController extends AbstractController
    {
        public function index(array $uriVars){
            $date = new \DateTime();//antislash pour dire qu'on se refere aux class définies dans php meme
            $this->render("countries.php");
        }
    }
    

?>