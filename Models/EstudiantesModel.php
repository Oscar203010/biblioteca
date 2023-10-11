<?php 

    class EstudiantesModel extends Query{
        
        private $codigo, $dni, $nombres, $apellidos, $direccion, $telefono, $estado, $id;

        public function __construct()
        {
            //echo "Conectado...";
            parent::__construct();
        }

        public function getEstudiantes(){
            $sql = "SELECT * FROM estudiantes";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function registrarEstudiantes(string $codigo, string $dni, string $nombres, string $apellidos, string $direccion, string $telefono)
        {
           $this->codigo = $codigo; 
           $this->dni = $dni; 
           $this->nombres = $nombres; 
           $this->apellidos = $apellidos; 
           $this->direccion = $direccion; 
           $this->telefono = $telefono; 
    
           $verificar = "SELECT * FROM estudiantes WHERE codigo = '$this->codigo'";
           $existe = $this->select($verificar);
           if(empty($existe)){
                $sql = "INSERT INTO estudiantes(codigo, dni , nombres, apellidos, direccion, telefono) VALUES(?,?,?,?,?,?)";
                $datos = array($this->codigo, $this->dni, $this->nombres, $this->apellidos, $this->direccion, $this->telefono);
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
    
        public function editarEstudiantes(int $id){
            $sql = "SELECT * FROM estudiantes WHERE id= $id";
            $data = $this->select($sql);
            return $data;
        }

        public function modificarEstudiantes(string $codigo, string $dni, string $nombres, string $apellidos, string $direccion, string $telefono, int $id)
        {
           $this->codigo = $codigo; 
           $this->dni = $dni; 
           $this->nombres = $nombres; 
           $this->apellidos = $apellidos; 
           $this->direccion = $direccion; 
           $this->telefono = $telefono; 
           $this->id = $id; 
           
           $sql = "UPDATE estudiantes SET codigo = ? , dni = ?, nombres = ?, apellidos = ?, direccion = ?, telefono = ?  WHERE id = ?";
           $datos = array($this->codigo, $this->dni, $this->nombres, $this->apellidos, $this->direccion, $this->telefono, $this->id);
           $data = $this->save($sql, $datos);
           if ($data == 1) {
                $res = "Modificado";
           }else{
                $res = "Error";
            }
           return $res;
        }

        public function accionEstudiantes(int $estado, int $id){
            $this->id = $id;
            $this->estado = $estado;
            $sql = "UPDATE estudiantes SET estado = ? WHERE id = ?";
            $datos = array($this->estado, $this->id); 
            $data = $this->save($sql, $datos);
            return $data;
        }

    }

?>