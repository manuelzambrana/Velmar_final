<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilos/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Gentium+Book+Basic" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<div class="login-page">
    <div class="form">

	<h1 class="titulo">Editar</h1>

    <form action="index.php" method="GET">
    <input id="mod" name="mod" type="hidden" value="usuario">
    <input id="ope" name="ope" type="hidden" value="update">
    <input id="idc" name="idc" type="hidden" value="<?=$datosUsuario->getEmail();?>">

		<label for="cor"><strong>Correo del Usuario</strong></label>
		<input id="cor" name="cor" type="text" required value="<?=$datosUsuario->getEmail();?>" /> 
		<br>

		<div style="margin: auto;width:70%;text-align:center">
			<button class="btn btn-primary btn-sm card-title" type="submit" id="boton">Editar Usuario</button> <br>
			<a class="btn btn-primary btn-sm card-title" href="index.php?mod=comic&ope=index" id="boton2">Volver atrás</a>
    	</div>

	</form>

	</div> <!-- login -->
	</div> <!-- form -->

</body>
</html>

