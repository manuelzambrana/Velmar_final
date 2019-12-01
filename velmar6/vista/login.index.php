<?php  

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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <style type="text/css">
    body {
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #eee;
    }

    .form-signin {
      max-width: 330px;
      padding: 15px;
      margin: 0 auto;
    }

    .form-signin .form-signin-heading,
    .form-signin .checkbox {
      margin-bottom: 15px;
    }

    .form-signin .checkbox {
      font-weight: normal;
    }

    .form-signin .form-control {
      position: relative;
      height: auto;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      padding: 10px;
      font-size: 16px;
    }

    .form-signin .form-control:focus {
      z-index: 2;
    }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    button{
      max-width: 300px;
      padding: 15px;
      margin: 0 auto;
    }
  </style>


</head>

<body>


  <div class="login-page">
    <div class="form">
      <form class="form-signin" action="index.php" method="GET">


        <h2 class="form-signin-heading text-center">Please sign in</h2>


        <input id="mod" name="mod" type="hidden" value="usuario">
        <input id="ope" name="ope" type="hidden" value="index">

        <input class="form-control" id="nom" name="nom" type="text" value="" required placeholder="Usuario">
        <br>

        <input class="form-control" id="con" name="con" type="password" value="" required placeholder="Password">
        <br>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>


      </form>
      <a href="index.php?mod=usuario&ope=create"><button class="btn btn-lg btn-primary btn-block" id="bot" type="submit">Registrarse</button></a>
</div>
</div>


</body>

</html>