<?php 

    class CategoriasModel extends Query{
        
        private $nombre_categoria, $estado, $id;

        public function __construct()
        {
            //echo "Conectado...";
            parent::__construct();
        }

        public function getCategorias(){
            $sql = "SELECT * FROM categorias";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function registrarCategorias(string $nombre_categoria)
        {
           $this->nombre_categoria = $nombre_categoria; 
           
           $verificar = "SELECT * FROM categorias WHERE nombre_categoria = '$this->nombre_categoria'";
           $existe = $this->select($verificar);
           if(empty($existe)){
                $sql = "INSERT INTO categorias(nombre_categoria) VALUES(?)";
                $datos = array($this->nombre_categoria);
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


        public function editarCategorias(int $id){
            $sql = "SELECT * FROM categorias WHERE id= $id";
            $data = $this->select($sql);
            return $data;
        }

        public function modificarCategorias(string $nombre_categoria, int $id)
        {
           $this->nombre_categoria = $nombre_categoria; 
           $this->id = $id; 
           
           $sql = "UPDATE categorias SET nombre_categoria = ? WHERE id = ?";
           $datos = array($this->nombre_categoria, $this->id);
           $data = $this->save($sql, $datos);
           if ($data == 1) {
                $res = "Modificado";
           }else{
                $res = "Error";
            }
           return $res;
        }

        public function accionCategorias(int $estado, int $id){
            $this->id = $id;
            $this->estado = $estado;
            $sql = "UPDATE categorias SET estado = ? WHERE id = ?";
            $datos = array($this->estado, $this->id); 
            $data = $this->save($sql, $datos);
            return $data;
        }

    }

?>