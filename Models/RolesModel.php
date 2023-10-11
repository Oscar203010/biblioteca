<?php 

    class RolesModel extends Query{
        
        private $nombre_rol, $estado, $id;

        public function __construct()
        {
            //echo "Conectado...";
            parent::__construct();
        }

        public function getRoles(){
            $sql = "SELECT * FROM rol";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function registrarRoles(string $nombre_rol)
        {
           $this->nombre_rol = $nombre_rol; 

           $verificar = "SELECT * FROM rol WHERE nombre_rol = '$this->nombre_rol'";
           $existe = $this->select($verificar);
           if(empty($existe)){
                $sql = "INSERT INTO rol(nombre_rol) VALUES(?)";
                $datos = array($this->nombre_rol);
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


        public function editarRoles(int $id){
            $sql = "SELECT * FROM rol WHERE id= $id";
            $data = $this->select($sql);
            return $data;
        }

        public function modificarRoles(string $nombre_rol,int $id)
        {
           $this->nombre_rol = $nombre_rol; 
           $this->id = $id; 
           
           $sql = "UPDATE rol SET nombre_rol = ? WHERE id = ?";
           $datos = array($this->nombre_rol, $this->id);
           $data = $this->save($sql, $datos);
           if ($data == 1) {
                $res = "Modificado";
           }else{
                $res = "Error";
            }
           return $res;
        }

        public function accionRoles(int $estado, int $id){
            $this->id = $id;
            $this->estado = $estado;
            $sql = "UPDATE rol SET estado = ? WHERE id = ?";
            $datos = array($this->estado, $this->id); 
            $data = $this->save($sql, $datos);
            return $data;
        }

    }

?>