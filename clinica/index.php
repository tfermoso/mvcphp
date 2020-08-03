<?php
require_once "routers.php";
require_once "controladores/LoginController.php";
require_once "controladores/TiendaController.php";
require_once "controladores/UsuarioController.php";
require_once "controladores/AjaxController.php";
require_once "modelos/Usuario.php";
require_once "Conexion.php";
require_once "clases/url.php";
session_start();
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
