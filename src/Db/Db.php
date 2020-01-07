<?php

namespace App\Db;

use PDO;

class Db 
{
    private static $pdoInstance = null;

    private function __construct()
    {
    }
    public static function getPdoInstance(): PDO 
    {
        if (self::$pdoInstance !== null) {
            return self::$pdoInstance;
        }
        try {
            $dbConfig = parse_ini_file(__DIR__.'/../../config/db.ini');
            if (!$dbConfig) {
                throw new \Exception("Erreur de l'analyse du fichier de configuration voir readme");
            }
            echo $dbConfig['host'];
            $dsn = "mysql:host=".$dbConfig['host']. ";".
                "dbname=users". ";".
                "charset=" . $dbConfig['charset'];
            self::$pdoInstance = new PDO(
                $dsn,
                $dbConfig['user'],
                $dbConfig['password']
            );
            return self::$pdoInstance;
        } catch (\PDOException $ex) {
            throw $ex;
        }
    }


        
}