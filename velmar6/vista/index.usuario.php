<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Gentium+Book+Basic" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php?mod=comic&ope=index">VelmarComics</a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false"><?=  $_SESSION["email"] ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a class="btn btn-secondary btn-sm btn-sm card-title" href="index.php?mod=usuario&ope=indexUsuario">Mi Perfil</a></li>
            <li><a class="btn btn-secondary btn-sm btn-sm card-title" href="index.php?mod=usuario&ope=logout">Cerrar sesión</a></li>
            
          </ul>
        </li>
      </ul>

    </div>
  </nav>

    <!---->
    <div class="banner">
    <div style="margin: auto;width:70%;text-align:center"></div>

    <div style="margin: auto;width:70%;text-align:center"></div>
    </div>
    <!---->

    <div class="login-page">
    <div class="form">  

    <h1 class="titulo">Mi perfil</h1>

    <strong>Correo:</strong>      <?=$datosUsuario->getEmail();?>  <br>
    <strong>Usuario:</strong>      <?=$datosUsuario->getUsuario();?> <br>
    <strong>Nombre:</strong>      <?=$datosUsuario->getNombre();?> <br>

    <br>

    <a class="btn btn-secondary btn-sm btn-sm card-title" href="index.php?mod=usuario&ope=update&idc=<?=$datosUsuario->getEmail();?>">Editar Perfil</a>
    <div style="margin: auto;width:70%;text-align:center">
    <a class="btn btn-primary btn-sm card-title" href="index.php?mod=comic&ope=index">Volver atrás</a>
    </div>

    </div>
    </div>

</div>
  <!-- Jquery  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
  </script>
</body>
</html>