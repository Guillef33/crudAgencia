<?php
$title = 'Eliminar region';
include('../models/regionesModel.php');
include('../controllers/regionesController.php');
include('modules/header.php');
$Region = new RegionesModel;
$chequeo = $Region->eliminarRegion();

$css = 'danger';
$mensaje = 'No se pudo eliminar la región';
if ($chequeo) {
   $css = 'success';
   $mensaje = 'Región ' . $Region->getRegNombre() . ' eliminada correctamente';
}

?>

<main class="container">

    <h1>Baja de una región</h1>

    <?php
  //  regionesController::vistaEliminarRegion();
    ?>

    <div class="alert alert-<?= $css ?>">
        <?= $mensaje ?>
        <a href="regionesView.php" class="btn btn-light ml-2">
            volver a panel
        </a>
    </div>  

</main>

<?php
include('modules/footer.php')
?>