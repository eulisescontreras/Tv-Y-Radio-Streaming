<?php
    include "php/dbconnect.php";
    include "php/updateplay.php";
    
	$_POST["funcion"]();

	function getState(){
		$conection = dbConnect();
		updatePlay($conection);

		$result = mysqli_query($conection,"SELECT * FROM static");
		$row = mysqli_fetch_array($result);
		
		$result2 = mysqli_query($conection,"SELECT * FROM mixes WHERE R_id='".$row["current_play"]."'");
		$row2 = mysqli_fetch_array($result2);

		$result4 = mysqli_query($conection,"SELECT ip FROM block_ips WHERE ip='".$_SERVER["REMOTE_ADDR"]."'");
		if(is_null(mysqli_fetch_array($result4))){
			$like=false;
		}else{
			$like=true;
		}

		$array = [
			"programa"	=> $row2["nombre"],
			"mix"		=> $row["current_play"],
			"gusta"		=> $like
		];

		echo json_encode($array);

		mysqli_close($conection);
	}
?>
