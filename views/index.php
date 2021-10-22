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
    select {
        height: 40px !important;
    }
</style>

<main class="container">
    <form class="buscador" action="buscarVuelosView.php">
        <div style="display: flex;">
            <div>
                <p>Desde</p>
                <select>
                    <?php
                    regionesController::optionListaRegiones();
                    ?>
                </select>
            </div>
            <div>
                <p>Hacia</p>
                <select>
                    <?php
                    destinosController::optionListaDestinos();
                    ?>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-danger mt-4">Buscar Vuelos</button>

    </form>

</main>



</body>


</html>

<?php
include('modules/footer.php');
?>