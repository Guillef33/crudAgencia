<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo RUTARAIZ ?>assets/css/style.css">
    <link rel="stylesheet" href="css/sweetalert2.css">
    <script src="js/sweetalert2.js"></script>
    <link rel="shortcut icon" type='image/x-icon' href="favicon.png">
</head>

<body>

    <nav class="site-header sticky-top py-2">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a href="index.php" class="mt-1">
                <i class="fab fa-meetup fa-2x text-white"></i>
            </a>


            <a class="py-2" href="<?php echo RUTARAIZ ?>views\regionesView.php">Regiones</a>

            <a class="py-2" href="<?php echo RUTARAIZ ?>views\destinosView.php">Destinos</a>


            <button class="btn btn-dark">
                <a href="formLogin.php"><i class="fas fa-sign-in-alt mr-2"></i> Ingresar</a>
            </button>

            <!-- logueado
        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <a href="#"><i class="fas fa-sign-out-alt"></i>
                Nombre Apellido
            </a>
        </button>
            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item bg-dark" href="logout.php">Salir de sistema</a>
                <a class="dropdown-item bg-dark" href="">Modificar Perfil</a>
                <a class="dropdown-item bg-dark" href="">Cambiar contraseña</a>
            </div>
-->

        </div>
    </nav>