<?php
$title = 'Listado de regiones';
include('../models/regionesModel.php');
include('../controllers/regionesController.php');
include('modules/header.php');
?>

<section class="listado-regiones">
    <div class="container">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Región</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                regionesController::vistaRegionesController();
                ?>
            </tbody>
        </table>

    </div>
</section>

<?php include('modules/footer.php') ?>