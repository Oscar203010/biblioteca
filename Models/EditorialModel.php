<?php 

    class EditorialModel extends Query{
        
        private $nom_editorial, $estado, $id;

        public function __construct()
        {
            //echo "Conectado...";
            parent::__construct();
        }

        public function getEditoriales(){
            $sql = "SELECT * FROM editorial";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function registrarEditoriales(string $nom_editorial)
        {
           $this->nom_editorial = $nom_editorial;
           
           $verificar = "SELECT * FROM editorial WHERE nom_editorial = '$this->nom_editorial'";
           $existe = $this->select($verificar);
           if(empty($existe)){
                $sql = "INSERT INTO editorial(nom_editorial) VALUES(?)";
                $datos = array($this->nom_editorial);
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


        public function editarEditoriales(int $id){
            $sql = "SELECT * FROM editorial WHERE id= $id";
            $data = $this->select($sql);
            return $data;
        }

        public function modificarEditoriales(string $nom_editorial, int $id)
        {
           $this->nom_editorial = $nom_editorial; 
           $this->id = $id; 
           
           $sql = "UPDATE editorial SET nom_editorial = ? WHERE id = ?";
           $datos = array($this->nom_editorial, $this->id);
           $data = $this->save($sql, $datos);
           if ($data == 1) {
                $res = "Modificado";
           }else{
                $res = "Error";
            }
           return $res;
        }

        public function accionEditoriales(int $estado, int $id){
            $this->id = $id;
            $this->estado = $estado;
            $sql = "UPDATE editorial SET estado = ? WHERE id = ?";
            $datos = array($this->estado, $this->id); 
            $data = $this->save($sql, $datos);
            return $data;
        }

    }

?>