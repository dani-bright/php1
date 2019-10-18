<?php

namespace App\api\migration;

class Migrations20191019 extends AbstractMigrations
{
    protected $query = "
        INSERT INTO destination.city
        VALUES(
            NULL,'paris','paris.jpg'
            NULL,'tokyo','tokyo.jpg'
            NULL,'dubai','dubai.jpg'
        );
    ";

}