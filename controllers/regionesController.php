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
}