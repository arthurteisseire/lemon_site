<?php

class DataBaseSingleTon
{
    /**
     * @var PDO
     */
    static private $db;

    static function connect($dsn, $username, $pass)
    {
        try {
            self::$db = new PDO($dsn, $username, $pass);
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (Exception $e) {
            die("<br>Erreur : " . $e->getMessage());
        }
    }

    static function getInstance()
    {
        return self::$db;
    }
}
