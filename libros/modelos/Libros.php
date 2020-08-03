<?php

class Libros
{
    public $id, $codigo, $titulo, $autor;

    public function __construct($id, $codigo, $titulo, $autor)
    {
        $this->id = $id;
        $this->codigo = $codigo;
        $this->titulo = $titulo;
        $this->autor = $autor;

    }
    public static function getAll()
    {
        $libros = null;
        $conexion = Conexion::getConexion();
        $consulta = "select * from libros";
        $resultado = $conexion->query($consulta);
        while ($row = $resultado->fetch_assoc()) {
            extract($row);
            $libros[] = new Libros($id, $codigo, $titulo, $autor);
        }
        return $libros;
    }
    
    public function modificar(){
        $conexion=Conexion::getConexion();
        $consulta="update libros set codigo=?, titulo=?, autor=?";
        $stm= $conexion->prepare($consulta);
        if($stm!=null){
            $stm->bind_param("sss", $this->codigo, $this->titulo, $this->autor);
            $stm->execute();
           
    
        }else{
            return $conexion->error;
    
        }
    }
    public static function getbyId($id)
    {
        $conexion = Conexion::getConexion();
        $consulta = "select * from libros where id=?";
        $stm = $conexion->prepare($consulta);
        if ($stm != null) {
            $stm->bind_param("i", $id);
            $stm->execute();
            $resultado = $stm->get_result();
            $row = $resultado->fetch_assoc();
            extract($row);
            return new Libros($id, $codigo, $titulo, $autor);
        }
    }
    public function guardar()
    {
        $conexion = Conexion::getConexion();
        $consulta = "insert into libros (codigo,titulo,autor) values (?,?,?)";

        $stm = $conexion->prepare($consulta);
        $stm->bind_param("sss", $this->codigo, $this->titulo, $this->autor);
        $stm->execute();

        return $stm->get_result();
    }
    
}

?>

