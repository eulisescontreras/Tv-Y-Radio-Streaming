<?php

	function updatePlay($conection){
		$currentHour = floor(time()/3600);
		$result = mysqli_query($conection,"SELECT * FROM static");
		$row = mysqli_fetch_array($result);	
		
		if($row["hour"] != $currentHour){
			
			$result2 = mysqli_query($conection,"SELECT * FROM mixes WHERE R_id>'".$row["current_play"]."'");
			
			if($result2 == false){
				echo mysqli_error($conection);
			}
			
			if(is_null($row2 = mysqli_fetch_array($result2))){
				$result2 = mysqli_query($conection,"SELECT * FROM mixes LIMIT 1");
				$row2 = mysqli_fetch_array($result2);
			}
			
			mysqli_query($conection,"UPDATE static SET current_play='".$row2["R_id"]."', hour=".$currentHour);
			mysqli_query($conection,"DELETE FROM block_ips");
		}
		 
	}

?>
