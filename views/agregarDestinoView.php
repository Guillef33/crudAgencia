<?php
$title = 'Agregar destino';
include('../models/destinosModel.php');
include('../controllers/destinosController.php');
include('modules/header.php');
$Destino = new DestinosModel;
$chequeo = $Destino->agregarDestino();


?>

<main class="container">

    <h1>Alta de una región</h1>

    <?php
    $mensaje = 'No se pudo agregar la región';
    $css     = 'danger';
    if ($chequeo) {
        $mensaje = 'Región ' . $Destino->getDestNombre() . ' agregada correctamente';
        $css     = 'success';
    }
    ?>
    <div class="alert alert-<?= $css ?>">
        <?= $mensaje ?>
        <a href="destinosView.php" class="btn btn-light">volver a panel</a>
    </div>

</main>

<?php
include('modules/footer.php')
?>