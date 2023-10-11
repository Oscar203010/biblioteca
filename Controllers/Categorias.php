<?php

class Categorias extends Controller
{

    protected $views, $model;

    public function __construct()
    {
        session_start();
        
        if (empty($_SESSION['activo'])) {
            header("location: " . base_url);
        }

        parent::__construct();
    }

    public function index()
    {
        $this->views->getView($this, "index");
    }

    public function listar()
    {
        $data = $this->model->getCategorias();
        for ($i = 0; $i < count($data); $i++) {
            if ($data[$i]['estado'] == 1) {
                $data[$i]['estado'] = '<span class="badge badge-success">Activo</span>';
                $data[$i]['acciones'] = '<div>
                <button class="btn btn-primary" type="button" onclick="btnEditarCategorias(' . $data[$i]['id'] . ');"><i class="fas fa-edit fa-xs"></i></button>
                <button class="btn btn-danger" type="button" onclick="btnEliminarCategorias(' . $data[$i]['id'] . ');"><i class="fas fa-trash-alt fa-xs"></i></button>
            </div>';
            } else {
                $data[$i]['estado'] = '<span class="badge badge-danger">Inactivo</span>';
                $data[$i]['acciones'] = '<div>
                <button class="btn btn-success" type="button" onclick="btnReingresarCategorias(' . $data[$i]['id'] . ');"><i class="fas fa-undo"></i></button>
            </div>';
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function registrar()
    {
        $nombre_categoria = $_POST['nombre_categoria'];
        $id = $_POST['id'];

        if (empty($nombre_categoria)) {
            $msg = "Todos los campos son obligatorios!";
        } else {
            if ($id == "") {
                $data = $this->model->registrarCategorias($nombre_categoria);
                if ($data == "Ok") {
                    $msg = "si";
                } else if ($data == "existe") {
                    $msg = "El distrito ya existe";
                } else {
                    $msg = "Error al registrar la categoria";
                }
            } else {
                $data = $this->model->modificarCategorias($nombre_categoria, $id);
                if ($data == "Modificado") {
                    $msg = "Modificado";
                } else {
                    $msg = "Error al modificar la categoria";
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function editar(int $id)
    {
        //print_r($id);
        $data = $this->model->editarCategorias($id);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function eliminar(int $id)
    {
        //print_r($id);
        $data = $this->model->accionCategorias(0, $id);
        if ($data == 1) {
            $msg = "Ok";
        } else {
            $msg = "Error al eliminar la categoria";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function reingresar(int $id)
    {
        //print_r($id);
        $data = $this->model->accionCategorias(1, $id);
        if ($data == 1) {
            $msg = "Ok";
        } else {
            $msg = "Error al reingresar la categoria";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
}
