<?php

class Conexion {
    public static function conectar() {
        $host = "localhost";
        $dbname = "bd_universidad";
        $user = "root";
        $password = "falconini1_";
        $port = "3306";

        try {
            $pdo = new PDO(
                "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8",
                $user,
                $password
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;

        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
