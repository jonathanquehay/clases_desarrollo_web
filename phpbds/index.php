<?php
//Archivo PHP para la conexion
  require('inc/conexion.php');

  $consulta="SELECT id,nombre,trabajo FROM datos";

  $resultado=$mysqli->query($consulta);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>Pagina PHP CON BASES DE DATOS</title>
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<link rel="stylesheet" href="css/estilos.css">

	</head>

	<body>
		<div class="navbar-fixed">
			<nav>
				<div class="nav-wrapper black">
					<a class="brand-logo">PHPbds</a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
					<ul class="right hide-on-med-and-down ">
						<li><a href="publicar.php">Administrar</a></li>
					</ul>
					<ul class="side-nav black" id="mobile-demo">
						<li><a href="publicar.php" class="white-text">Administrar</a></li>
					</ul>
				</div>
			</nav>
		</div>


		<div class="row">
		<?php while($fila=$resultado->fetch_assoc()){ ?>
			<div class="col s12 m4 l4">
				<div class="card small teal">
					<div class="card-content white-text">
						<span class="card-title"><?php echo $fila['nombre']; ?></span>
						<hr>
						<p><?php echo $fila['trabajo']; ?></p>
					</div>
				</div>
			</div>
		<?php } ?>
		</div>

		<footer class="black">
			<p class="white center">© 2016 PHP Y Bases de datos | MSc. Jonathan Moreno</p>
		</footer>


		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script>
    		$(document).ready(function() {
    			$(".button-collapse").sideNav();
  			});
        </script>
	</body>
</html>