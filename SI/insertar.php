<!DOCTYPE html>
<html>
<head>
	  <link href="estilos/css/materialize.css" type="text/css" rel="stylesheet">
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="estilos/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Ingresar Productos</title>

 </head>

<body class="teal grey lighten-2"> 

<?php
include ("conexion.php");

ini_set('display_error','off');
ini_set('display_startup_errores','off');
error_reporting(0);

if(isset($_POST['nombre'])&& !empty($_POST['nombre']) && 
	isset($_POST['pass'])&& !empty($_POST['pass']))

{

	$con=mysql_connect($host,$user,$pass) or die ("problemas al conectar");
	mysql_select_db($db, $con) or die ("problemas al conectar con la bd");
	mysql_query("INSERT INTO codigo (nombre, pass) VALUES ('$_POST[nombre]','$_POST[pass]')",$con);

		
		echo '<h3 class="center col s12 m6">Usuario Registrado</h3>';
		echo "<br></br>";
		echo "<br></br>";
		echo "<br></br>";
        echo '<div class="col s6 right">';
        	$regresar='<a class="waves-effect waves-light btn  brown lighten-3" href="index.html">Regresar</a>';
     		echo $regresar;
     	echo '</div>';

 } 
 	else{
		echo '<h3 class="center col s12 m6 black-text">Problemas al insertar datos</h3>';
		echo "<br></br>";
		echo "<br></br>";
		echo '<div class="col s6 right">';
      		$regresar='<a class="waves-effect waves-light btn  brown lighten-3" href="index.html">REGRESAR</a>';
     		echo $regresar;
     	echo '</div>';
 }
?>

	
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
      <script src="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>

</body>
</html>
