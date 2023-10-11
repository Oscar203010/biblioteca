<?php

class PrestamosModel extends Query
{
    private $id_estudiante, $id_libro, $fecha_prestamo, $fecha_devolucion, $observacion, $estado, $id;

    public function __construct()
    {
        //echo "Conectado...";
        parent::__construct();
    }

    public function getPrestamos()
    {
        // $sql = "SELECT e.id, e.nombres, l.id, l.titulo, p.id_libro, p.fecha_prestamo, p.fecha_devolucion,p.observacion, p.estado FROM estudiantes e INNER JOIN libros l INNER JOIN prestamos p ON p.id_estudiante = e.id WHERE p.id_libro = l.id";
        $sql= "SELECT e.id, e.nombres, l.id, l.titulo, p.id, p.id_estudiante, p.id_libro, p.fecha_prestamo, p.fecha_devolucion, p.observacion, p.estado FROM estudiantes e INNER JOIN libros l INNER JOIN prestamos p ON p.id_estudiante = e.id WHERE p.id_libro = l.id";
        $res = $this->selectAll($sql);
        return $res;   
    }

    public function getEstudiantes(){
        $sql ="SELECT * FROM estudiantes WHERE estado = 1";
        $data = $this->selectAll($sql);
        return $data;
    }
    
    public function getLibros(){
        $sql = "SELECT * FROM libros WHERE estado = 1";
        $data = $this->selectAll($sql);
        return $data;
    }

    public function registrarPrestamos($id_estudiante, $id_libro, $fecha_prestamo, $fecha_devolucion, $observacion)
    {
        $this->id_estudiante = $id_estudiante;
        $this->id_libro = $id_libro;
        $this->fecha_prestamo = $fecha_prestamo;
        $this->fecha_devolucion = $fecha_devolucion;
        $this->observacion = $observacion;

        $verificar = "SELECT * FROM prestamos WHERE  id_estudiante= '$this->id_estudiante'";
        $existe = $this->select($verificar);
        if (empty($existe)) {
            $sql = "INSERT INTO prestamos(id_estudiante, id_libro, fecha_prestamo, fecha_devolucion,observacion) VALUES(?,?,?,?,?)";
            $datos = array($this->id_estudiante, $this->id_libro, $this->fecha_prestamo, $this->fecha_devolucion, $this->observacion);
            $data = $this->save($sql, $datos);
            if ($data == 1) {
                $res = "Ok";
            } else {
                $res = "Error";
            }
        } else {
            $res = "existe";
        }
        return $res;
    }

    public function editarPrestamos(int $id)
    {
        $sql = "SELECT * FROM prestamos WHERE id= $id";
        $data = $this->select($sql);
        return $data;
    }

    public function modificarPrestamos($id_estudiante, $id_libro, $fecha_prestamo, $fecha_devolucion, $observacion,$id)
    {
        $this->id_estudiante = $id_estudiante;
        $this->id_libro = $id_libro;
        $this->fecha_prestamo = $fecha_prestamo;
        $this->fecha_devolucion = $fecha_devolucion;
        $this->observacion = $observacion;
        $this->id = $id;

        $sql = "UPDATE prestamos SET id_estudiante = ? , id_libro = ?, fecha_prestamo = ?, fecha_devolucion = ?, observacion = ? WHERE id = ?";
        $datos = array($this->id_estudiante, $this->id_libro, $this->fecha_prestamo, $this->fecha_devolucion,$this->observacion, $this->id);
        $data = $this->save($sql, $datos);
        if ($data == 1) {
            $res = "Modificado";
        } else {
            $res = "Error";
        }
        return $res;
    }

    public function accionPrestamos(int $estado, int $id)
    {
        $this->id = $id;
        $this->estado = $estado;
        $sql = "UPDATE prestamos SET estado = ? WHERE id = ?";
        $datos = array($this->estado, $this->id);
        $data = $this->save($sql, $datos);
        return $data;
    }
}
