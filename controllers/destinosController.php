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

    public static function vistaCardsDestinos()
    {
        $destinos = DestinosModel::vistaDestinosModel();

        foreach ($destinos as $destino) {
            echo '
            <div class="card-group">
                <div class="card">
                    <img class="card-img-top" src="..." alt="' . $destino['destID'] . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $destino['destNombre'] . '</h5>
                        <p class="card-text">Asientos disponibles: '. $destino['destDisponibles']. '</p>
                        <p class="card-text">Precio: ' . $destino['destPrecio'] . '</p>
                   </div>
                </div>
            </div>';
        }
    }

    public static function optionListaDestinos()
    {
        $destinos = DestinosModel::vistaDestinosModel();

        foreach ($destinos as $destino) {
            echo '
                <option>' . $destino['destNombre'] . '</option>';
        }
    }


}
