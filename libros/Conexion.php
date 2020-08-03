<?php
class Conexion{
private static $conexion=null;
public static function getConexion(){
    if (Conexion::$conexion!=null){
        return Conexion::$conexion;

    }else{
        $user = "root";
        $pass = "";
        $servidor = "localhost";
        $basededatos = "librosExamen";
        Conexion::$conexion = new mysqli($servidor, $user, $pass, $basededatos);
return Conexion::$conexion;
    }
}
}
        ?>