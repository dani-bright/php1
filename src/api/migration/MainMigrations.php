<?php

namespace App\api\migration;

require_once "../../../vendor/autoload.php";

use App\api\core\Container;
use App\api\core\Database;

class MainMigrations
{
    public function __construct()
    {
        $directory = new \DirectoryIterator(__DIR__);
        $query = "START TRANSACTION;";
        foreach ($directory as $file) {
            $filename1 = $file->getFilename();
            if (!$file->isDot() && preg_match("#^Migrations#", $filename1)) {
                $filename = preg_replace("#\.php#", "", $filename1);
                $namespace = "App\\api\\migration\\$filename";
                $instance = new $namespace();
                $query .= $instance->getQuery();
            }
        }
        $query .= "COMMIT;";

        $container = new Container();
        $database = $container->get("core.database");
        $pdo = $database->connect();

        $toExecute = $pdo->prepare($query);
        $toExecute->execute();
        var_dump($query);
    }
}

$mainMigration = new MainMigrations();

