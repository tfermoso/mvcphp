
    <?php
class UsuarioController
{
    public static function index()
    {
        $action = $_GET["action"];
        $usuarios = Usuario::getAll();
        if (isset($_SESSION["usuario"]) != null) {
            $usuario = $_SESSION["usuario"];
            if (count($_POST) > 0) {
                extract($_POST);

            }
            include "vistas/usuario/index.php";
        } else {
            header("Location: /juego");
        }

    }

    public static function Registrar()
    {

        $action = "Registrar";
        if (isset($_SESSION["usuario"]) != null) {
            $usuario = $_SESSION["usuario"];
            if (count($_POST) > 1) {
                extract($_POST);
                if (isset($id)) {
                    $user = new Usuario($id, $nombre, $usuario, $password, $perfil, $codigo, $especialidad);
                    $user->modificar();
                } else {
                    $user = new Usuario(0, $nombre, $usuario, $password, $perfil, $codigo, $especialidad);
                    $user->save();
                }
                header("Location: /juego/usuario");
                exit;
            } else if(count($_POST)==1){
                $id = $_POST["id"];
                $user = Usuario::getbyId($id);

                include "vistas/usuario/index.php";
            }else{
                include "vistas/usuario/index.php"; 
            }
        } else {
            header("Location: /juego");
        }
    }

}

?>
