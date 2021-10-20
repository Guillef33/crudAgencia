<?php
$title = 'Listado de regiones';
include('../models/regionesModel.php');
include('../controllers/regionesController.php');
include('modules/header.php');
?>

<section class="listado-regiones">
    <div class="container">

        <h1>Panel de administración de regiones</h1>

        <table class="table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Región</th>
                    <th colspan="2">
                        <a href="formAgregarRegionView.php" class="btn btn-outline-secondary">
                            Agregar <i class="far fa-plus-square ml-1"></i>
                        </a>
                    </th>
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