<?php
require_once('conexion.php');

class RegionesModel{

    private $regID;
    private $regNombre;

    public static function vistaRegionesModel()
    {
        $cmd = Conexion::conectar();
        $cmd = $cmd->prepare('SELECT * FROM regiones');
        $cmd->execute();
        $regiones = $cmd->fetchAll();
        return $regiones;
    }

    public function verRegionPorID()
    {
        $regID = $_GET['regID'];
        $link = Conexion::conectar();
        $sql = "SELECT regID, regNombre
                        FROM regiones
                        WHERE regID = :regID";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':regID', $regID, PDO::PARAM_INT);
        $stmt->execute();
        $datosRegion = $stmt->fetch();
        //registramos atributos del objeto
        $this->setRegID($datosRegion['regID']);
        $this->setRegNombre($datosRegion['regNombre']);
        return $this;
    }

    public function agregarRegion()
    {
        $regNombre = $_POST['regNombre'];
        $link = Conexion::conectar();
        $sql = "INSERT INTO regiones
                                ( regNombre )
                            VALUE 
                                ( :regNombre )";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':regNombre', $regNombre, PDO::PARAM_STR);

        if ($stmt->execute()) {
            //registramos los atributos de objeto
            $this->setRegID($link->lastInsertId());
            $this->setRegNombre($regNombre);
            return $this; //objeto Region
        }
        return false;
    }


    #################################
    ### getters & setters
    /**
     * @return mixed
     */
    public function getRegID()
    {
        return $this->regID;
    }

    /**
     * @param mixed $regID
     */
    public function setRegID($regID)
    {
        $this->regID = $regID;
    }

    /**
     * @return mixed
     */
    public function getRegNombre()
    {
        return $this->regNombre;
    }

    /**
     * @param mixed $regNombre
     */
    public function setRegNombre($regNombre)
    {
        $this->regNombre = $regNombre;
    }

}


