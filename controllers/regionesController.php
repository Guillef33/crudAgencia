<?php

class RegionesController
{
    public static function vistaRegionesController()
    {
        $regiones = RegionesModel::vistaRegionesModel();

        foreach ($regiones as $region) {
            echo '
            <tr>
                <td>' . $region['regID'] . '</td>
                <td>' .  $region['regNombre'] . '</td>
                <td>
                    <a href="formModificarRegionView.php?regID=' . $region['regID'] . '" class="btn btn-outline-secondary">
                        Modificar <i class="far fa-edit ml-1"></i>
                    </a>
                </td>
                <td>
                    <a href="formEliminarRegionView.php?regID=' . $region['regID'] . '" class="btn btn-outline-secondary">
                        Eliminar <i class="far fa-minus-square ml-1"></i>
                    </a>
                </td>
            </tr>
            ';
        }
    }
    /*
    public static function vistaEliminarRegion()
    {
        $regiones = RegionesModel::eliminarRegion();

        $css = 'danger';
        $mensaje = 'No se pudo eliminar la región';
        if ($chequeo) {
            $css = 'success';
            $mensaje = 'Región ' . $Region->getRegNombre() . ' eliminada correctamente';
        }
    }*/

    public static function listaSelectRegiones()
    {
        $regiones = RegionesModel::vistaRegionesModel();
        foreach ($regiones as $region) {
            echo '
        <option value="' . $region['regID'] . '">' . $region['regNombre '] . '</option>';
        }
    }

    public static function optionListaRegiones()
    {
        $regiones = RegionesModel::vistaRegionesModel();

        foreach ($regiones as $region) {
            echo '
                <option>' . $region['regNombre'] . '</option>';
        }
    }

    public static function vistaCardsRegiones()
    {
        $regiones = RegionesModel::vistaRegionesModel();

        foreach ($regiones as $region) {
            echo '   
            <div class="card-group">
                <div class="card">
                    <img class="card-img-top" src="..." alt="' . $region['regID'] . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $region['regNombre'] . '</h5>
                    </div>
                </div>
            </div>';
        }
    }

    // FUNCION PARA PINTAR LOS INPUT DEL FORM, PARA LUEGO EDITAR REGION
    public static function editarRegionPorId()
    {
        $regID = $_GET['regID'];
        $region = RegionesModel::verRegionPorID($regID);

        // ARMAMOS EL FORMULARIO DEL VIEW

        echo '
            <div class="form-group">
                <label for="regNombre">Nombre de la región:</label>
                <input type="text" name="regNombre" value="'.$region['regNombre'].'" id="regNombre" class="form-control">
                <input type="hidden" name="regID" value="'.$region['regID'].'">
            </div>
        
            <button type="submit" class="btn btn-dark">Modificar región</button>
            <a href="regionesView.php" class="btn btn-outline-secondary">
                Volver a panel de regiones
            </a>

            ';

    }

    // FUNCION PARA EDITAR DIRECTAMENTE LA REGION SELECCIONADA
    public function actualizarUsuarioController(){

        if(isset($_POST["regID"])){
            $idRegion = $_POST['regID'];
            $regionName = $_POST['regNombre'];

            $resultado = RegionesModel::modificarRegion($idRegion,$regionName);

            if($resultado == 'success'){
                echo 'Se ha modificado la region correctamente.';
                header('Location:regionesView.php');
            }else{
                echo 'Ha ocurrido un error al intentar modificar la region ' . $regionName . ' con el siguiente id: '. $idRegion;
            }
        }

    }
}
