<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/main.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>

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
        margin-bottom: 10px;
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
    </style>


  </head>

<body>
<div class="form">

<form class="form-signin"  action="index.php" method="GET" id="signupForm">
<h2 class="form-signin-heading text-center">Registro</h2>

        <input id="mod" name="mod" type="hidden" value="usuario">
        <input id="ope" name="ope" type="hidden" value="create">
        <label for="name" class="sr-only">name</label>
        <input class="form-control" id="nomb" name="nomb" type="text" value="" required placeholder="Nombre" />
        <br>

        <label for="corr" class="sr-only">Email address</label>

        <input class="form-control" id="corr" name="corr" type="email" value="" required placeholder="Correo">
        <br>
        <label for="username" class="sr-only">username</label>

        <input class="form-control" id="usu" name="usu" type="text" value="" required placeholder="Usuario" />
        <br>

        
       

        <label for="inputPassword" class="sr-only">Password</label>

        <input class="form-control" id="cont" name="cont" type="password" value="" required placeholder="Contraseña">
        <br>

        

        <button class="btn btn-lg btn-primary btn-block" id="bot" type="submit">Registrarse</button>
  
        

        </form>



    
</body>
</html>