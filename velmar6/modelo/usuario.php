<?php
require_once "Database.php";
require_once "sesion.php" ;


class Usuario {

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

    // public function insert(){
    //     $bd = Database::getInstance();
    //     $bd->query("INSERT INTO usuario(email, nombre, password, usuario) VALUES ('pepe@pepee.com', 'e', 'pepee', 'juane');");
       
        
    // }


        
        }





?>