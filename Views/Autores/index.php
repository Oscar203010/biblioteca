<?php include "Views/Templates/header.php"; ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Gestion de Autores</h1>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-primary mb-2 ml-2" type="button" onclick="frmAutor();"><i class="fas fa-plus"></i>  Nuevo Autor</button>

    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Listado de Categorias</h3>
            </div>
            <div class="card-body">
                <table id="tblAutores" class="table-bordered table-striped display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre Autor</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                </table>
                <div id="nuevo_autor" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title text-white" id="title"> Nuevo Autor</h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" id="frmAutor" autocomplete="off">
                                    <div class="form-group mb-2">
                                        <label for="nom_autor">Nombre y apellidos del autor</label>
                                        <input type="hidden" id="id" name="id">
                                        <input id="nom_autor" class="form-control" type="text" name="nom_autor" placeholder="Nombre del autor">
                                    </div>

                                    <button class="btn btn-primary" type="button" onclick="registrarAuto(event);" id="btnAccion">Registrar</button>
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