<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>crear</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<form action="index.php" method="GET">
        <input id="mod" name="mod" type="hidden" value="usuario">
        <input id="ope" name="ope" type="hidden" value="create">
        
        <input class="form-control" id="nomb" name="nomb" type="text" value="" required placeholder="Nombre" />
        <br>


        <input class="form-control" id="corr" name="corr" type="email" value="" required placeholder="Correo">
        <br>

        <input class="form-control" id="usu" name="usu" type="text" value="" required placeholder="Usuario" />
        <br>

        
       

      
        <input class="form-control" id="cont" name="cont" type="password" value="" required placeholder="Contraseña">
        <br>

        

        <button class="btn btn-primary btn-sm btn-sm card-title" id="bot" type="submit">Registrarse</button>
  
        

        </form>
      
</div> 


    
</body>
</html>