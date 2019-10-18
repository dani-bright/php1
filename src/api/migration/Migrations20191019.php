<?php

namespace App\api\migration;

class Migrations20191019 extends AbstractMigrations
{
    protected $query = "
        INSERT INTO destination.city
        VALUES(NULL,'paris','paris.jpg');
        INSERT INTO destination.city
        VALUES(NULL,'tokyo','tokyo.jpg');
        INSERT INTO destination.city
        VALUES(NULL,'Madrid','madrid.jpg');

        INSERT INTO destination.country
        VALUES(NULL,'France',1);
        INSERT INTO destination.country
        VALUES(NULL,'Japon',2);
        INSERT INTO destination.country
        VALUES(NULL,'Espagne',3);
    ";

}