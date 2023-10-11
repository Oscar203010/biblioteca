<?php 

    class UsuariosModel extends Query{
        
        private $usuario, $nombres, $apellidos, $correo, $clave, $estado, $id;

        public function __construct()
        {
            //echo "Conectado...";
            parent::__construct();
        }

        public function getUsuario(string $correo, string $clave)
        {
            $sql = "SELECT * FROM usuarios WHERE correo='$correo' AND clave='$clave'";
            $data = $this->select($sql);
            return $data;
        }

        public function getUsuarios(){
            $sql = "SELECT * FROM usuarios";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function registrarUsua(string $usuario,string $nombres, string $apellidos,string $correo, string $clave)
        {
           $this->usuario = $usuario; 
           $this->nombres = $nombres; 
           $this->apellidos = $apellidos; 
           $this->correo = $correo; 
           $this->clave = $clave; 
            
           $verificar = "SELECT * FROM usuarios WHERE usuario = '$this->usuario'";
           $existe = $this->select($verificar);
           if(empty($existe)){
                $sql = "INSERT INTO usuarios(usuario, nombres, apellidos, correo, clave) VALUES(?,?,?,?,?)";
                $datos = array($this->usuario, $this->nombres, $this->apellidos, $this->correo, $this->clave);
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


        public function editarUser(int $id){
            $sql = "SELECT * FROM usuarios WHERE id= $id";
            $data = $this->select($sql);
            return $data;
        }

        public function modificarUsua(string $usuario,string $nombres, string $apellidos, string $correo, int $id)
        {
           $this->usuario = $usuario; 
           $this->nombres = $nombres; 
           $this->apellidos = $apellidos; 
           $this->correo = $correo; 
           $this->id = $id; 
           
           $sql = "UPDATE usuarios SET usuario = ?, nombres = ?, apellidos = ?, correo = ? WHERE id = ?";
           $datos = array($this->usuario, $this->nombres, $this->apellidos, $this->correo, $this->id);
           $data = $this->save($sql, $datos);
           if ($data == 1) {
                $res = "Modificado";
           }else{
                $res = "Error";
            }
           return $res;
        }

        public function accionUsuario(int $estado, int $id){
            $this->id = $id;
            $this->estado = $estado;
            $sql = "UPDATE usuarios SET estado = ? WHERE id = ?";
            $datos = array($this->estado, $this->id); 
            $data = $this->save($sql, $datos);
            return $data;
        }

        public function actualizarPass($clave, $id)
        {
            $sql = "UPDATE usuarios SET clave = ? WHERE id = ?";
            $datos = array($clave, $id);
            $data = $this->save($sql, $datos);
            if ($data == 1) {
                $res = "modificado";
            } else {
                $res = "error";
            }
            return $res;
        }
    }

?>
