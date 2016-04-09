
<!DOCTYPE html>
<html>
<head>
	<link href="css/materialize.css" type="text/css" rel="stylesheet"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
      <!--Import materialize.css-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title></title>
</head>
<body >

	<?php
		class conexion{
			function recuperarDatos(){
				$host = "localhost";
				$user = "root";
				$pw = "";
				$db = "sio";

			$con = mysql_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos ");
			mysql_select_db($db, $con) or die ("No se encontro la base de datos. ");
			$query = "SELECT * FROM add_sist_inventario";
			
			$resultado = mysql_query($query);

			while ($fila = mysql_fetch_array($resultado)) {
				
				//echo '<table class="highlight centered">';
					echo "<tr>";
					echo "	<td> $fila[cod]</td> 
							<td> $fila[producto]</td> 
							<td> $fila[cantidad]</td>
							<td> $fila[talla]</td>
							<td> $fila[marca]</td>
							<td> $fila[precio]</td>";
					echo "</tr>";
					
				//	echo '</table>' ;
			}
		}
	}
?>


      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
      <script src="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>
</body>
</html>