<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://fonts.googleapis.com/css?family=Gentium+Book+Basic" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <style>
    html{
      scroll-behavior: smooth;
    }
    .descripcion{
  padding-left: 10px;
  margin-top: 20px;
  text-align: justify;
  font-size: 17px;
  font-family: 'Gentium Book Basic', serif;
}
.card-image{
  display: flex;
}
#arriba{
  position: fixed;
  bottom: 25px;
  z-index: 45;
  cursor: pointer;
  text-decoration: none;
  right: 20px;
  font-size: 16px;
}

@media only screen and (max-width: 760px) {
  .card-image{
  display: block;
}
img{
  display: block;
  margin: auto;
}

}

  </style>
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

  <div class="container">
    <?php
        foreach($datos as $item){
    ?>

    <div class="col s12 m7 tarjeta">
      <a href="index.php?mod=comic&ope=comic&idc=<?=  $item->getIdProducto(); ?>">
        <h2 class="header" style="color:saddlebrown"><?= $item->getNomPro();    ?></h2>
      </a>
      <div class="card horizontal">
        <div class="card-image">
          <img src=<?=  $item->getImagen(); ?>>
          <p class="descripcion"><?=  $item->getDescripcion();   ?></p>
        </div>
        <div class="card-stacked">
        

          <?php
        }
    ?>
    <a href="#" id="arriba">arriba</a>

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