<?php
$title = 'Bienvenido a tu agencia de viajes';
include('../models/conexion.php'); // tuve que agregar esto porque no encontraba la rutaraiz
include('modules/header.php');
include('../models/regionesModel.php');
include('../models/destinosModel.php');
include('../controllers/regionesController.php');
include('../controllers/destinosController.php');
// $Regiones = new RegionesModel;
// $Regiones->vistaRegionesModel();



?>

<style>
    .card {
        width: 500px;
    }
</style>

<main class="container">

    <h3>Resultados</h3>
    <div class="card-group">
        <?php
        destinosController::vistaCardsDestinos();
        ?>
    </div>

    <div class="card-group">
        <?php
        regionesController::vistaCardsRegiones();
        ?>
    </div>

</main>



</body>


</html>

<?php
include('modules/footer.php');
?>