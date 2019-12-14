<?php
require_once "modelo/usuario.php" ;
require_once "modelo/sesion.php" ;
    class controllerUsuario{
        private $sesion;
        public function __construct(){
            $this->sesion = new Sesion() ;
        }
    

    public function index()
    {
        $sesion=session_start();
        if (isset($_SESSION["email"])) {
            header("Location: index.php?mod=comic&ope=index");
        }

        if ($_SERVER["REQUEST_METHOD"] == "GET") {

            if(isset($_GET["nom"]) && isset($_GET["con"])){
                $correo     = $_GET["nom"];
                $contrasena = $_GET["con"];
           
                $db = Database::getInstance();

                $db->query("SELECT * FROM usuario WHERE email=:nom AND password=:con;",
                                [":nom" => $correo,
                                 ":con" => $contrasena]);


                                     
                    $resultado = $db->getRow();
                    // $this->sesion->init();
                   
                 
                    if ($resultado !== false) {
                        if($correo !== "admin@admin.com"){
                        $_SESSION["email"]=$correo;
                        header("Location: index.php?mod=comic&ope=index");
                        }else{
                            $_SESSION["email"]=$correo;
                            header("Location: index.php?mod=comic&ope=indexadmin");
                        }
                        
                    }else{
                        require_once "vista/login.index.php";
                        echo "El correo o la contraseña no es correcta";
                    
                    }
                } else{
                    require_once "vista/login.index.php";
                }
        }
    }


    public function create()
    {        
        
       
        require_once "vista/create.usuario.php";
        if (isset($_GET["corr"])) {
            $usuario = new Usuario();
            $usuario->setEmail($_GET["corr"]);
            $usuario->setPassword($_GET["cont"]);
            $usuario->setNombre($_GET["nomb"]);
            $usuario->setUsuario($_GET["usu"]);
            
            if ($usuario->verify() == false) {
                $usuario->insert();
                header("location: index.php?mod=usuario&ope=index");
            } else {
                require_once "vista/create.usuario.php";
                echo ("El correo ya existe, introduzca uno diferente");
            }
           
        }    
    }


    public function logout(){        
        session_start();
        unset($_SESSION["email"]);
        require_once "vista/login.index.php";
    }

    public function update()
{

    $sesion = session_start();
    $sesionIniciada = $_SESSION["email"];
    if (!isset($sesionIniciada)) {
        header("location: index.php");
    }
    $datosUsuario = Usuario::getAllUsuario($sesionIniciada);

    $id = $_GET["idc"];

    if (!empty($sesionIniciada)) {

        $tab = Usuario::getAllUsuario($sesionIniciada);
        if (isset($_GET["cor"])) {

            $usuario = Usuario::getUsuarioByCorreo($_GET["cor"]) ?? "";
       
         

            if ($usuario != "") {

                if ($usuario->verify() == false) {
                    echo "aqui";
                    $tab = Usuario::getAllUsuario($sesionIniciada);
                    $tab->setEmail($_GET["cor"]);
                    $tab->update($_GET["cor"], $_GET["idc"]);
                    session_unset();
                    session_destroy();
                    header("location: index.php");
                } else {
                    $correo = $tab->getEmail();
                    require_once "vista/modificar.usuario.php";
                    echo "El nombre de usuario ya existe";
                }
            } else { 
                
             
                $tab = Usuario::getAllUsuario($sesionIniciada);
                $tab->setEmail($_GET["cor"]);
                $tab->update($_GET["cor"], $_GET["idc"]);
                session_unset();
                session_destroy();
                header("location: index.php");
                
            
            }
        } else {
            $correo = $tab->getEmail();
            require_once "vista/modificar.usuario.php";
        }
    }
} //funcion


public function indexUsuario()
{

    $sesion = session_start();
    if (!isset($_SESSION["email"])) {
        header("location: index.php");
    }

    $datosUsuario = Usuario::getAllUsuario($_SESSION["email"]);
    require_once "vista/index.usuario.php";
}
    




}



?>