<?php
$title = 'Modificar region';
include('../models/regionesModel.php');
include('../controllers/regionesController.php');
include('modules/header.php');


?>

<main class="container">
    <h1>Modificación de una región</h1>

    <div class="alert bg-light border border-white shadow round col-8 mx-auto p-4">

        <form method="post">

        <?php RegionesController::editarRegionPorId(); ?>
        <?php RegionesController::actualizarUsuarioController(); ?>  
        
        </form>

    </div>


</main>
<?php
include('modules/footer.php')
?>