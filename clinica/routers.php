<?php
class Router
{
    public static function index($controller, $action)
    {

        switch ($controller) {
            case "login":
                LoginController::index();
                break;
            case "usuario":

                UsuarioController::$action();
                break;

            case "tienda":
                TiendaController::index();
                break;
            case "ajax":
                switch ($action) {

                    case 'eliminar':

                        AjaxController::eliminar();
                        break;
                    default:
                        AjaxController::index();
                        break;
                }

                break;
            case "home":
                include "vistas/home.php";
                break;

            default:
                include "vistas/home.php";
                break;
        }
    }
}
