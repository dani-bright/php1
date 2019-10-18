<?php

namespace App\api\Repository;

use App\api\core\Database;

class CityRepository
{
    private $pdo;

    public function __construct(Database $database)
    {
        $this->pdo = $database->connect();
    }

    public function findAll(): array
    {
        $sql = "select * from city";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_CLASS, 'App\api\entity\City');
    }

    public function getCity(int $id)
    {
        $sql = "select * from city where id=$id";
        $query = $this->pdo->prepare($sql);
        $query->execute();

    }
}