<?php
class LibrosControlador
{
    public static function index()
    {
        $action = $_GET["action"];
        $libros = Libros::getAll();
        
            if (count($_POST) == 0) {
                extract($_POST);

            }
            include "vistas/libros/index.php";
        
    }
    public static function Registrar()
    {

        $action = "Registrar";
        
            if (count($_POST) > 1) {
                extract($_POST);
                if (isset($id)) {
                    $libro1 = new Libros($id, $codigo, $titulo, $autor);
                    $libro1->modificar();
                } else {
                    $libro1 = new Libros(0, $codigo, $titulo, $autor);
                    $libro1->guardar();
                }
                header("Location: /librosExamen/libros");
                exit;
            } else if(count($_POST)==1){
                $id = $_POST["id"];
                $libro1 = Libros::getbyId($id);

                include "vistas/libros/index.php";
            }else{
                include "vistas/libros/index.php"; 
            }
       
    }

}
    ?>