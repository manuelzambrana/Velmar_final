<?php
require_once "modelo/comic.php";
class controllerComic{
   
  public function __construct(){}

    public function index(){
  
       $sesion=session_start();
      if (!isset($_SESSION["email"])){
        header("location: index.php");
      }
     
      $datos = Comic::getAllComics();
      require_once "vista/index.comic.php";
    }





}