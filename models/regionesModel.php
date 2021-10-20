<?php
require_once('conexion.php');

class RegionesModel{

    public static function vistaRegionesModel()
        {
            $cmd = Conexion::conectar();
            $cmd = $cmd->prepare('SELECT * FROM regiones');
            $cmd->execute();
            $regiones = $cmd->fetchAll();
            return $regiones;
        }

}
