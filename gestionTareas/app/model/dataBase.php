<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class DataBase
{
    private static $host = 'localhost';
    private static $user = 'root';  //Usuario de la base de datos
    private static $dbname = 'administradorTareas';
    private static $password = '';

    public static function  ConnectDB()
    {
        try {
            $pdo = new PDO('mysql:host=' . self::$host . ';dbname=' . self::$dbname, self::$user, self::$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Para que el error salga como excepcion en lugar de
            return $pdo;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }
}
