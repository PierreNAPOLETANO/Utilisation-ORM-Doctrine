<?php

namespace PierreFramework;

class PDOFactory
{
    public static function getMysqlConnexion()
    {
        $db = new PDO('mysql:host=localhost;dbname=tests', 'root', 'Monopoli@74');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
    
    public static function getPgsqlConnexion()
    {
        $db = new PDO('pgsql:host=localhost;dbname=tests', 'root', 'Monopoli@74');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
}
