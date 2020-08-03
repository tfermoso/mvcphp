<?php 

class AjaxController{
    public static function index(){
       
    }
    public static function eliminar(){
        $id=$_POST["id"];
        $conexion=Conexion::getConexion();
        $consulta="delete from usuarios where id=?";
        $stm=$conexion->prepare($consulta);
       
    
        if($stm!=null){
            $stm->bind_param("i",$id);
            $stm->execute();
            $result=$stm->affected_rows;
          
        
        }else{
            echo $conexion->error;
        }
        var_dump($result);
        exit;
    }
}

?>