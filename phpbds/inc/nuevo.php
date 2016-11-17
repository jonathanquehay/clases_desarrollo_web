<?php
  require('conexion.php');

  $nombre=$_POST['nombre'];
  $trabajo=$_POST['titulo'];

  $consulta="INSERT INTO datos(nombre,trabajo) VALUES ('$nombre','$trabajo')";
  $resultado=$mysqli->query($consulta);
  header("Location: ../publicar.php"); 
  exit(); 

?>

