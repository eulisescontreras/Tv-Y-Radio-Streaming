<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = '';
    $BD = 'radio';

    $conection = mysqli_connect($servidor,$usuario,$contrasena,$BD);

    $id_prog = 3;		//El ID del programa al que se hace referencia
		
	$result = mysqli_query($conection,"SELECT * FROM canciones WHERE votes!=0 AND id_prog=".$id_prog." ORDER BY votes DESC");

	if(mysqli_affected_rows($conection)<10){
		$show_table = false;
	}else{
		$show_table = true;
		$pos = 1;
	}

	mysqli_close($conection);
?>

<div style="background-size:cover; background-image: url('imagenes/stand-by.jpg');" class="section active" data-anchor="ahora">
	<div class="section-container" style="color: #fff;">
		<h1 style="font-weight: bold; display:inline-block; padding: 15px; background-color: rgba(0,0,0,0.5);">Programa Stand-By</h1>
		<p style="padding: 15px; background-color: rgba(0,0,0,0.5); width: 400px; ">Disfruta de la mas relajante música clasica mientras esperas las emisiones de nuestros programas principales</p>
		<h4 style="position: absolute; font-weight: bold; bottom: 0; left: 0; text-align: center; width: 100%; padding: 5px; background-color: rgba(0,0,0,0.5);">Musica clasica</h4>
	</div>
</div>
<div style="background-size:cover; background-image: url('imagenes/stand-by-2.png');" class="section" data-anchor="canciones">
   <div class="section-container" style="color: #fff; ">
		<h4 style="width: 100%; text-align: center;">Top canciones Stand By</h4>
		<div class="col-xs-12 col-md-10 col-md-offset-1" style="background-color: #fff; padding: 15px; border-radius: 5px; color: #000;">

			<?php if(!$show_table){ ?>

			<h6 style="width: 100%; text-align: center;">Las canciones de Stand By aun no tienen suficientes votos.</h6>

			<?php }else{ ?>

			<table class="table table-striped">
			    <thead>
			      <tr>
			      	<th>Pos.</th>
			        <th>Titulo</th>
			        <th>Artista</th>
			        <th>Genero</th>
			      </tr>
			    </thead>
			    <tbody>

			    <?php 
			    	while(!is_null($row = mysqli_fetch_array($result)) && $pos<=10){
			    		echo "<tr><td>".$pos."</td><td>".$row["title"]."</td><td>".$row["artist"]."</td><td>".$row["genre"]."</td></tr>";
			    		$pos++;
			    	}
			    ?>

			    </tbody>
		  	</table>

			<?php } ?>

		</div>
	</div>
</div>