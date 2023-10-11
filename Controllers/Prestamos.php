<?php 

    class Prestamos extends Controller{
       
        protected $views,$model;
        
        public function __construct() {
            session_start();
            parent::__construct();
        }

        public function index()
        {
            if(empty($_SESSION['activo'])) {
                header("location: ".base_url);
            }

            $data['estudiantes'] = $this->model->getEstudiantes();
            $data['libros'] = $this->model->getLibros();
            $this->views->getView($this, "index", $data);
            // $this->views->getView($this, "index");
        }

        public function listar()
        {
            $data = $this->model->getPrestamos();
            for ($i=0; $i < count($data); $i++) { 
                if($data[$i]['estado'] == 1){
                    $data[$i]['estado'] = '<span class="badge badge-success">Activo</span>';
                    $data[$i]['acciones'] = '<div>
                    <button class="btn btn-warning" type="button" onclick="btnEditarPrestamos('.$data[$i]['id']. ');"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger" type="button" onclick="btnEliminarPrestamos('.$data[$i]['id']. ');"><i class="fas fa-trash-alt"></i></button>
                    </div>';
                }else{
                    $data[$i]['estado'] = '<span class="badge badge-danger">Inactivo</span>';
                    $data[$i]['acciones'] = '<div>
                    <button class="btn btn-success" type="button" onclick="btnReingresarPrestamos('.$data[$i]['id']. ');"><i class="fas fa-undo"></i></button>
                    </div>';
                } 
            }
            echo json_encode($data, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function registrar()
        {
            $nombres = $_POST['nombres'];
            $titulo = $_POST['titulo'];
            $fecha_prestamo = $_POST['fecha_prestamo'];
            $fecha_devolucion = $_POST['fecha_devolucion'];
            $observacion = $_POST['observacion'];
            $id = $_POST['id'];

            if (empty($nombres) || empty($titulo) || empty($fecha_prestamo) || empty($fecha_devolucion) || empty($observacion)){
                $msg = "Todos los campos son obligatorios!";
            }else{
            if($id == ""){
                        $data = $this->model->registrarPrestamos($nombres, $titulo, $fecha_prestamo,$fecha_devolucion,$observacion); 
                        if ($data == "Ok") {
                            $msg = "si";
                        }else if($data == "existe"){
                            $msg = "El prestamo ya existe";
                        }else{
                            $msg = "Error al registrar el prestamo";
                        }  
            }else{
                    $data = $this->model->modificarPrestamos($nombres, $titulo, $fecha_prestamo,$fecha_devolucion,$observacion, $id); 
                    if ($data == "Modificado") {
                        $msg = "Modificado";
                    }else{
                        $msg = "Error al modificar el prestamo";
                    }
                }
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function editar(int $id){
            //print_r($id);
            $data = $this->model->editarPrestamos($id);
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function eliminar(int $id){
            //print_r($id);
            $data = $this->model->accionPrestamos(0, $id);
            if($data == 1){
                $msg = "Ok";
            }else{
                $msg = "Error al eliminar el prestamo";
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function reingresar(int $id){
            //print_r($id);
            $data = $this->model->accionPrestamos(1, $id);
            if($data == 1){
                $msg = "Ok";
            }else{
                $msg = "Error al reingresar el prestamo";
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
