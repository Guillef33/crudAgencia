<?php
$title = 'Listado de Destino';
include('../models/destinosModel.php');
include('../controllers/destinosController.php');
include('modules/header.php');

?>

<main class="container">
    <h1>Panel de administración de destinos</h1>

    <table class="table table-borderless table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre de Destino</th>
                <th>Región</th>
                <th>Precio</th>
                <th>Asientos</th>
                <th>Disponibles</th>
                <th colspan="2">
                    <a href="formAgregarDestinoView.php" class="btn btn-outline-secondary">
                        Agregar <i class="far fa-plus-square ml-1"></i>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            destinosController::vistaDestinosController();
            ?>
        </tbody>
    </table>

</main>

<?php
include 'modules/footer.php';
?>