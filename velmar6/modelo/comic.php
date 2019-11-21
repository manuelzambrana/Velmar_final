<?php
require_once "Database.php";

class Comic {

    private $idProducto;
    private $nomPro ;
    private $Descripcion ;
    private $imagen ;
   

    private $nombreusuario ; 

    //SETTERS

    public function setIdProducto($dta)        {$this->idProducto = $dta;}
    public function setNomPro($dta)          {$this->nomPro = $dta;}
    public function setDescripcion($dta)         {$this->Descripcion = $dta;}
    public function setImagen($dta)     {$this->imagen = $dta;}
 


    //GETTERS

    public function getIdProducto()            {return $this->idProducto;}
    public function getNomPro()              {return $this->nomPro;}
    public function getDescripcion()             {return $this->Descripcion;}
    public function getImagen()         {return $this->imagen;}    




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

    //INSERTAR CANCIONES EN LA BBDD 

    // public function insert(){
    //     $bd = Database::getInstance();
    //     $bd->query("INSERT INTO canciones(artista, ncancion, idGen, album) VALUES (:art, :nca, :gen, :alb);",
    //     [":art"=>$this->artista,
    //      ":gen"=>$this->idGen,
    //      ":alb"=>$this->album,
    //      ":nca"=>$this->ncancion]);
    // }

    //BORRAR CANCIONES EN LA BBDD 

    // public function delete(){
    //     $db = Database::getInstance() ;
    //     $db->query("DELETE FROM canciones WHERE idcancion=:idcan ;",
    //     [":idcan"=>$this->idcancion]) ;				   
    //     }
        

    // public static function deleteCancion($id){
    //     $db = Database::getInstance() ;
    //     $db->query("DELETE FROM canciones WHERE idcancion=:idcan ;",
    //     [":idcan"=>$id]) ;
    //     }

    // //ACTUALIZAR CANCIONES EN LA BBDD 
    
    // public function update(){
    //     $db = Database::getInstance() ;
    //     $db->query("UPDATE canciones SET ncancion=:nca, idGen=:idGen, album=:alb WHERE idcancion=:idc ;",
    //                     [":nca"=>$this->ncancion,
    //                     ":idGen"=>$this->idGen,
    //                     ":alb"=>$this->album,
    //                     ":idc"=>$this->idcancion]) ;
        
    // }

    // public static function getCancionn($id){
    //     $db = Database::getInstance() ;
    //     $db->query("SELECT * FROM canciones WHERE idcancion=:idc ;",
    //                  [":idc"=>$id]) ;

    //     return $db->getRow("cancion") ;
    // }


}



?>