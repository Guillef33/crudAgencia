<?php
$title = 'Eliminar destino';
include('../models/destinosModels.php');
include('../controllers/destinosController.php');
include('modules/header.php');
$Destino = new DestinosModel;
$chequeo = $Destino->eliminarDestino();

$css = 'danger';
$mensaje = 'No se pudo eliminar el destino';
if ($chequeo) {
    $css = 'success';
    $mensaje = 'Destino ' . $Destino->getDestNombre() . ' eliminado correctamente';
}

?>

<main class="container">

    <h1>Baja de un destino</h1>

    <?php
    //  regionesController::vistaEliminarRegion();
    ?>

    <div class="alert alert-<?= $css ?>">
        <?= $mensaje ?>
        <a href="destinosView.php" class="btn btn-light ml-2">
            volver a panel
        </a>
    </div>

</main>

<?php
include('modules/footer.php')
?>