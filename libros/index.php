<?php
include_once "routers.php";
include_once "controladores/LibrosControlador.php";
include_once "modelos/Libros.php";
include_once "Conexion.php";
include_once "clases/url.php";
include_once "controladores/AjaxControlador.php";




if (isset($_GET["controller"])&&$_GET["controller"]!=null){
    $controller=$_GET["controller"];
}else{
   $controller="home";
}
if(isset($_GET["action"])&&$_GET["action"]!=""){
    $action=$_GET["action"];
}else{
    $action="index";
}

Router::index($controller,$action);
?>