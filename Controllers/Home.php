<?php 
    
    class Home extends Controller{
       
        protected $views,$model;
        
        public function __construct() {
            session_start();
            // if(!empty($_SESSION['activo'])) {
            //     header("location: ".base_url. "Dashboard");
            // } 
            // if(empty($_SESSION['activo'])) {
            //     header("location: ".base_url);
            // }
            parent::__construct();
        }

        public function index()
        {
            $this->views->getView($this, "index");
        }

    }

?>