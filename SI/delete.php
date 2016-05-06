<?php
include ("conexion.php");

$con=mysql_connect($host,$user,$pass) or die ("Problemas al conectar al server");
	mysql_select_db($db,$con) or die("Problemas al conectar con la base de datos");

	$registro=mysql_query("SELECT id FROM codigo where nombre='$_POST[nombre]'",$con);


if ($reg=mysql_fetch_array($registro)){
    mysql_query("DELETE FROM codigo where nombre='$_POST[nombre]'",$con);
	echo "Datos Eliminados" ;
}

else {
	echo "Datos no han sido Eliminados";
}
?>