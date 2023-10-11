<?php include "Views/Templates/header.php"; ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Gestion de Prestamos</h1>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-primary mb-2 ml-2" type="button" onclick="frmPrestamos();"><i class="fas fa-plus"></i> Nuevo Prestamo</button>

    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Listado de Prestamos</h3>
            </div>
            <div class="card-body">
                <table id="tblPrestamos" class="table-bordered table-striped display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Libro</th>
                            <th>Estudiante</th>
                            <th>Fecha Prestamo</th>
                            <th>Fecha Devolucion</th>
                            <th>Observacion</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                </table>
                <div id="nuevo_prestamo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title text-white" id="title">Nuevo Prestamo</h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" id="frmPrestamos" autocomplete="off">
                                    <!-- <div class="form-group mb-2">
                                        <label for="nombres">Titulo</label>
                                        <input type="hidden" id="id" name="id">
                                        <input id="nombres" class="form-control" type="text" name="nombres" placeholder="Ingrese Nombres">
                                    </div> -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nombres">Estudiante</label>
                                                <input type="hidden" id="id" name="id">
                                                    <select id="nombres" class="form-control" name="nombres">
                                                        <option disabled selected>Seleccione estudiante</option>
                                                        <?php foreach ($data['estudiantes'] as $row) { ?>
                                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['nombres']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="titulo">Libro</label>
                                                <select id="titulo" class="form-control" name="titulo">
                                                    <option value="" disabled selected>Seleccione Libro</option>
                                                    <?php foreach ($data['libros'] as $row) { ?>
                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['titulo']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="fecha_prestamo">Fecha de Prestamo</label>
                                        <input id="fecha_prestamo" class="form-control" type="date" name="fecha_prestamo" value="<?php echo date("Y-m-d"); ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="fecha_devolucion">Fecha de Devolución</label>
                                        <input id="fecha_devolucion" class="form-control" type="date" name="fecha_devolucion" value="<?php echo date("Y-m-d"); ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="observacion">Observación</label>
                                        <textarea id="observacion" class="form-control" placeholder="Observación" name="observacion" rows="3"></textarea>
                                    </div>

                                    <button class="btn btn-primary" type="button" onclick="registrarPrest(event);" id="btnAccion">Registrar</button>
                                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include "Views/Templates/footer.php"; ?>