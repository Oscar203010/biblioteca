<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca MPL</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/plugins/summernote/summernote-bs4.min.css">

    <link href="<?php echo base_url; ?>Assets/dist/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous">
    <script href="<?php echo base_url; ?>Assets/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="icon" href="<?php echo base_url; ?>Assets/img/favicon.ico" rel="stylesheet" />
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <link href="<?php echo base_url; ?>Assets/DataTables/datatables.min.css" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo base_url; ?>Assets/img/muni.png" alt="" height="100" width="100">
        </div>
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown">
                        <i class="fas fa-user fa-fw"></i>
                        <?php echo $_SESSION['nombres']; ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <!-- Otros elementos del menú si los tienes -->
                        <!-- <a class="dropdown-item" href="#" id="modalPass">
                            <i class="fas fa-user"></i> Perfil
                        </a> -->
                        <a class="dropdown-item" href="#" id="modalPass"><i class="fa fa-user"></i> Perfil</a>
                        <a class="dropdown-item btn-logaut" href="<?php echo base_url; ?>Usuarios/salir">
                            <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                        </a>
                    </div>
                </li>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link text-center">
                <!-- <img src="< ?php echo base_url; ?>Assets/img/muni.png" class="brand-image img-circle elevation-3"> -->
                <span class="brand-text font-weight-light"><b>Biblioteca MPL</b></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url; ?>Assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <span class="badge badge-success">Conectado</span> <!-- Palabra "Conectado" en verde -->
                        <a href="#" class="d-block"><?php echo $_SESSION['nombres']; ?></a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item has-treeview">
                            <a href="<?php echo base_url; ?>Dashboard" class="nav-link desactive">
                                <i class="fas fa-chart-bar nav-icon"></i> <!-- Cambiado a un icono de gráfico de barras -->
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link active" data-toggle="collapse" data-target="#configMenu">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Configuración
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul id="configMenu" class="nav nav-treeview collapse">
                                <li class="nav-item">
                                    <a href="<?php echo base_url; ?>Usuarios" class="nav-link desactive">
                                        <i class="fas fa-user nav-icon"></i>
                                        <p>Usuarios</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo base_url; ?>Estudiantes" class="nav-link desactive">
                                        <i class="fas fa-graduation-cap nav-icon"></i>
                                        <p>Estudiante || Otro</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url; ?>Prestamos" class="nav-link desactive">
                                        <i class="fas fa-handshake nav-icon"></i>
                                        <p>Prestamos</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with Font Awesome -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link active" data-toggle="collapse" data-target="#librosMenu">
                                <i class="nav-icon fas fa-book"></i> <!-- Icono para Libros -->
                                <p>
                                    Libros
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul id="librosMenu" class="nav nav-treeview collapse">
                                <li class="nav-item">
                                    <a href="<?php echo base_url; ?>Libros" class="nav-link desactive">
                                        <i class="fas fa-book nav-icon"></i> <!-- Icono para Libros -->
                                        <p>Libros</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url; ?>Autores" class="nav-link desactive">
                                        <i class="fas fa-user nav-icon"></i> <!-- Icono para Autores -->
                                        <p>Autores</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url; ?>Editorial" class="nav-link desactive">
                                        <i class="fas fa-building nav-icon"></i> <!-- Icono para Editorial -->
                                        <p>Editorial</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item has-treeview">
                        <a href="<?php echo base_url; ?>Reportes" class="nav-link desactive">
                            <i class="fas fa-chart-bar nav-icon"></i>
                            <p>Reportes</p>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
    </div>