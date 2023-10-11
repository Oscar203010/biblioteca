<?php 
    
    class Editorial extends Controller{
       
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
            $data = $this->model->getEditoriales();
            for ($i=0; $i < count($data); $i++) { 
                if($data[$i]['estado'] == 1){
                    $data[$i]['estado'] = '<span class="badge badge-success">Activo</span>';
                    $data[$i]['acciones'] = '<div>
                    <button class="btn btn-warning" type="button" onclick="btnEditarEditoriales('.$data[$i]['id']. ');"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger" type="button" onclick="btnEliminarEditoriales('.$data[$i]['id']. ');"><i class="fas fa-trash-alt"></i></button>
                    </div>';
                }else{
                    $data[$i]['estado'] = '<span class="badge badge-danger">Inactivo</span>';
                    $data[$i]['acciones'] = '<div>
                    <button class="btn btn-success" type="button" onclick="btnReingresarEditoriales('.$data[$i]['id']. ');"><i class="fas fa-undo"></i></button>
                    </div>';
                } 
            }
            echo json_encode($data, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function registrar()
        {
            $nom_editorial = $_POST['nom_editorial'];
            $id = $_POST['id'];
            
            if (empty($nom_editorial)){
                $msg = "Todos los campos son obligatorios!";
            }else{
                if($id == ""){
                            $data = $this->model->registrarEditoriales($nom_editorial); 
                            if ($data == "Ok") {
                                $msg = "si";
                            }else if($data == "existe"){
                                $msg = "La editorial ya existe";
                            }else{
                                $msg = "Error al registrar la Editorial";
                            }  
                }else{
                        $data = $this->model->modificarEditoriales($nom_editorial,$id); 
                        if ($data == "Modificado") {
                            $msg = "Modificado";
                        }else{
                            $msg = "Error al modificar la editorial";
                        }
                    }
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function editar(int $id){
            //print_r($id);
            $data = $this->model->editarEditoriales($id);
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function eliminar(int $id){
            //print_r($id);
            $data = $this->model->accionEditoriales(0, $id);
            if($data == 1){
                $msg = "Ok";
            }else{
                $msg = "Error al eliminar la editorial";
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function reingresar(int $id){
            //print_r($id);
            $data = $this->model->accionEditoriales(1, $id);
            if($data == 1){
                $msg = "Ok";
            }else{
                $msg = "Error al reingresar la editorial";
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }
    }

?>