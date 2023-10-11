<?php include "Views/Templates/header.php"; ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Gestion de Libros</h1>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-primary mb-2 ml-2" type="button" onclick="frmLibros();"><i class="fas fa-plus"></i> Nuevo Libro</button>

    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Listado de Libros</h3>
            </div>
            <div class="card-body">
                <table id="tblLibros" class="table-bordered table-striped display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titulo</th>
                            <th>Autor</th>
                            <th>Editorial</th>
                            <th>Descripcion</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                </table>
                <div id="nuevo_libro" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title text-white" id="title">Nuevo Libro</h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" id="frmLibros" autocomplete="off" enctype="multipart/form-data">
                                    <div class="form-group mb-2">
                                        <label for="titulo">Titulo</label>
                                        <input type="hidden" id="id" name="id">
                                        <input id="titulo" class="form-control" type="text" name="titulo" placeholder="Ingrese titulo">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nom_autor">Autores</label>
                                                <select id="nom_autor" class="form-control" name="nom_autor">
                                                    <option disabled selected>Seleccione autor</option>
                                                    <?php foreach ($data['autores'] as $row) { ?>
                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['nom_autor']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nom_editorial">Editorial</label>
                                                <select id="nom_editorial" class="form-control" name="nom_editorial">
                                                    <option value="" disabled selected>Seleccione editorial</option>
                                                    <?php foreach ($data['editoriales'] as $row) { ?>
                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['nom_editorial']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="archivo">Archivo PDF</label>
                                        <input type="file" id="archivo" name="archivo" accept=".pdf" class="form-control-file">
                                    </div>

                                    <div class="form-group">
                                        <label for="descripcion">Descripción</label>
                                        <textarea id="descripcion" class="form-control" name="descripcion" rows="2" placeholder="Descripción"></textarea>
                                    </div>

                                    <button class="btn btn-primary" type="button" onclick="registrarLibro(event);" id="btnAccion">Registrar</button>
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