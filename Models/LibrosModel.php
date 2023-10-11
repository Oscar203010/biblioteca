<?php

class LibrosModel extends Query
{
    private $titulo, $id_autor, $id_editorial, $descripcion, $estado, $id;

    public function __construct()
    {
        //echo "Conectado...";
        parent::__construct();
    }

    public function getLibros()
    {
        $sql = "SELECT l.*, a.nom_autor, e.nom_editorial FROM libros l INNER JOIN autores a ON l.id_autor = a.id INNER JOIN editorial e ON l.id_editorial = e.id";
        $res = $this->selectAll($sql);
        return $res;
    }

    public function getAutores(){
        $sql ="SELECT * FROM autores WHERE estado = 1";
        $data = $this->selectAll($sql);
        return $data;
    }

    public function getEditoriales(){
        $sql = "SELECT * FROM editorial WHERE estado = 1";
        $data = $this->selectAll($sql);
        return $data;
    }

    public function registrarLibros(string $titulo, int $id_autor, int $id_editorial, string $descripcion)
    {
        $this->titulo = $titulo;
        $this->id_autor = $id_autor;
        $this->id_editorial = $id_editorial;
        $this->descripcion = $descripcion;

        $verificar = "SELECT * FROM libros WHERE titulo = '$this->titulo'";
        $existe = $this->select($verificar);
        if (empty($existe)) {
            $sql = "INSERT INTO libros(titulo, id_autor, id_editorial, descripcion) VALUES(?,?,?,?)";
            $datos = array($this->titulo, $this->id_autor, $this->id_editorial, $this->descripcion);
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

    public function editarLibros(int $id)
    {
        $sql = "SELECT * FROM libros WHERE id= $id";
        $data = $this->select($sql);
        return $data;
    }

    public function modificarLibros(string $titulo, int $id_autor, int $id_editorial, string $descripcion, int $id)
    {
        $this->titulo = $titulo;
        $this->id_autor = $id_autor;
        $this->id_editorial = $id_editorial;
        $this->descripcion = $descripcion;
        $this->id = $id;

        $sql = "UPDATE libros SET titulo = ? , id_autor = ?, id_editorial = ?, descripcion = ? WHERE id = ?";
        $datos = array($this->titulo, $this->id_autor, $this->id_editorial, $this->descripcion, $this->id);
        $data = $this->save($sql, $datos);
        if ($data == 1) {
            $res = "Modificado";
        } else {
            $res = "Error";
        }
        return $res;
    }

    public function accionLibros(int $estado, int $id)
    {
        $this->id = $id;
        $this->estado = $estado;
        $sql = "UPDATE libros SET estado = ? WHERE id = ?";
        $datos = array($this->estado, $this->id);
        $data = $this->save($sql, $datos);
        return $data;
    }
}
