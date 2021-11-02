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

    // FUNCION PARA PINTAR LOS INPUT DEL FORM, PARA LUEGO EDITAR EL DESTINO
    public static function editarDestinoPorId()
    {
        $destID = $_GET['destID'];
        $destino = DestinosModel::verDestinosPorID($destID);

        // ARMAMOS EL FORMULARIO DEL VIEW

        echo '
            <div class="form-group">
                <label for="regNombre">Nombre de la región:</label>
                <input type="text" name="regNombre" value="' . $region['regNombre'] . '" id="regNombre" class="form-control">
                <input type="hidden" name="regID" value="' . $region['regID'] . '">
            </div>
        
            <button type="submit" class="btn btn-dark">Modificar región</button>
            <a href="regionesView.php" class="btn btn-outline-secondary">
                Volver a panel de regiones
            </a>

            ';
    }


}
