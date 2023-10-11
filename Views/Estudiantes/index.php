<?php include "Views/Templates/header.php"; ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Gestion de Estudiantes || Otros</h1>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-primary mb-2 ml-2" type="button" onclick="frmEstudiantes();"><i class="fas fa-plus"></i> Nuevo Estudiante || Otro</button>

    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Listado de Estudiantes || Otros</h3>
            </div>
            <div class="card-body">
                <table id="tblEstudiantes" class="table-bordered table-striped display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Codigo</th>
                            <th>Dni</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                </table>
                <div id="nuevo_estudiante" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title text-white" id="title">Nuevo Estudiante || Otro</h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="frmEstudiantes" autocomplete="off">
                                    <div class="form-group mb-2">
                                        <label for="codigo">Codigo</label>
                                        <input type="hidden" id="id" name="id">
                                        <input id="codigo" class="form-control" type="text" name="codigo" placeholder="Codigo">
                                    </div>

                                    <div class="form-group mb-1">
                                        <label for="dni">Dni</label>
                                        <input id="dni" class="form-control" type="text" name="dni" placeholder="Ingrese Dni">
                                    </div>

                                    <div class="form-group mb-1">
                                        <label for="nombres">Nombres</label>
                                        <input id="nombres" class="form-control" type="text" name="nombres" placeholder="Ingrese nombres">
                                    </div>

                                    <div class="form-group mb-1">
                                        <label for="apellidos">Apellidos</label>
                                        <input id="apellidos" class="form-control" type="text" name="apellidos" placeholder="Ingrese Apellidos">
                                    </div>

                                    <div class="form-group mb-1">
                                        <label for="direccion">Direccion</label>
                                        <input id="direccion" class="form-control" type="text" name="direccion" placeholder="Ingrese Direccion">
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="telefono">Telefono</label>
                                        <input id="telefono" class="form-control" type="text" name="telefono" placeholder="Ingrese Telefono">
                                    </div>

                                    <button class="btn btn-primary" type="button" onclick="registrarEstudiante(event);" id="btnAccion">Registrar</button>
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