<?php 

    class Login extends Controller{
       
        protected $views,$model;
        
        public function __construct() {
            session_start();
            parent::__construct();
        }


        public function index()
        {
            // if(empty($_SESSION['activo'])) {
            //     header("location: ".base_url);
            // }

            // $data['estudiantes'] = $this->model->getEstudiantes();
            // $data['libros'] = $this->model->getLibros();
            $this->views->getView($this, "index");
            // $this->views->getView($this, "index");
        }

    }
