<?php

class destinosController
{
    public static function vistaDestinosController()
    {
        $destinos = DestinosModel::vistaDestinosModel();

        foreach ( $destinos as $destino ){
            echo 
            '<tr>
                <td>'.$destino['destID'] .'</td>
                <td>' . $destino['destNombre'] .'</td>
                <td>'. $destino['regNombre'] .'</td>
                <td>$'. $destino['destPrecio'] .'</td>
                <td>'. $destino['destAsientos'] .'</td>
                <td>'. $destino['destDisponibles'] .'</td>
                <td>
                    <a href="formModificarDestinoView.php?destID='. $destino['destID'] . '" class="btn btn-outline-secondary">
                        Modificar <i class="far fa-edit ml-1"></i>
                    </a>
                </td>
                <td>
                    <a href="formEliminarDestinoView.php?destID=' . $destino['destID'] .'" class="btn btn-outline-secondary">
                        Eliminar <i class="far fa-minus-square ml-1"></i>
                    </a>
                </td>
            </tr>';
        }
    }

}
