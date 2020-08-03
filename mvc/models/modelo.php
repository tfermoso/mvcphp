<?php

class EnlacesPaginas{
    public function enlacesPaginasModel($enlacesModel){
        if($enlacesModel=="inicio" ||
           $enlacesModel=="nosotros" ||
           $enlacesModel=="servicios" ||
           $enlacesModel=="contacto"){
               $modulo="views/modulos/".$enlacesModel.".php";
           }else if($enlacesModel=="index"){
            $modulo="views/modulos/inicio.php";
           }else{
            $modulo="views/modulos/404.php"; 
           }

            return $modulo;
    }
}
?>