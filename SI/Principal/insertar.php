 
<!DOCTYPE html>
<html>
<head>
	  <link href="css/materialize.css" type="text/css" rel="stylesheet">
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

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

if(	isset($_POST['cod'])&& !empty($_POST['cod']) && 
	isset($_POST['producto'])&& !empty($_POST['producto']) &&
	isset($_POST['cantidad'])&& !empty($_POST['cantidad']) &&
	isset($_POST['talla'])&& !empty($_POST['talla']) &&
	isset($_POST['marca'])&& !empty($_POST['marca']) &&
 	isset($_POST['precio'])&& !empty($_POST['precio']))
{


	$con=mysql_connect($host,$user,$pass) or die ("problemas al conectar");
	mysql_select_db($db, $con) or die ("problemas al conectar con la bd");
	mysql_query("INSERT INTO add_sist_inventario (cod, producto, cantidad, talla, marca, precio) VALUES ('$_POST[cod]','$_POST[producto]','$_POST[cantidad]','$_POST[talla]','$_POST[marca]','$_POST[precio]')",$con);


		echo '<h3 class="center col s12 m6">Producto registrado</h3>';
		echo "<br></br>";
		echo "<br></br>";
		echo "<br></br>";
        echo '<div class="col s6 right">';
         	$regresar='<a class="waves-effect waves-light btn  brown lighten-3" href="Add_product.html">REGRESAR</a>';
      		echo $regresar;
     	echo '</div>';
 } 
 	else{
		echo '<h3 class="center col s12 m6 black-text">Problemas al insertar datos</h3>';
		echo "<br></br>";
		echo "<br></br>";
		echo '<div class="col s6 right">';
      		$regresar='<a class="waves-effect waves-light btn  brown lighten-3" href="Add_product.html">REGRESAR</a>';
     		echo $regresar;
     	echo '</div>';
 }
?>
</body>
</html>