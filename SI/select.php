<?php
include ("conexion.php");

$con=mysql_connect($host,$user,$pass) or die ("Problemas al conectar al server");
	mysql_select_db($db,$con) or die("Problemas al conectar con la base de datos");

	$registro=mysql_query("SELECT * FROM codigo where nombre='$_POST[nombre]'") or die ("Problemas en Consulta:".mysql_error());


if ($reg=mysql_fetch_array($registro)){

	echo $reg['nombre']  . "<br>";
	echo $reg['pass']  . "<br>" ;
}

else {
	echo "Problemas al Insertar datos";
}
?>