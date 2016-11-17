<?php
//Archivo PHP para la conexion
  $id=$_GET['id'];
  require('inc/conexion.php');

  $consulta="SELECT id,nombre,trabajo FROM datos WHERE id='$id'";

  $resultado=$mysqli->query($consulta);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>Pagina PHP CON BASES DE DATOS</title>
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<link href="css/dataTables.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/estilos.css">

	</head>

	<body>
		<div class="navbar-fixed">
			<nav>
				<div class="nav-wrapper black">
					<a class="brand-logo">PHPbds</a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
					<ul class="right hide-on-med-and-down ">
						<li><a href="index.php">Inicio</a></li>
						<li><a href="publicar.php">Publicar</a></li>
					</ul>
					<ul class="side-nav black" id="mobile-demo">
						<li><a href="index.php" class="white-text">Inicio</a></li>
						<li><a href="publicar.php" class="white-text">Publicar</a></li>
					</ul>
				</div>
			</nav>
		</div>
		


	<br><br>
	<?php while($fila=$resultado->fetch_assoc()){ ?>
		<form class="col s12 container" action="inc/modificarusuario.php" method="post">
		    <div class="row">
		      <div class="input-field col s12">
		      <input type="text" class="form-control" name="id" value="<?php echo $fila['id']; ?>" readonly style="display:none">
		      <input id="first_name" type="text" name="nombre" class="validate" value="<?php echo $fila['nombre']; ?>">
		      <label for="first_name">Nombre</label>
			  </div>
			<div class="input-field col s12">
			   <input id="last_name" type="text" name="titulo" class="validate" value="<?php echo $fila['trabajo']; ?>">
			   <label for="last_name">Título</label>
			</div>
			</div>
			 <button type="submit" class="btn waves-effect waves-light"><i class="mdi-content-send right"></i>Enviar</button>
		</form>
	<?php } ?>


		<footer class="black">
			<p class="white center">© 2016 PHP Y Bases de datos | MSc. Jonathan Moreno</p>
		</footer>		


		
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script src="js/dataTables.min.js"></script>

		 <script>
    		$(document).ready(function() {
    			$(".button-collapse").sideNav();
    			$('.modal-trigger').leanModal();
    			$('#example').DataTable();
  			});
        </script>
		
	</body>
</html>