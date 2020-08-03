<?php 
class LoginController{
  public static function index(){
      if(count($_POST)>0){
          extract($_POST);
        $conexion=Conexion::getConexion();
        $consulta = "select * from usuarios where usuario=? and password=?";
        $stm = $conexion->prepare($consulta);
        if($stm!=null){
        $stm->bind_param("ss", $user, $pass);
        $stm->execute();
        $resultado = $stm->get_result();
      
                if ($resultado->num_rows>0) {
                
$_SESSION["usuario"]=$user;
           header("Location:./usuario");
        } else {
            $error="Error en usuario o contraseña";
        }
    }
      }
      include "vistas/login/index.php";
  }  
}


?>