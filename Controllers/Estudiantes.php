<?php 
    
    class Estudiantes extends Controller{
       
        protected $views,$model;
        
        public function __construct() {
            session_start();
            
            if(empty($_SESSION['activo'])) {
                header("location: ".base_url);
            }  
            
            parent::__construct();
        }

        public function index()
        {
            $this->views->getView($this, "index");
        }

        public function listar()
        {
            $data = $this->model->getEstudiantes();
            for ($i=0; $i < count($data); $i++) { 
                if($data[$i]['estado'] == 1){
                    $data[$i]['estado'] = '<span class="badge badge-success">Activo</span>';
                    $data[$i]['acciones'] = '<div>
                    <button class="btn btn-warning" type="button" onclick="btnEditarEstudiantes('.$data[$i]['id']. ');"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger" type="button" onclick="btnEliminarEstudiantes('.$data[$i]['id']. ');"><i class="fas fa-trash-alt"></i></button>
                    </div>';
                }else{
                    $data[$i]['estado'] = '<span class="badge badge-danger">Inactivo</span>';
                    $data[$i]['acciones'] = '<div>
                    <button class="btn btn-success" type="button" onclick="btnReingresarEstudiantes('.$data[$i]['id']. ');"><i class="fas fa-undo"></i></button>
                    </div>';
                } 
            }
            echo json_encode($data, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function registrar()
        {
            $codigo = $_POST['codigo'];
            $dni = $_POST['dni'];
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            $id = $_POST['id'];
            
            if (empty($codigo) || empty($dni) || empty($nombres) || empty($apellidos) || empty($direccion) || empty($telefono)){
                $msg = "Todos los campos son obligatorios!";
            }else{
            if($id == ""){
                        $data = $this->model->registrarEstudiantes($codigo, $dni, $nombres, $apellidos, $direccion, $telefono); 
                        if ($data == "Ok") {
                            $msg = "si";
                        }else if($data == "existe"){
                            $msg = "El estudiante ya existe";
                        }else{
                            $msg = "Error al registrar el estudiante";
                        }  
            }else{
                    $data = $this->model->modificarEstudiantes($codigo, $dni, $nombres, $apellidos, $direccion, $telefono, $id); 
                    if ($data == "Modificado") {
                        $msg = "Modificado";
                    }else{
                        $msg = "Error al modificar el estudiante";
                    }
                }
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function editar(int $id){
            //print_r($id);
            $data = $this->model->editarEstudiantes($id);
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function eliminar(int $id){
            //print_r($id);
            $data = $this->model->accionEstudiantes(0, $id);
            if($data == 1){
                $msg = "Ok";
            }else{
                $msg = "Error al eliminar el estudiante";
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function reingresar(int $id){
            //print_r($id);
            $data = $this->model->accionEstudiantes(1, $id);
            if($data == 1){
                $msg = "Ok";
            }else{
                $msg = "Error al reingresar el estudiante";
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }
    }

?>