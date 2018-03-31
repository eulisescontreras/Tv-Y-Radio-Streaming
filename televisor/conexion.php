<?php
	$servidor = "localhost";
	$usuario = "root";
	$contrasena = "";
	$BD = "television";
	
	$conexion = mysqli_connect($servidor,$usuario,$contrasena);
	mysqli_select_db($conexion,$BD)
?>