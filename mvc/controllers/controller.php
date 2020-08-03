<?php

class MvcController{
    public function plantilla(){
        include "views/template.php";
    }

    public static function enlacesPaginasController(){
        if(isset($_GET["page"])){
            $enlacesController=$_GET["page"];
        }else{
            $enlacesController="inicio";
        }
        
    
        
        
       // echo $enlacesController;
    
        $respuesta=EnlacesPaginas::enlacesPaginasModel($enlacesController);

        include $respuesta;
    }
}
?>