<?php

class TiendaController{
    public static function index() {
        $action=($_GET["action"]);
        include "vistas/tienda/index.php";
        
    }
}
?>