<?php
$title = 'Modificar region';
include('../models/regionesModel.php');
include('../controllers/regionesController.php');
include('modules/header.php');
//$Region = new RegionesModel;
$region = RegionesController::vistaRegionPorId();

?>

<main class="container">
    <h1>Modificación de una región</h1>

    <div class="alert bg-light border border-white shadow round col-8 mx-auto p-4">

        <form action="modificarRegionView.php" method="post">

            <div class="form-group">
                <label for="regNombre">Nombre de la región:</label>
                <input type="text" name="regNombre" value="<?= $Region->getRegNombre(); ?>" id="regNombre" class="form-control">
                <input type="hidden" name="regID" value="<?= $Region->getRegNombre() ?>">
            </div>

            <button class="btn btn-dark">Modificar región</button>
            <a href="regionesView.php" class="btn btn-outline-secondary">
                Volver a panel de regiones
            </a>
        </form>

    </div>


</main>
<?php
include('modules/footer.php')
?>