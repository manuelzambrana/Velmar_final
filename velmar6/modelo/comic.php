<?php
require_once "Database.php";

class Comic {

    private $idProducto;
    private $nomPro ;
    private $Descripcion ;
    private $imagen ;
    private $Comentario;
    private $nombre;
   

    private $nombreusuario ; 

    //SETTERS

    public function setIdProducto($dta)        {$this->idProducto = $dta;}
    public function setNomPro($dta)          {$this->nomPro = $dta;}
    public function setDescripcion($dta)         {$this->Descripcion = $dta;}
    public function setImagen($dta)     {$this->imagen = $dta;}
    public function setComentario($dta)     {$this->Comentario = $dta;}
    public function setNombre($dta)     {$this->nombre = $dta;}
 


    //GETTERS

    public function getIdProducto()            {return $this->idProducto;}
    public function getNomPro()              {return $this->nomPro;}
    public function getDescripcion()             {return $this->Descripcion;}
    public function getImagen()         {return $this->imagen;}
    public function getComentario()         {return $this->Comentario;}
    public function getNombre()         {return $this->nombre;}        




    public function __contruct() {}

    //OBTENER TODAS LAS CANCIONES

    public static function getAllComics(){
        $bd = Database::getInstance();
        $bd->query("SELECT * FROM productos");
        
        $datos = [];

        while($item = $bd->getRow("Comic")){
            array_push($datos,$item);
        }
        return $datos;
    }



     public static function getComic($id){
         $db = Database::getInstance() ;
         $db->query("SELECT * FROM productos WHERE idProducto=$id ;");

         return $db->getRow("Comic") ;
     }

     public static function getComentarios($id){
        $bd = Database::getInstance();
        $bd->query("SELECT * from comentario C inner join productos P ON P.idProducto=C.idProducto where C.idProducto = $id");
        
        $comentarios = [];

        while($item = $bd->getRow("Comic")){
            array_push($comentarios,$item);
        }
        return $comentarios;


     }

       public function insert($comentario,$idProducto,$nombre){
        $bd = Database::getInstance();
        $bd->query("INSERT INTO comentario (Comentario,idProducto,nombre) VALUES ('$comentario','$idProducto','$nombre');");
      
     }



}



?>