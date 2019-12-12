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
    
    button{
      max-width: 150px;
      padding: 50px;
      width: 60% !important;
      margin-top: 10px;
      
      
    }
    form {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row-reverse;
    flex-direction: row-reverse;
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
html{
      scroll-behavior: smooth;
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

textarea{
  resize: none;
}
  </style>
</head>

<body>
<?php
 
  $imagen=$datos->getImagen();
  $titulo=$datos->getNomPro();
  $descripcion=$datos->getDescripcion();
  $id=$datos->getIdProducto();
  

        
        ?>

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
 
  <div class="container" class="form-inline">
 
    <div class="col s12 m7 tarjeta">
     
        <h2 class="header" style="color:saddlebrown"><?php echo $titulo; ?> </h2>
      
      <div class="card horizontal">
        <div class="card-image">
          
          <img src=<?php echo $imagen ?>>
          <p class="descripcion"><?php echo $descripcion; ?></p>
        </div>
        <div class="card-stacked">
          <div class="card-content">
           


          </div>
          <h2 class="form-signin-heading text-center">Opiniones del Comic</h2>

          <form class="form-signin"  action="index.php" method="GET">

        <input id="mod" name="mod" type="hidden" value="comic">
        <input id="ope" name="ope" type="hidden" value="create">
        <input id="idc" name="idc" type="hidden" value="<?php echo $id; ?>">

        <label for="com" class="sr-only">comentario</label>
        <textarea class="form-control" id="com" name="com" type="text" value="" required placeholder="Comentario" >
</textarea>
        <br>       
       <br>
        <button class="btn btn-lg btn-primary btn-block" id="bot" type="submit">Comentar</button>
        </form>
          <?php
        foreach($comentarios as $item){
    ?>      
            
            <p> <?= $item->getNombre(); ?></p>
            <p> <?= $item->getComentario(); ?></p>
            <hr>
            <?php
       }
    ?>


        </div>
      </div>
    </div>
    <a href="#" id="arriba">arriba</a>
  </div>


  

  <!-- Jquery  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
  </script>
</body>

</html>