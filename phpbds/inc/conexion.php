<?php
	$mysqli=new mysqli("localhost","moreno","","trabajos");

	if(mysqli_connect_errno()){
		echo 'Conexion fallida:', mysqli_connect_error();
		exit();
	}

	mysqli_set_charset($mysqli, "utf8");
?>