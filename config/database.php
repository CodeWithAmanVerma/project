<?php

namespace DB;

class Database
{
    private static $bdd = null;

    private function __construct() {
    }

    public static function getBdd() {
        if(is_null(self::$bdd)) {
            self::$bdd = new \PDO("mysql:host=localhost;dbname=demo", 'root', 'root');
        }
        return self::$bdd;
    }
}
?>