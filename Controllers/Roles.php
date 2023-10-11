<?php 
    
    class Roles extends Controller{
       
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
            $data = $this->model->getRoles();
            for ($i=0; $i < count($data); $i++) { 
                if($data[$i]['estado'] == 1){
                    $data[$i]['estado'] = '<span class="badge badge-success">Activo</span>';
                    $data[$i]['acciones'] = '<div>
                    <button class="btn btn-primary" type="button" onclick="btnEditarRoles('.$data[$i]['id']. ');"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger" type="button" onclick="btnEliminarRoles('.$data[$i]['id']. ');"><i class="fas fa-trash-alt"></i></button>
                    </div>';
                }else{
                    $data[$i]['estado'] = '<span class="badge badge-danger">Inactivo</span>';
                    $data[$i]['acciones'] = '<div>
                    <button class="btn btn-success" type="button" onclick="btnReingresarRoles('.$data[$i]['id']. ');"><i class="fas fa-undo"></i></button>
                    </div>';
                } 
            }
            echo json_encode($data, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function registrar()
        {
            $nombre_rol = $_POST['nombre_rol'];
            $id = $_POST['id'];
            
            if (empty($nombre_rol)){
                $msg = "Todos los campos son obligatorios!";
            }else{
            if($id == ""){
                        $data = $this->model->registrarRoles($nombre_rol); 
                        if ($data == "Ok") {
                            $msg = "si";
                        }else if($data == "existe"){
                            $msg = "El rol ya existe";
                        }else{
                            $msg = "Error al registrar el rol";
                        }  
            }else{
                    $data = $this->model->modificarRoles($nombre_rol,$id); 
                    if ($data == "Modificado") {
                        $msg = "Modificado";
                    }else{
                        $msg = "Error al modificar el rol";
                    }
                }
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function editar(int $id){
            //print_r($id);
            $data = $this->model->editarRoles($id);
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function eliminar(int $id){
            //print_r($id);
            $data = $this->model->accionRoles(0, $id);
            if($data == 1){
                $msg = "Ok";
            }else{
                $msg = "Error al eliminar el rol";
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function reingresar(int $id){
            //print_r($id);
            $data = $this->model->accionRoles(1, $id);
            if($data == 1){
                $msg = "Ok";
            }else{
                $msg = "Error al reingresar el rol";
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }
    }

?>
