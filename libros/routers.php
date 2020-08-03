<?php
class Router
{
    public static function index($controller, $action)
    {

        switch ($controller) {

            case "libros":

                LibrosControlador::$action();
                break;

            case "ajax":
                switch ($action) {

                    case 'eliminar':
                        AjaxControlador::eliminar();
                        break;
                    default:
                        AjaxControlador::index();
                        break;
                }

                break;
            default:
                include "vistas/home.php";
                break;
        }
    }
}
