<?php

    namespace App\front\controller;
    
    use App\front\controller\AbstractController;
    class NotFoundController extends AbstractController
    {
        public function index(array $uriVars){
            $this->render("notFound.php", [
            ]);
        }
    }
    

?>