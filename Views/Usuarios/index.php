<?php include "Views/Templates/header.php"; ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Gestion de Usuarios</h1>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-primary mb-2 ml-2" type="button" onclick="frmUsuario();"><i class="fas fa-plus"></i> Nuevo Usuario</button>

    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Listado de Usuarios</h3>
            </div>
            <div class="card-body">
                <table id="tblUsuarios" class="table-bordered table-striped display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Usuario</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                </table>
                <div id="nuevo_usuario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title text-white" id="title">Nuevo Usuario</h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" id="frmUsuario" autocomplete="off">
                                    <div class="form-group mb-1">
                                        <label for="usuario">Usuario</label>
                                        <input type="hidden" id="id" name="id">
                                        <input id="usuario" class="form-control" type="text" name="usuario" placeholder="Usuario">
                                    </div>

                                    <div class="form-group mb-1">
                                        <label for="nombres">Nombres</label>
                                        <input id="nombres" class="form-control" type="text" name="nombres" placeholder="Nombres del Usuario">
                                    </div>

                                    <div class="form-group mb-1">
                                        <label for="apellidos">Apellidos</label>
                                        <input id="apellidos" class="form-control" type="text" name="apellidos" placeholder="Apellidos del Usuario">
                                    </div>

                                    <div class="form-group mb-1">
                                        <label for="correo">Correo</label>
                                        <input id="correo" class="form-control" type="text" name="correo" placeholder="Telefono del Usuario">
                                    </div>

                                    <div class="row" id="claves">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="clave">Contraseña</label>
                                                <input id="clave" class="form-control" type="password" name="clave" placeholder="Contraseña">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="confirmar">Confirmar Contraseña</label>
                                                <input id="confirmar" class="form-control" type="password" name="confirmar" placeholder="Confirmar Contraseña">
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" type="button" onclick="registrarUsu(event);" id="btnAccion">Registrar</button>
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