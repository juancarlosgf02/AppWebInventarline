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
		<title>Lista de Productos - SporPeru</title>
</head>

<body class="grey lighten-4">
		<section  class="brown lighten-4 col s12 m6">
        	<div class="section">
        		<div class="container">
         			<div>
      					<h1>SPORT PERU</h1>
        				<h5>Lista de Productos</h5>
      				</div>
      			</div>
      		</div>
		</section>

<!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="index.html">Principal</a></li>
          <li><a href="Add_product.html">Agregar Productos</a></li>

            <li class="divider"></li>
              <li><a href="visualizar.html">Vizualizar Prendas</a></li>
        </ul>
        
        <nav>
          <div class="nav-wrapper teal grey lighten-2">
              <ul class="left">
<!-- Dropdown Trigger -->
      <li><a class="dropdown-button black-text" href="#!" data-activates="dropdown1">Inicio<i class="material-icons right">arrow_drop_down</i></a></li>
              </ul>
          </div>
        </nav>



<br></br><br></br>
    <h5> Listado de Productos</h5>
        
    <section>
          <table class="highlight centered">
            <thead>
              <tr>
                <th>Codigo</th> 
                <th>Producto</th> 
                <th>Cantidad</th>
                <th>Talla</th>
                <th>Marca</th>
                <th>Precio</th><br>
              </tr>
            </thead>
            <?php
              include("conex.php");
              $Con = new conexion();
              $Con->recuperarDatos();
          ?>
          </table>
    </section>

		<div>
					
		</div>
      <!--        Menu de abajo            -->
 

<footer class="page-footer teal grey lighten-2">
     <!--  Seccion de Iconos    -->
    <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            	<h5 class="center"> Sport Peru</h5>
              		<p class="light center">Esta es una de las pocas empresa encargada del distribuidos y ventas  de prendas deportivas como tambien podemos encontrar distintos accesorios para cualquier disciplima deportiva actualemente, ofrecemos productos de excelente calidad.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
				<h5 class="center">Diversidad</h5>
          			<p class="light center">Podemos encontrar prendas de buena calidad a  distintos precio en una diversidad de marcas, la mayor cantidad de modelos y estilos de acuerdo a la necesidad del cliente.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
           		<h5 class="center">Observacion</h5>
          			<p class="light center">Esta es una de las pocas empresa encargada del distribuidos y ventas  de prendas deportivas como tambien podemos encontrar distintos accesorios para cualquier disciplima deportiva actualemente, ofrecemos productos de excelente calidad.</p> 
          </div>
        </div>
    </div>

    <div class="footer-copyright black-text text-darken-5">
      <div class="right-align">
      		Made by JJM INVERTARLINE
      </div>
    </div>
</footer>

	
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
      <script src="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>
	</body>
</html>