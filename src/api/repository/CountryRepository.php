<?php

namespace App\api\Repository;

use App\api\core\Database;

class CountryRepository
{
    private $pdo;

    public function __construct(Database $database)
    {
        $this->pdo = $database->connect();
    }

    public function findAll(): array
    {
        $sql = "select * from country";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_CLASS, 'App\api\entity\Country');
    }

    public function getCityAndCapital(): array
    {
        $sql = "select b.id as id, a.name as city_id, b.name as name
            FROM(SELECT id, name from city)a
            inner JOIN
            (select city_id, name,id FROM country)b
            on a.id = b.city_id";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_CLASS, 'App\api\entity\Country');
    }

}