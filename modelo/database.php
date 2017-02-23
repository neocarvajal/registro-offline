<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=flisol;charset=utf8', 'neocarvajal', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}