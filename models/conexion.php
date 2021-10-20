<?php

class Conexion {

    public static function conectar() {
        try {
            $conexion = new PDO (
                'mysql:host=localhost;dbname=agencia',
                'root',
                ''
            );

        } catch (Exception $e) {
            echo 'Hubo un error al intentar enviar la conexion a la DB ' . $e->getMessage();
            die();
        }

        return $conexion;

    }
}

define('RUTARAIZ', 'http://localhost/crudAgencia/');


?>