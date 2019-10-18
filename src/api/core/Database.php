<?php

namespace App\api\core;

class Database
{
    private $pdo;
    private $dotEnv;

    function __construct(Dotenv $dotEnv)
    {
        $this->dotEnv = $dotEnv;
        $host = $this->dotEnv->get('DB_HOST');
        $name = $this->dotEnv->get('DB_NAME');
        $user = $this->dotEnv->get('DB_USER');
        $pwd = $this->dotEnv->get('DB_PWD');
        $this->pdo = new \PDO(
            "mysql:host=$host;dbname=$name;charset=utf8",
            $user,
            $pwd,
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]
        );
    }

    public function connect():\PDO{
        return $this->pdo;
    }
}