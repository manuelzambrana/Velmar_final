<?php
require_once "modelo/comic.php";
class controllerComic{
   
  public function __construct(){}

    public function index(){
  
       $sesion=session_start();
      if (!isset($_SESSION["email"])){
        header("location: index.php");
      }else if ($_SESSION["email"]==="admin@admin.com"){
        session_start();
        session_unset();
        session_destroy();
        header("location: index.php");

      }
     
      $datos = Comic::getAllComics();
      require_once "vista/index.comic.php";
    }


    public function comic(){
      $sesion=session_start();
      if (!isset($_SESSION["email"])){
        header("location: index.php");
      }else if ($_SESSION["email"]==="admin@admin.com"){
        session_start();
        session_unset();
        session_destroy();
        header("location: index.php");

      }
      if (isset($_GET["idc"])) $datos=Comic::getComic($_GET["idc"]);
      if (isset($_GET["idc"]))  $comentarios=Comic::getComentarios($_GET["idc"]);
      require_once "vista/info.comic.php";
    }

    public function create()
    {

      $sesion=session_start();
      if (!isset($_SESSION["email"])){
        header("location: index.php");
      }else if ($_SESSION["email"]==="admin@admin.com"){
        session_start();
        session_unset();
        session_destroy();
        header("location: index.php");

      }     if (isset($_GET["com"]) && isset($_SESSION["email"])) {
            $comentario = new Comic();
            $comentario->insert($_GET["com"],$_GET["idc"],$_SESSION["email"]);
            if (isset($_GET["idc"])) $datos=Comic::getComic($_GET["idc"]);
            if (isset($_GET["idc"]))  $comentarios=Comic::getComentarios($_GET["idc"]);
            require_once "vista/info.comic.php";
        }
    }








}