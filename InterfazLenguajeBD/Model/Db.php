<?php

class Database {
    /*private static $connection = null;

    public static function getConnection() {
        if (self::$connection == null) {
            self::$connection = new mysqli('localhost:3306', 'root', '', 'casoestudio');
            if (self::$connection->connect_error) {
                die("Conexión fallida: " . self::$connection->connect_error);
            }
        }
        return self::$connection;
    }*/

   





    public static function executeQuery($query, $params = []) {
        $stmt = self::getConnection()->prepare($query);
        if ($params) {
            $stmt->bind_param(...$params);
        }
        $stmt->execute();
        return $stmt;
    }
}
?>

