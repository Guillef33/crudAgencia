<?php
require_once('conexion.php');

class RegionesModel
{

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

    public static function verRegionPorID($regID)
    {
        // $regID = $_GET['regID']; // esto deberia ir en el controller 
        $link = Conexion::conectar();
        $sql = "SELECT regID, regNombre
                        FROM regiones
                        WHERE regID = :regID";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':regID', $regID, PDO::PARAM_INT);
        $stmt->execute();
        $datosRegion = $stmt->fetch();
        return $datosRegion; // te devuelve la fila obtenida de la consulta
        //registramos atributos del objeto
        // $this->setRegID($datosRegion['regID']); // le setea el valor al atributo ID del objeto
        //$this->setRegNombre($datosRegion['regNombre']); // le setea un nombre (valor) al atributo regNombre del objeto
        // return $this; // retorna el objeto con los atributos seteados
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
    public function modificarRegion()
    {
        $regID = $_POST['regID'];
        $regNombre = $_POST['regNombre'];
        $link = Conexion::conectar();
        $sql = "UPDATE regiones
                           SET regNombre = :regNombre 
                        WHERE regID = :regID";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':regID', $regID, PDO::PARAM_INT);
        $stmt->bindParam(':regNombre', $regNombre, PDO::PARAM_STR);
        if ($stmt->execute()) {
            //registramos los atributos de objeto
            $this->setRegID($regID);
            $this->setRegNombre($regNombre);
            return $this; //objeto Region
        }
        return false;
    }

    public function confirmarBaja()
    {
        $regID = $_GET['regID'];
        //$this->verRegionPorID();
        $link = Conexion::conectar();
        $sql = "SELECT 1 FROM destinos 
                        WHERE regID = :regID";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':regID', $regID, PDO::PARAM_INT);
        $stmt->execute();
        $cantidad = $stmt->rowCount();
        return $cantidad;
    }

    public function eliminarRegion()
    {
        $regID = $_POST['regID'];
        $regNombre = $_POST['regNombre'];
        $link = Conexion::conectar();
        $sql = "DELETE FROM regiones
                        WHERE regID = :regID";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':regID', $regID, PDO::PARAM_INT);
        if ($stmt->execute()) {
            //registramos atributos
            $this->setRegID($regID);
            $this->setRegNombre($regNombre);
            return $this;
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
