<?php
require_once "Database.php";
require_once "sesion.php" ;


class Admin {
    private $idUsuario;
    private $usuario ;
    private $email ;
    private $password ;
    private $nombre ;
    public function __contruct() {}


    //SETTERS

    public function setUsuario($dta) {$this->usuario = $dta;}
    public function setEmail($dta)   {$this->email = $dta;}
    public function setPassword($dta){$this->password = $dta;}
    public function setNombre($dta)  {$this->nombre = $dta;}


    //GETTERS
    public function getId()            {return $this->idUsuario;}
    public function getUsuario()       {return $this->usuario;}
    public function getEmail()         {return $this->email;}
    public function getPassword()      {return $this->password;}
    public function getNombre()        {return $this->nombre;}




     
     public function verify(){
        $bd = Database::getInstance();
        return $bd->query("SELECT * FROM admin WHERE email=:cor;",
        [":cor"=>$this->email]);
    } 

    public static function getAllUsuario($email){
        $bd = Database::getInstance();
        $bd->query("SELECT * FROM admin WHERE email='$email';");
    
        
        return $bd->getRow("Admin");
    }

    public function update($correo, $sesion){
        $db = Database::getInstance() ;
        $db->query("UPDATE admin SET email='$correo' WHERE email='$sesion';") ;        


    }

    public static function getUsuarioByCorreo($nom){
        $bd = Database::getInstance();
        $bd->query("SELECT * FROM admin WHERE email=:nom ;",
        [":nom"=>$nom]) ;

        return $bd->getRow("Admin");
    }

    public static function getAllUsers(){
        $bd = Database::getInstance();
        $bd->query("SELECT * FROM usuario");
        
        $datos = [];

        while($item = $bd->getRow("Admin")){
            array_push($datos,$item);
        }
        return $datos;
    }

    public static function deleteUsuario($id){
        $bd = Database::getInstance();
        $bd->query("DELETE FROM usuario where idUsuario=$id;");
      
    }


        
        }





?>