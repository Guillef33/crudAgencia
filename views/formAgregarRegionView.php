<?php
$title = 'Alta de una nueva region';
include('../models/regionesModel.php');
include('../controllers/regionesController.php');
include('modules/header.php');
?>

<main class="container">
    <h1>Alta de una nueva región</h1>

    <div class="alert bg-light border border-white shadow round col-8 mx-auto p-4">

        <form action="agregarRegionView.php" method="post">

            <div class="form-group">
                <label for="regNombre">Nombre de la región:</label>
                <input type="text" name="regNombre" id="regNombre" class="form-control">
            </div>

            <button class="btn btn-dark">Agregar región</button>
            <a href="regionesView.php" class="btn btn-outline-secondary">
                Volver a panel de regiones
            </a>
        </form>

    </div>


</main>
<?php
include('modules/footer.php')
?>