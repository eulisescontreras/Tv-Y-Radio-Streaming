<?php
	include 'conexion.php';
	
	$result = mysqli_query($conexion, "SELECT * FROM chat");
	$fila = mysqli_fetch_array($result);
	$cadena = $_POST['usuarioChat'];
	$bandera = $_POST['bandera'];
	$bandera2 = $_POST['bandera2'];
	$canal = $_POST['canal'];
	$canal2 = $_POST['canal2'];
	
	if($bandera === "true")
	{
		$usuario = mysqli_query($conexion, "SELECT nombre FROM usuario WHERE nombre='".$cadena."'");
		$filauser = mysqli_fetch_array($usuario);
		if($filauser != null)
			mysqli_query($conexion,"UPDATE usuario SET visitas=visitas+1 WHERE nombre='".$cadena."'");
		else
			mysqli_query($conexion,"INSERT INTO usuario (nombre,visitas) VALUES ('".$cadena."','1')");
			
	}
	
	if($bandera2 === "true")
	{
		mysqli_query($conexion,"UPDATE votos SET voto=voto+1 WHERE nombre='".$canal."'");
	}
	
	if($canal2 != null)
	{
		mysqli_query($conexion,"UPDATE votos SET visitas=visitas+1 WHERE nombre='".$canal2."'");
	}
	
	$i = 0;
	while($fila != null)
	{
		$fila = mysqli_fetch_array($result);
		if($fila[2] !== $cadena)
		{
			$jsondata[$i]['html'] = '<li class="right clearfix">
											<span class="chat-img pull-right"> 
												<img src="http://placehold.it/50/FA6F57/fff&text=USER" alt="User Avatar" class="img-circle" /> 
											</span> 
											<div class="chat-body clearfix"> 
												<div class="header">  
													<small class="text-muted">
														<span class="glyphicon glyphicon-time"></span>'.$fila[0].'
													</small> 
													<strong class="pull-right primary-font">'.$fila[2].'</strong> 
												</div> 
												<p>'.$fila[1].'</p> 
											</div> 
										</li>';
		}else
		{
			$jsondata[$i]['html'] = '<li class="left clearfix">
											<span class="chat-img pull-left"> 
												<img src="http://placehold.it/50/55C1E7/fff&text=ME" alt="User Avatar" class="img-circle" /> 
											</span> 
											<div class="chat-body clearfix"> 
												<div class="header">  
													<small class="pull-right text-muted">
														<span class="glyphicon glyphicon-time"></span>'.$fila[0].'
													</small> 
													<strong class="pull-left primary-font">'.$fila[2].'</strong> 
												</div> 
												<br/>
												<p>'.$fila[1].'</p> 
											</div> 
										</li>';
		}
		$i++;
	}
	
	$result = mysqli_query($conexion,"SELECT * FROM usuario GROUP BY visitas DESC");
	$fila = mysqli_fetch_array($result);
	$jsondata['maximo'] = '<thead>
								<tr>
									<th></th>
									<td><h3><strong>Usuario con mas visitas: '.$fila[0].'</strong></h3></td>
								</tr>
								<tr>
									<th></th>
									<td><h4><strong>Visitas: '.$fila[1].'</strong></h4></td>
								</tr>
							</thead>';
	
	$jsondata['longitud'] = $i;
	
	$votos = mysqli_query($conexion, "SELECT * FROM votos ORDER BY voto DESC");
	$votosfila  = mysqli_fetch_array($votos);
	
	$i = 1;
	$jsondata['votostotales'] = 0;//
	while($votosfila != null)
	{
		
		$jsondata[$i]['votos'] = '<tr>
								<th></th>
								<th></th>
								<td>'.$i.'</td>
								<td>'.$votosfila[0].'</td>
								<td>'.$votosfila[1].'</td>
								<td>
									<button class="btn btn-primary" id="btn-votar" onclick="control_votar('."'".$votosfila[0]."'".')"> Votar</button> 
								</td>
							</tr>';
		$jsondata['votostotales'] = $jsondata['votostotales'] + $votosfila[1];// 
		$votosfila  = mysqli_fetch_array($votos);
		$i++;
	}
		
	$jsondata['longitudvotos'] = $i;

	$votos = mysqli_query($conexion, "SELECT * FROM votos ORDER BY visitas DESC");//
	$votosfila  = mysqli_fetch_array($votos);//
	
	$i = 1;
	$jsondata[$i]['visitas'] = '<tr>
									<th></th>
									<td><h4><strong>Votos Totales:'.$jsondata['votostotales'].'</strong></h4></td>
								</tr>';
	$i++;
	$jsondata[$i]['visitas'] = ' <tr>
									<th></th>
									<td><h6><strong>* Visitas a FOX Sport:'.$votosfila[2].'</strong></h6></td>
								</tr>';
								
	$votosfila  = mysqli_fetch_array($votos);
	$i++;
	$jsondata[$i]['visitas'] = '<tr>
									<th></th>
									<td><h6><strong>* Visitas a FOX Life:'.$votosfila[2].'</strong></h6></td>
								</tr>';
	
	$votosfila  = mysqli_fetch_array($votos);
	$i++;								
	$jsondata[$i]['visitas'] = '<tr>
									<th></th>
									<td><h6><strong>* Visitas a TV Facyt:'.$votosfila[2].'</strong></h6></td>
								</tr>';
	$jsondata['longitudvisitas'] = $i;
	
	echo json_encode($jsondata);
?>