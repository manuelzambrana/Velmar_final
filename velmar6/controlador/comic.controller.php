<?php

class controllerComic{
   
  public function __construct(){}

    public function index(){
  
       $sesion=session_start();
      if (!isset($_SESSION["email"])){
        header("location: index.php");
      }
     
    
      require_once "vista/index.comic.php";
    }





}