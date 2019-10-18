<?php

namespace App\api\migration;

class Migrations20191018 extends AbstractMigrations
{
    protected $query = "
        DROP DATABASE IF EXISTS destination;
        CREATE DATABASE IF NOT EXISTS destination;
        CREATE TABLE destination.city(
            id TINYINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
            name VARCHAR(250),
            img VARCHAR(250)
        );
    ";

}

abstract class AbstractMigrations
{
    /**
     * @return string
     */
    public function getQuery(): string
    {
        return $this->query;
    }
}