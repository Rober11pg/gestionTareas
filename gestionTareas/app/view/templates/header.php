<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Tareas</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="<?php echo isset($_SESSION['SESSION_USER']) && $_SESSION['SESSION_USER']->rol == 'admin' ? '?controller=admin' : 'index.php'; ?>">
                <h5 class="pt-1">Hola <?= isset($_SESSION['SESSION_USER']) ? $_SESSION['SESSION_USER']->nombre : 'Guest' ?></h5>
            </a>
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=admin&action=FormAgregar">Agregar Tareas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="?controller=user&action=logOut">LogOut</a>
                    </li>
                </ul>
                <!-- Left links -->

                <!-- Right elements -->
                <div class="d-flex align-items-center justify-content-start">
                    <!-- Icon -->
                    <a class="text-reset me-3" href="#">
                        <i class="fas fa-shopping-cart text-white"></i>
                    </a>

                </div>
                <!-- Right elements -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <div class="container">