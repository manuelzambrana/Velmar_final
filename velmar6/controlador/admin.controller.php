<?php
require_once "modelo/admin.php" ;
require_once "modelo/sesion.php" ;
    class controllerAdmin{
        private $sesion;
        public function __construct(){
            $this->sesion = new Sesion() ;
        }
    

    public function index2()
    {
        
        $datos = Admin::getAllUsers(); 
        $sesion=session_start();
        if (isset($_SESSION["email2"])) {
            
            require_once "vista/delete.index.php";

        }

        if ($_SERVER["REQUEST_METHOD"] == "GET") {

            if(isset($_GET["nom"]) && isset($_GET["con"])){
                $correo     = $_GET["nom"];
                $contrasena = $_GET["con"];
                
           
                $db = Database::getInstance();

                $db->query("SELECT * FROM admin WHERE email=:nom AND password= md5(:con);",
                                [":nom" => $correo,
                                 ":con" => $contrasena]);


                                     
                    $resultado = $db->getRow();
                    // $this->sesion->init();
                    
                    if ($resultado !== false) {
                        if($correo !== "admin@admin.com"){
                       
                        
                        }else{
                        
                            $_SESSION["email2"]=$correo;                                                
                            header("Location: index.php?mod=admin&ope=datos");

                            

                      
                        }
                        
                        
                    }else{
                        if(!isset($_SESSION["email2"])){
                            require_once "vista/admin.index.php";
                            echo "El correo o la contraseña no es correcta";
                            }
                        
                    
                    }
                } else{
                    if(!isset($_SESSION["email2"])){
                    require_once "vista/admin.index.php";
                    }
                }
        }
        
    }


    public function datos(){  
        $sesion=session_start();
        if (isset($_SESSION["email2"])) {
            $datos = Admin::getAllUsers(); 
            
            require_once "vista/delete.index.php";

        }else{
            if(!isset($_SESSION["email2"])){
            require_once "vista/admin.index.php";
            }
        }
        
       
        

    }



    public function logout(){
        session_start();
        unset($_SESSION["email2"]);
        require_once "vista/admin.index.php";
    }

    public function borrar(){
        $sesion=session_start();
        if (isset($_SESSION["email2"])) {
            if (isset($_GET["idt"])) Admin::deleteUsuario($_GET["idt"]);
            header('Location:index.php?mod=admin&ope=datos');

        }else{
            if(!isset($_SESSION["email2"])){
            require_once "vista/admin.index.php";
            }
        }
        
        
     
    }

 


    




}



?>