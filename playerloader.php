<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = '';
    $BD = 'radio';

    $conection = mysqli_connect($servidor,$usuario,$contrasena,$BD);


		$result = mysqli_query($conection,"SELECT * FROM static");
		$row = mysqli_fetch_array($result);

		$result2 = mysqli_query($conection,"SELECT * FROM canciones WHERE id=".$row["current_play"]);
		$row2 = mysqli_fetch_array($result2);

		$result3 = mysqli_query($conection,"SELECT nombre FROM programas WHERE id=".$row2["id_prog"]);
		$row3 = mysqli_fetch_array($result3);
      $program_name = $row3["nombre"];
		$program_file = "internal-pages/".str_replace(" ","-",strtolower($program_name)).".php";

      $result4 = mysqli_query($conection,"SELECT R_id FROM mixes WHERE P_id=".$row2["id_prog"]);
      $row4 = mysqli_fetch_array($result4);
      $mix_id = $row4["R_id"];
      $deezer_player = '<iframe scrolling="no" frameborder="0" allowTransparency="true" src="http://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=false&width=700&height=350&color=007FEB&layout=dark&size=medium&type=radio&id='.$mix_id.'&app_id=1" width="700" height="350"></iframe>';

		mysqli_close($conection);
      echo $deezer_player;
?>
