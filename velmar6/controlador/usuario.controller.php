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
                    $this->sesion->init();
                   
                 
                    if ($resultado !== false) {
                        if($correo !== "admin"){
                        $_SESSION["email"]=$correo;
                        header("Location: index.php?mod=comic&ope=index");
                        }else{
                            $_SESSION["email"]=$correo;
                            header("Location: index.php?mod=comic&ope=indexadmin");
                        }
                        
                    }else{
                        require_once "vista/login.index.php";
                        echo "El nombre o la contraseña no es correcta";
                    
                    }
                } else{
                    require_once "vista/login.index.php";
                }
        }
    }


    public function create()
    {        
        
       
        if (isset($_GET["corr"])) {
            $usuario = new Usuario();
            $usuario->setEmail($_GET["corr"]);
            $usuario->setPassword($_GET["cont"]);
            $usuario->setNombre($_GET["nomb"]);
            $usuario->setUsuario($_GET["usu"]);            
            $usuario->insert();
     
            require_once "vista/create.usuario.php";          
           
        }else{
            require_once "vista/create.usuario.php";
        }
    }


    public function logout(){
        session_start();
        session_unset();
        session_destroy();
        require_once "vista/login.index.php";
    }
}
    

?>