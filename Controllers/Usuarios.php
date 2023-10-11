<?php

class Usuarios extends Controller
{

    protected $views, $model;

    public function __construct()
    {
        session_start();
        parent::__construct();
    }

    public function index()
    {
        if (empty($_SESSION['activo'])) {
            header("location: " . base_url);
        }
    
        $this->views->getView($this, "index");
    }

    public function listar()
    {
        $data = $this->model->getUsuarios();
        for ($i = 0; $i < count($data); $i++) {
            if ($data[$i]['estado'] == 1) {
                $data[$i]['estado'] = '<span class="badge badge-success">Activo</span>';
                $data[$i]['acciones'] = '<div>
                    <button class="btn btn-warning" type="button" onclick="btnEditarUsuario(' . $data[$i]['id'] . ');"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger" type="button" onclick="btnEliminarUsuario(' . $data[$i]['id'] . ');"><i class="fas fa-trash-alt"></i></button>
                    </div>';
            } else {
                $data[$i]['estado'] = '<span class="badge badge-danger">Inactivo</span>';
                $data[$i]['acciones'] = '<div>
                    <button class="btn btn-success" type="button" onclick="btnReingresarUsuario(' . $data[$i]['id'] . ');"><i class="fas fa-undo"></i> <!-- Icono de reingreso --> </button>
                    </div>';
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function validar()
    {
        if (empty($_POST['correo']) || empty($_POST['clave'])) {
            $msg = "Los campos estan vacios!";
        } else {
            $correo = $_POST['correo'];
            $clave = $_POST['clave'];
            $hash = hash("SHA256", $clave);
            $data = $this->model->getUsuario($correo, $hash);
            if ($data) {
                $_SESSION['id_usuario'] = $data['id'];
                $_SESSION['correo'] = $data['correo'];
                $_SESSION['nombres'] = $data['nombres'];
                $_SESSION['activo'] = true;
                $msg = "Ok";
            } else {
                $msg = "Usuario o Contraseña incorrecta!";
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function registrar()
    {
        $usuario = $_POST['usuario'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];
        $clave = $_POST['clave'];
        $confirmar = $_POST['confirmar'];
        $id = $_POST['id'];
        $hash = hash("SHA256", $clave);
        if (empty($usuario) || empty($nombres) || empty($apellidos) || empty($correo)) {
            $msg = "Todos los campos son obligatorios!";
        } else {
            if ($id == "") {
                if ($clave != $confirmar) {
                    $msg = "Las Contraseñas no Coinciden";
                } else {
                    $data = $this->model->registrarUsua($usuario, $nombres, $apellidos, $correo, $hash, $id);
                    if ($data == "Ok") {
                        $msg = "si";
                    } else if ($data == "existe") {
                        $msg = "El usuario ya existe";
                    } else {
                        $msg = "Error al registrar el Usuario";
                    }
                }
            } else {
                $data = $this->model->modificarUsua($usuario, $nombres, $apellidos, $correo, $id);
                if ($data == "Modificado") {
                    $msg = "Modificado";
                } else {
                    $msg = "Error al modificar el Usuario";
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function editar(int $id)
    {
        //print_r($id);
        $data = $this->model->editarUser($id);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }


    public function eliminar(int $id)
    {
        //print_r($id);
        $data = $this->model->accionUsuario(0, $id);
        if ($data == 1) {
            $msg = "Ok";
        } else {
            $msg = "Error al eliminar el usuario";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function reingresar(int $id)
    {
        //print_r($id);
        $data = $this->model->accionUsuario(1, $id);
        if ($data == 1) {
            $msg = "Ok";
        } else {
            $msg = "Error al reingresar el usuario";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function salir()
    {
        session_destroy();
        header("location: " . base_url);
    }

    public function cambiarPas()
    {
        if ($_POST) {
            $id = $_SESSION['id_usuario'];
            $clave = ($_POST['clave_actual']);
            $user = $this->model->editarUser($id);
            if (hash("SHA256", $clave) == $user['clave']) {
                $hash = hash("SHA256", ($_POST['clave_nueva']));
                $data = $this->model->actualizarPass($hash, $id);
                if ($data == "modificado") {
                    $msg = array('msg' => 'Contraseña modificado', 'icono' => 'success');
                } else {
                    $msg = array('msg' => 'Error al modificar', 'icono' => 'warning');
                }
            } else {
                $msg = array('msg' => 'Contraseña actual incorrecta', 'icono' => 'warning');
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }
    }

}
