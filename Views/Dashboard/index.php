<?php include "Views/Templates/header.php"; ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Gestion de Dashboard</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <p><b>Usuarios</b></p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="<?php echo base_url ?>Usuarios" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <p><b>Estudiantes</b></p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-graduation-cap nav-icon"></i>
                        </div>
                        <a href="<?php echo base_url ?>Estudiantes" class="small-box-footer"> Más información <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <p><b>Prestamos</b></p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-handshake nav-icon"></i>
                        </div>
                        <a href="<?php echo base_url ?>Prestamos" class="small-box-footer"> Más información <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <p><b>Libros</b></p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book"></i> <!-- Cambiado a un icono de libros -->
                        </div>
                        <a href="<?php echo base_url ?>Libros" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <p><b>Autores</b></p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user nav-icon"></i>
                        </div>
                        <a href="<?php echo base_url ?>Autores" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <p><b>Editoriales</b></p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-building nav-icon"></i>
                        </div>
                        <a href="<?php echo base_url ?>Editorial" class="small-box-footer"> Más información <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<?php include "Views/Templates/footer.php"; ?>