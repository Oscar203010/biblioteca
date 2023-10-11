<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca MPL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/dist/css/adminlte.min.css">
    <script src="<?php echo base_url; ?>Assets/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="icon" href="<?php echo base_url; ?>Assets/img/favicon.ico" rel="stylesheet" />
    <style>
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-image {
            flex: 1;
            text-align: center;
            padding: 20px;
        }

        .login-image img {
            max-width: 100%;
            height: auto;
        }

        .login-form {
            flex: 1;
            max-width: 400px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .login-box-msg {
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 20px;
            color: #333;
        }

        .form-control {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 12px;
            margin-bottom: 20px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        /* .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            font-size: 18px;
            font-weight: 600;
            color: #fff;
            transition: background-color 0.15s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        } */
        .btn-ingresar {
            background-color: #3498db;
            /* Cambia el color de fondo a azul */
            color: #fff;
            /* Cambia el color del texto a blanco */
            border: none;
            /* Elimina el borde */
            padding: 10px 20px;
            /* Ajusta el espacio interior */
        }

        /* Estilo personalizado para el botón "Cancelar" */
        .btn-cancelar {
            background-color: #e74c3c;
            /* Cambia el color de fondo a rojo */
            color: #fff;
            /* Cambia el color del texto a blanco */
            border: none;
            /* Elimina el borde */
            padding: 10px 20px;
            /* Ajusta el espacio interior */
        }

        .custom-btn {
            margin-right: 5px;
            /* Ajusta el margen derecho para separar los botones */
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-container">
        <div class="login-image">
            <div class="login-logo">
                <img src="<?php echo base_url; ?>Assets/img/Biblioteca.png" alt="Imagen de inicio de sesión" class="img-fluid">
            </div>
        </div>

        <div class="login-form">
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Iniciar Sesión</p>
                    <form id="frmLogin" autocomplete="off">
                        <div class="input-container">
                            <label class="small mb-1" for="correo">Usuario</label>
                            <div class="input-group mb-3">
                                <input type="correo" class="form-control" id="correo" name="correo" placeholder="Correo">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <label class="small mb-1" for="clave">Contraseña</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" id="clave" name="clave" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block" onclick="frmLogin(event);">Aceptar</button>
                            </div>
                        </div> -->
                        
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="form-group d-flex justify-content-center mt-4 mb-0">
                                    <button class="btn btn-primary custom-btn" type="submit" onclick="frmLogin(event);">Ingresar</button>
                                    <!-- <button href="< ?php echo base_url; ?>Municipalidad" class="btn btn-danger custom-btn">Cancelar</button> -->
                                    <a href="<?php echo base_url; ?>Municipalidad" class="btn btn-danger custom-btn">Cancelar</a>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="< ?php echo base_url; ?>Assets/plugins/jquery/jquery.min.js"></script> -->
    <script src="<?php echo base_url; ?>Assets/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url; ?>Assets/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="< ?php echo base_url; ?>Assets/dist/js/adminlte.min.js?v=3.2.0"></script> -->
    <script src="<?php echo base_url; ?>Assets/js/scripts.js"></script>
    <script src="<?php echo base_url; ?>Assets/js/sweetalert2.all.min.js"></script>
    <script>
        const base_url = "<?php echo base_url; ?>";
    </script>
    <script src="<?php echo base_url; ?>Assets/js/login.js"></script>
</body>

</html>