<?php  
//iniciamos session

if(isset($_SESSION["email"])){
    
    $nombre = $_SESSION["email"];
    if ($nombre !== "admin"){
        header("Location: index.php?mod=comic&ope=index");
    }else{
        header("Location: index.php?mod=comic&ope=indexadmin");
    }
}else{
    require_once "vista/login.index.php";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


<div class="login-page">
<div class="form">    
<form action="index.php" method="GET">

    
        <h1 class="titulo">LOGIN</h1>

        <input id="mod" name="mod" type="hidden" value="usuario">
        <input id="ope" name="ope" type="hidden" value="index" >

        <input class="form-control" id="nom" name="nom" type="text" value="" required  placeholder="Usuario">
        <br>

        <input class="form-control" id="con" name="con" type="password" value="" required  placeholder="Password">
        <br>

        <button class="btn btn-primary btn-sm card-title" type="submit">Entrar</button>

        
</form>

    
</body>
</html>

