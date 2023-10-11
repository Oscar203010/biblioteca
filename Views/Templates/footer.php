<div>
    <footer class="main-footer">
        <strong>&copy; 2023 Municipalidad Provincial de Lambayeque</strong>
        <!-- Agrega el enlace a Facebook -->
        <a href="https://www.facebook.com/municipalidadlambayeque" target="_blank">Visitar Facebook</a>
    </footer>
</div>

<div id="cambiarClave" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="my-modal-title">Modificar Contraseña</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form autocomplete="off" id="frmCambiarPass" onsubmit="modificarClave(event)">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="clave_actual">Contraseña Actual</label>
                        <input id="clave_actual" class="form-control" type="password" name="clave_actual" id="clave_actual" placeholder="Contraseña actual" required>
                    </div>
                    <div class="form-group">
                        <label for="clave_nueva">Nueva Contraseña</label>
                        <input id="clave_nueva" class="form-control" type="password" name="clave_nueva" placeholder="Contraseña nueva" id="clave_nueva" required>
                    </div>
                    <div class="form-group">
                        <label for="clave_confirmar">Confirmar Contraseña</label>
                        <input id="clave_confirmar" class="form-control" type="password" name="clave_confirmar" id="clave_confirmar" placeholder="Confirmar contraseña" required>
                    </div>
                    <!-- <button class="btn btn-primary" type="button" onclick="registrarLibro(event);" id="btnAccion">Registrar</button> -->
                    <button class="btn btn-primary" type="submit">Cambiar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                </div>
                <!-- <div class="modal-footer"> -->

                <!-- </div> -->
            </form>
        </div>
    </div>
</div>

<script src="<?php echo base_url; ?>Assets/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url; ?>Assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url; ?>Assets/js/scripts.js"></script>
<script src="<?php echo base_url; ?>Assets/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url; ?>Assets/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url; ?>Assets/demo/datatables-demo.js"></script>

<script>
    const base_url = "<?php echo base_url; ?>";
</script>
<script src="<?php echo base_url; ?>Assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url; ?>Assets/js/funciones.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url; ?>Assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url; ?>Assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url; ?>Assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url; ?>Assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url; ?>Assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url; ?>Assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url; ?>Assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url; ?>Assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url; ?>Assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url; ?>Assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url; ?>Assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url; ?>Assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url; ?>Assets/dist/js/adminlte.js"></script>
<script src="<?php echo base_url; ?>Assets/DataTables/datatables.min.js"></script>


<!-- <script src="< ?php echo base_url; ?>Assets/js/jquery-3.6.3.min"></script> -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url; ?>Assets/dist/js/pages/dashboard.js"></script>
<script>
    $(document).on('click', '.btn-logaut', function(e) {
        e.preventDefault();
        const href = $(this).attr('href')
        Swal.fire({
            width: 450,
            title: 'Confirmación',
            text: "¿Está seguro que desea salir del sistema?",
            icon: 'question',
            showCancelButton: true,
            cancelButtonColor: '#ec217c',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Aceptar'
        }).then((resultado) => {
            if (resultado.value) {
                let timerInterval;
                Swal.fire({
                    title: 'Saliendo del Sistema',
                    html: 'Saliendo en <b></b> milisegundos.',
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft()
                        }, 100)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        console.log('I was closed by the timer')
                    }
                    // Redirige al usuario después de mostrar la alerta de "Auto close alert!"
                    document.location.href = href;
                });
            }
        })
    });
</script>

</body>

</html>