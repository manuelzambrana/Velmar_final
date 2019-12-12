<?php
require_once "Database.php";
require_once "sesion.php" ;


class Usuario {
    private $idusuario;
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
    public function getId()            {return $this->idusuario;}

    public function getUsuario()       {return $this->usuario;}
    public function getEmail()         {return $this->email;}
    public function getPassword()      {return $this->password;}
    public function getNombre()        {return $this->nombre;}


    public function insert(){
        $bd = Database::getInstance();
        $resultado = $bd->query("INSERT INTO usuario(email, nombre, password, usuario) VALUES (:cor, :nom, :con, :usu); ",
        [":cor"=>$this->email,
         ":nom"=>$this->nombre,
         ":con"=>$this->password,
          ":usu"=>$this->usuario]);

    
     }

     
     public function verify(){
        $bd = Database::getInstance();
        return $bd->query("SELECT * FROM usuario WHERE email=:cor;",
        [":cor"=>$this->email]);
    } 

    public static function getAllUsuario($email){
        $bd = Database::getInstance();
        $bd->query("SELECT * FROM usuario WHERE email='$email';");
    
        
        return $bd->getRow("Usuario");
    }

    public function update($correo, $sesion){
        $db = Database::getInstance() ;
        $db->query("UPDATE usuario SET email='$correo' WHERE email='$sesion';") ;
        $db->query("UPDATE comentario SET nombre='$correo' where nombre='$sesion';");
        

    }
    public static function getUsuarioByCorreo($nom){
        $bd = Database::getInstance();
        $bd->query("SELECT * FROM usuario WHERE email=:nom ;",
        [":nom"=>$nom]) ;

        return $bd->getRow("Usuario");
    }


        
        }





?>