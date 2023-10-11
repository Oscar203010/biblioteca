<?php 

    class Libros extends Controller{
       
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

            $data['autores'] = $this->model->getAutores();
            $data['editoriales'] = $this->model->getEditoriales();
            $this->views->getView($this, "index", $data);
        }

        public function listar()
        {
            $data = $this->model->getLibros();
            for ($i=0; $i < count($data); $i++) { 
                if($data[$i]['estado'] == 1){
                    $data[$i]['estado'] = '<span class="badge badge-success">Activo</span>';
                    $data[$i]['acciones'] = '<div>
                    <button class="btn btn-warning" type="button" onclick="btnEditarLibros('.$data[$i]['id']. ');"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger" type="button" onclick="btnEliminarLibros('.$data[$i]['id']. ');"><i class="fas fa-trash-alt"></i></button>
                    </div>';
                }else{
                    $data[$i]['estado'] = '<span class="badge badge-danger">Inactivo</span>';
                    $data[$i]['acciones'] = '<div>
                    <button class="btn btn-success" type="button" onclick="btnReingresarLibros('.$data[$i]['id']. ');"><i class="fas fa-undo"></i></button>
                    </div>';
                } 
            }
            echo json_encode($data, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function registrar()
        {
            $titulo = $_POST['titulo'];
            $nom_autor = $_POST['nom_autor'];
            $nom_editorial = $_POST['nom_editorial'];
            $descripcion = $_POST['descripcion'];
            $id = $_POST['id'];
            
            if (empty($titulo) || empty($nom_autor) || empty($nom_editorial) || empty($descripcion)){
                $msg = "Todos los campos son obligatorios!";
            }else{
            if($id == ""){
                        $data = $this->model->registrarLibros($titulo, $nom_autor, $nom_editorial,$descripcion); 
                        if ($data == "Ok") {
                            $msg = "si";
                        }else if($data == "existe"){
                            $msg = "El libro ya existe";
                        }else{
                            $msg = "Error al registrar el libro";
                        }  
            }else{
                    $data = $this->model->modificarLibros($titulo, $nom_autor, $nom_editorial, $descripcion, $id); 
                    if ($data == "Modificado") {
                        $msg = "Modificado";
                    }else{
                        $msg = "Error al modificar el libro";
                    }
                }
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function editar(int $id){
            //print_r($id);
            $data = $this->model->editarLibros($id);
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function eliminar(int $id){
            //print_r($id);
            $data = $this->model->accionLibros(0, $id);
            if($data == 1){
                $msg = "Ok";
            }else{
                $msg = "Error al eliminar el libro";
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function reingresar(int $id){
            //print_r($id);
            $data = $this->model->accionLibros(1, $id);
            if($data == 1){
                $msg = "Ok";
            }else{
                $msg = "Error al reingresar el libro";
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }
    }

?>