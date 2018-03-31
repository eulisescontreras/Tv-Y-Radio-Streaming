<?php
	include 'conexion.php';
	
	mysqli_query($conexion,"INSERT INTO chat (fecha,mensaje,usuario) VALUES ('".$_POST['fechaChat']."','".$_POST['mensajeChat']."','".$_POST['usuarioChat']."')");
	mysqli_query($conexion,"DELETE FROM chat WHERE mensaje=''");
	
	include 'actualizar.php';
?>