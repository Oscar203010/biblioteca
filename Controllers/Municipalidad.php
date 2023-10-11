<?php 
    
    class Municipalidad extends Controller{
       
        protected $views,$model;
        
        public function __construct() {
            session_start();
            
            // if(!empty($_SESSION['activo'])) {
            //     header("location: ".base_url. "Municipalidad");
            // }
            parent::__construct();
        }

        public function index()
        {
            $this->views->getView($this, "index");
            // $data["contenido"] = "Municipalidad/contactanos.php";
            // return $data;
        }

        public function contactanos(){
            $this->views->getView($this, "contactanos");
            // $data["contenido"] = "Municipalidad/galeria.php";
            // return $data;
        }
        
        public function home(){
            $this->views->getView($this, "home");
            // $data["contenido"] = "Municipalidad/home.php";
            // return $data;
        }

        public function mision(){
            $this->views->getView($this, "mision");
            // $data["contenido"] = "Municipalidad/mision.php";
            // return $data;
        }

        public function nosotros(){
            $this->views->getView($this, "nosotros");
            // $data["contenido"] = "Municipalidad/nosotros.php";
            // return $data;
        }

        public function objetivos(){
            $this->views->getView($this, "objetivos");
            // $data["contenido"] = "Municipalidad/objetivos.php";
            // return $data;
        }

        public function ubicacion(){
            $this->views->getView($this, "ubicacion");
            // $data["contenido"] = "Municipalidad/servicios.php";
            // return $data;
        }
    }
?>