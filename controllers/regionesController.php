<?php

class RegionesController {
    public static function vistaRegionesController () {
        $regiones = RegionesModel::vistaRegionesModel();

        foreach ($regiones as $region) {
            echo '
            <tr>
                <td>' . $region['regID'] . '</td>
                <td>' .  $region['regNombre'] . '</td>
                <td>
                    <a href="formModificarRegionView.php?regID='. $region['regID'] . '" class="btn btn-outline-secondary">
                        Modificar <i class="far fa-edit ml-1"></i>
                    </a>
                </td>
                <td>
                    <a href="formEliminarRegionView.php?regID=' . $region['regID'] .'" class="btn btn-outline-secondary">
                        Eliminar <i class="far fa-minus-square ml-1"></i>
                    </a>
                </td>
            </tr>
            ';
        }
    } 

    public static function vistaEliminarRegion () {
        $regiones = RegionesModel::eliminarRegion();

        $css = 'danger';
        $mensaje = 'No se pudo eliminar la región';
        if ($chequeo) {
            $css = 'success';
            $mensaje = 'Región ' . $Region->getRegNombre() . ' eliminada correctamente';
        }
    }

    public static function listaSelectRegiones ()  {
        $regiones = RegionesModel::vistaRegionesModel();
        foreach ($regiones as $region) {
            echo '
        <option value="'. $region['regID'] .'">'. $region['regNombre '] .'</option>';
        }

    }

    public static function vistaCardsRegiones () {
        $regiones = RegionesModel::vistaRegionesModel();

        foreach ($regiones as $region) 
        {
            echo '
            <div class="card-group">
                <div class="card">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">' . $region['regNombre'] . '</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                                <div class="card">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">' . $region['regNombre'] . '</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                                <div class="card">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">' . $region['regNombre'] . '</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>';
        }
     }
}