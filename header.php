<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}
require_once 'conexion.php';
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row min-vh-100">
            <nav id="sidebar" class="p-0 col-md-3 col-lg-2 d-md-block sidebar border-end" style="background-color: #000040;">
                <div class="sidebar-header bg-white">
                    <img src="https://www.politecnicomayor.edu.co/moodle/form_inicio/images/logo1.png" class="w-100" alt="Logotipo Politecnico"/>
                </div>

                <ul class="nav flex-column mt-3 mb-5">
                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link active">
                            <i class="fas fa-home text-white"></i>
                            <span class="text-white">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="analisis.php" class="nav-link">
                            <i class="fas fa-chart-bar text-white"></i>
                            <span class="text-white">Análisis</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="jugadores.php" class="nav-link">
                            <i class="fas fa-futbol text-white"></i>
                            <span class="text-white">Jugadores</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="usuarios.php" class="nav-link">
                            <i class="fas fa-users text-white"></i>
                            <span class="text-white">Usuarios</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="cerrar_sesion.php" class="nav-link">
                            <i class="fas fa-right-from-bracket text-white"></i>
                            <span class="text-white">Cerrar sesión</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <main class="col-md-9 col-lg-10 d-md-block">
                <div class="container-fluid">
                    <?php
                        if(isset($_SESSION['flash_message'])){
                            echo '<div class="alert alert-info">'. $_SESSION['flash_message'] .'</div>';
                            unset($_SESSION['flash_message']);
                        }
                    ?>