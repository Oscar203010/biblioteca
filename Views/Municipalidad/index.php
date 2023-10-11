<?php require_once 'Config/App/Conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca MPL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/Municipalidad/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/Municipalidad/css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
</head>

<body>
    <!-- NAVBAR-->
    <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <div class="logo-container">
                    <!-- Logo Image -->
                    <img src="<?php echo base_url; ?>Assets/img/nav.jpg" alt="80" class="logo-image img-fluid">
                </div>
                <!-- Logo Text -->
                <span class="text-uppercase font-weight-bold ml-2">Biblioteca MPL</span>
            </a>

            <!-- Botón del navbar en dispositivos móviles -->
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Elementos del navbar -->
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#" class="nav-link">Inicio <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Nosotros</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Galeria</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Servicios</a></li>
                    <li class="nav-item"><a href="#libros" class="nav-link">Libros</a></li>
                    <li class="nav-item"><a href="#map" class="nav-link">Ubicacion</a></li>
                    <li class="nav-item"><a href="<?php echo base_url; ?>Login" class="nav-link">Sistema</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <hr>
    <div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 img-carousel" src="Assets/img/slider1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-carousel" src="Assets/img/slider2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-carousel" src="Assets/img/slider3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-carousel" src="Assets/img/sslider4.jpg" alt="Four slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <hr>
    <div class="container mb-4">
        <div class="row">
            <!-- Columna para la descripción -->
            <div class="col-md-6">
                <div class="location-card">
                    <h2><b>Ubicación</b></h2>
                    <div class="location-content-left">
                        <p>La Municipalidad Provincial de Lambayeque se encuentra en la siguiente dirección:</p>
                        <address class="address">
                            <strong>Dirección:</strong> Grau 126 Lambayeque, Lambayeque, Peru<br>
                            <strong>Teléfono:</strong> (074) 482107<br>
                            <strong>Correo:</strong> bibliotecaeducacionycultura@gmail.com
                        </address>
                    </div>
                </div>
            </div>

            <!-- Columna para el mapa -->
            <div class="col-md-6">
                <div id="map" style="height: 400px;"></div>
            </div>
        </div>
    </div>

    <div class="container mt-5" id="libros">
        <h2>Lista de Libros</h2>
    </div>

    <div class="social-icons">
        <ul>
            <li><a href="https://www.facebook.com/MunicipalidadLambayeque/" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://web.whatsapp.com/" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
            <li><a href="https://www.instagram.com/munilambayeque/?utm_source=ig_embed&ig_rid=e8ae8521-c9b7-4fd0-84cc-457ffaa3941e" target="_blank"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>


    <div>
        <footer>
            <p>&copy; Copyright 2023 - Biblioteca Municipalidad Provincial de Lambayeque. Todos los derechos reservados.</p>
            <!-- <div class="social-icons"> -->
        </footer>
    </div>

    <script src="<?php echo base_url; ?>Assets/Municipalidad/js/slim.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/Municipalidad/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/Municipalidad/js/pag.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?API_KEY=AIzaSyDOwViEs4ESnng9X7V0So3zQ47aRuME01g&callback=initMap" async defer></script>
    <script>
        // Inicializa el mapa cuando la página se carga
        google.maps.event.addDomListener(window, 'load', initMap);
    </script>

</body>

</html>