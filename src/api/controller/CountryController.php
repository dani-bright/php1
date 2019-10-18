<?php

namespace App\api\controller;

use App\api\Repository\CountryRepository;

class CountryController extends AbstractController
{
    private $countryRepository;

    public function __construct(CountryRepository $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }

    public function index(array $uriVars = [])
    {
        $this->render([
            'countries' => $this->countryRepository->getCityAndCapital()
            ]
        );
    }
}


?>