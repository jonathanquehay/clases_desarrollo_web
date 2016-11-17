<?php
  require('conexion.php');

  $id=$_POST['id'];
  //$datoanterior=$_POST['id'];
  $nombre=$_POST['nombre'];
  $correo=$_POST['titulo'];

  //var_dump($_POST);

  $consulta="UPDATE datos SET nombre='$nombre',trabajo='$correo' WHERE id='$id'";
  $resultado=$mysqli->query($consulta);
  header("Location: ../index.php");
  exit(); 
  

?>
