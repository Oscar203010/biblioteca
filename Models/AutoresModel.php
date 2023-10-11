<?php 

    class AutoresModel extends Query{
        
        private $nom_autor, $estado, $id;

        public function __construct()
        {
            //echo "Conectado...";
            parent::__construct();
        }

        public function getAutores(){
            $sql = "SELECT * FROM autores";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function registrarAutores(string $nom_autor)
        {
           $this->nom_autor = $nom_autor; 
           
           $verificar = "SELECT * FROM autores WHERE nom_autor = '$this->nom_autor'";
           $existe = $this->select($verificar);
           if(empty($existe)){
                $sql = "INSERT INTO autores(nom_autor) VALUES(?)";
                $datos = array($this->nom_autor);
                $data = $this->save($sql, $datos);
                if ($data == 1) {
                    $res = "Ok";
                }else{
                    $res = "Error";
                }
           }else{
                $res = "existe";
           }
           return $res;
        }

        public function editarAutores(int $id){
            $sql = "SELECT * FROM autores WHERE id= $id";
            $data = $this->select($sql);
            return $data;
        }

        public function modificarAutores(string $nom_autor, int $id)
        {
           $this->nom_autor = $nom_autor; 
           $this->id = $id; 
           
           $sql = "UPDATE autores SET nom_autor = ? WHERE id = ?";
           $datos = array($this->nom_autor, $this->id);
           $data = $this->save($sql, $datos);
           if ($data == 1) {
                $res = "Modificado";
           }else{
                $res = "Error";
            }
           return $res;
        }

        public function accionAutores(int $estado, int $id){
            $this->id = $id;
            $this->estado = $estado;
            $sql = "UPDATE autores SET estado = ? WHERE id = ?";
            $datos = array($this->estado, $this->id); 
            $data = $this->save($sql, $datos);
            return $data;
        }

    }

?>