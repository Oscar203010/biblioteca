<?php 

    class DashboardModel extends Query{
        
        private $nom_autor, $estado, $id;

        public function __construct()
        {
            //echo "Conectado...";
            parent::__construct();
        }

    }

?>