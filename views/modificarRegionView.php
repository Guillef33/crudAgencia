<?php
$title = 'Modificar region';
include('../models/regionesModel.php');
include('../controllers/regionesController.php');
include('modules/header.php');
$Region = new RegionesModel;
$chequeo = $Region->modificarRegion();
?>

<main class="container">

    <h1>Modificación de una región</h1>

    <?php
   $mensaje = 'No se pudo modificar la región';
   $css     = 'danger';
   if ($chequeo) {
       $mensaje = 'Región ' . $Region->getRegNombre() . ' modificada correctamente';
       $css     = 'success';
   }
    ?>
    <div class="alert alert-<?= $css ?>">
        <?= $mensaje ?>
        <a href="regionesView.php" class="btn btn-light">volver a panel</a>
    </div>

</main>

<?php
include 'modules/footer.php';
?>