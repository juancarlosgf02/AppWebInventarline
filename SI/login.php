<!DOCTYPE html>
<html>
<head>
	  <link href="Estilos/css/materialize.css" type="text/css" rel="stylesheet">
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="Estilos/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Ingresar Productos</title>

 </head>

<body class="grey lighten-3"> 


<?php

	include("conexion.php");
	
	ini_set('display_errors','off');
	ini_set('display_startup_errors','off');
	error_reporting(0);
	
	if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
		isset($_POST['pass']) && !empty($_POST['pass'])) 
	{
		$con=mysql_connect($host,$user,$pass) or die ("problemas al conectar");
		mysql_select_db($db,$con) or die ("problemas al conectar con la bd");
		$estandar=mysql_query("select * from codigo where nombre='$_POST[nombre]' and pass='$_POST[pass]' ",$con);
	}
	
	if ($row=mysql_fetch_array($estandar)) 
	{
		header("location:Principal/index.html");
	}else{
		echo '<h4 class="center col s12 m6">Error en el usuario o contrasena incorrecto </h4>';
		echo "<br>";

		echo '<div class="col s6 right">';
		$regresar = '<a class="waves-effect waves-light btn  brown lighten-3" href="index.html">Regresar</a>';
		echo $regresar;
		echo '</div>';
	}
	
?>

	
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="Estilos/js/materialize.min.js"></script>
      <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
      <script src="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>

</body>
</html>