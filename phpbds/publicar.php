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
					</ul>
					<ul class="side-nav black" id="mobile-demo">
						<li><a href="index.php" class="white-text">Inicio</a></li>
					</ul>
				</div>
			</nav>
		</div>

		<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Nuevo</a>

		<section class="container">
			<table  id="example" border="1" class="responsive-table bordered">
				<thead>
					<tr>
						<th data-field="id">id</th>
						<th data-field="nombre">Nombre</th>
						<th data-field="titulo">Título</th>
						<th data-field="operaciones">Operaciones</th>
					</tr>
				</thead>
			
				<tbody>
				<?php while($fila=$resultado->fetch_assoc()){ ?>
					<tr>
						<td><?php echo $fila['id']; ?></td>
						<td><?php echo $fila['nombre']; ?></td>
						<td><?php echo $fila['trabajo']; ?></td>
						<td class="center"><a href="inc/eliminar.php?id=<?php echo $fila['id'];?>"><i class="mdi-action-highlight-remove small center"></i></a><a href="modificar.php?id=<?php echo $fila['id'];?>"><i class="mdi-content-content-copy small center"></i></a></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</section>

		<!-- Modal Structure -->
		<div id="modal1" class="modal">
			<div class="modal-content">
				<h4>Ingresar datos</h4>
				<div class="row">
				  <form class="col s12" action="inc/nuevo.php" method="post">
				    <div class="row">
				      <div class="input-field col s12">
				        <input id="first_name" type="text" name="nombre" class="validate">
				          <label for="first_name">Nombre</label>
				      </div>
				      <div class="input-field col s12">
				        <input id="last_name" type="text" name="titulo" class="validate">
				        <label for="last_name">Título</label>
				      </div>
				    </div>
				    <button type="submit" class="btn waves-effect waves-light"><i class="mdi-content-send right"></i>Enviar</button>
				  </form>
				</div>
			</div>
			<div class="modal-footer">
				<a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Cerrar</a>
			</div>
		</div>

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