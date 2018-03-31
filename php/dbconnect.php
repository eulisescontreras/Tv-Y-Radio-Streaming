<?php
	
	function dbConnect() {
		$servidor = 'localhost';
		$usuario = 'root';
		$contrasena = '';
		$BD = 'radio';

		$conection = mysqli_connect($servidor,$usuario,$contrasena,$BD);
		
		return($conection);
	}

?>
