<?php

namespace App\api\controller;

use App\api\Repository\CityRepository;

class HomepageController extends AbstractController
{
    private $cityRepository;

    public function __construct(CityRepository $cityRepository)
    {
        $this->cityRepository = $cityRepository;
    }

    public function index(array $uriVars = [])
    {
        $this->render([
            'cities' => $this->cityRepository->findAll()
            ]
        );
    }
}


?>