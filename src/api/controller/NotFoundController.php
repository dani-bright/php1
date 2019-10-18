<?php

namespace App\api\controller;

use App\api\controller\AbstractController;

class NotFoundController extends AbstractController
{
    public function index(array $uriVars)
    {
        $this->render("notFound.php", [
        ]);
    }
}


?>