<?php

class Usuario{
    public $id, $nombre, $usuario, $password,$perfil, $codigo, $especialidad;

    public function __construct($id, $nombre, $usuario, $password, $perfil, $codigo, $especialidad)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->perfil = $perfil;
        $this->codigo = $codigo;
        $this->especialidad = $especialidad;
    }
    public static function getAll()
    {
        $usuarios = null;
        $conexion = Conexion::getConexion();
        $consulta = "select * from usuarios where activo=1";
        $resultado = $conexion->query($consulta);
        while ($row = $resultado->fetch_assoc()) {
            extract($row);
            $usuarios[] = new Usuario($id, $nombre, $usuario, $password, $perfil, $codigo, $especialidad);
        }
        return $usuarios;
    }
    public function save()
{
    $conexion = Conexion::getConexion();
    $consulta = "insert into usuarios (nombre,usuario,password,perfil,codigo,especialidad) values (?,?,?,?,?,?)";

    $stm = $conexion->prepare($consulta);
    $stm->bind_param("sssiss", $this->nombre, $this->usuario, $this->password, $this->perfil, $this->codigo, $this->especialidad);
    $stm->execute();

    return $stm->get_result();
}




public static function getbyId($id)
{
    $conexion = Conexion::getConexion();
    $consulta = "select * from usuarios where id=? and activo=1";
    $stm = $conexion->prepare($consulta);
    if ($stm != null) {
        $stm->bind_param("i", $id);
        $stm->execute();
        $resultado = $stm->get_result();
        $row=$resultado->fetch_assoc();
        extract($row)
;            return new Usuario($id,$nombre,$usuario,"",$perfil,$codigo,$especialidad);
    }
}

public function modificar(){
    $conexion=Conexion::getConexion();
    $consulta="update usuarios set nombre=?, usuario=?, perfil=?, codigo=?, especialidad=? where id=?";
    $stm= $conexion->prepare($consulta);
    if($stm!=null){
        $stm->bind_param("ssssss", $this->nombre, $this->usuario, $this->perfil, $this->codigo, $this->especialidad, $this->id);
        $stm->execute();
       

    }else{
        return $conexion->error;

    }
}



    }
    ?>
    