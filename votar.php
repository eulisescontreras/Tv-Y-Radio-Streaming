<?php

	$servidor = 'localhost';
    $usuario = 'root';
    $contrasena = '';
    $BD = 'radio';

    $conection = mysqli_connect($servidor,$usuario,$contrasena,$BD);

    $result = mysqli_query($conection,"SELECT ip FROM block_ips WHERE ip='".$_SERVER["REMOTE_ADDR"]."'");
	if(is_null(mysqli_fetch_array($result))){
		$like=false;
	}else{
		$like=true;
	}

	if(!$like){
		mysqli_free_result($result);
		$result = mysqli_query($conection,"SELECT current_play FROM static");
		$row = mysqli_fetch_array($result);

		mysqli_query($conection,"UPDATE mixes SET votes=votes+1 WHERE R_id='".$row["current_play"]."'");
		mysqli_query($conection,"INSERT INTO block_ips (ip) VALUES ('".$_SERVER["REMOTE_ADDR"]."')");
	}

    mysqli_close($conection);

?>
