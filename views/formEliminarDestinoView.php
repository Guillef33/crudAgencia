<?php
$title = 'Eliminar destino';
include('../models/destinosModel.php');
include('../controllers/destinosController.php');
include('modules/header.php');

$Destino = new DestinosModel;
$Destino->verDestinoPorID();

?>

<main class="container">

    <h1>Confirmación de baja de un destino</h1>

    <div class="alert bg-light border border-white shadow round col-8 mx-auto p-4">
        <form action="eliminarDestinoView.php" method="post">
            <soan class="lead">Se eliminará el destino <?= $Destino->getDestNombre(); ?> </soan>
            <br>
            Region: <?= $Destino::getRegNombre() ?> <br>
            Precio: $<?= $Destino->getDestPrecio() ?> <br>

            <input type="hidden" name="destNombre" value="<?= $Destino->getDestNombre() ?>">
            <input type="hidden" name="destID" value="<?= $Destino->getDestID() ?>">
            <button class="btn btn-danger">
                Confirmar Baja
            </button>
            <a href="destinosView.php" class="btn btn-outline-secondary">
                Volver a panel de destinos
            </a>
        </form>
    </div>

    <script>
        Swal.fire(
            'Advertencia',
            'Si pulsa el bot´´on "Confirmar baja", se eliminará el destino',
            'warning'
        );
    </script>

</main>

<?php
include 'modules/footer.php';
?>