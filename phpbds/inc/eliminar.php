<?php
  require('conexion.php');

  $id=$_GET['id'];


  $consulta="DELETE FROM datos WHERE id='$id'";
  $resultado=$mysqli->query($consulta);
  header("Location: ../publicar.php"); 
  exit(); 
?>
