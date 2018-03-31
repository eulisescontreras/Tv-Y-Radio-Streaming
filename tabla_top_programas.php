<?php 
	include "php/dbconnect.php";
	$conection = dbConnect();
	$result4 = mysqli_query($conection,"SELECT * FROM mixes ORDER BY votes DESC");

	$pos=1;
	while(!is_null($row4 = mysqli_fetch_array($result4))){
		echo "<tr><td>".$pos."</td><td>".$row4["nombre"]."</td><td>".$row4["votes"]."</td></tr>";
		$pos++;
	}
?>
