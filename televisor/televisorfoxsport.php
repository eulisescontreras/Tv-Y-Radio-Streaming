<!DOCTYPE html>
<?php
	include 'conexion.php';
?>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Radio Facyt Equipo 2</title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
      <!-- Full page plugin -->
      <link rel="stylesheet" type="text/css" href="fullPage.js-master/jquery.fullPage.css" />
      <!-- Estilo personalizado-->
      <link rel="stylesheet" type="text/css" href="dropdownlist.css">
      <link href="jsCarousel-2.0.0.css" rel="stylesheet" type="text/css" />
	  <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="fullPage.js-master/jquery.fullPage.min.js"></script>
	  <script src="jsCarousel-2.0.0.js" type="text/javascript"></script>
	  <link href="estilo.css" rel="stylesheet" type="text/css" id="estilo">
</head>
   <body>

   	  <div class="container">
	    <!-- Modal -->
	    <div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><strong>Ingrese un nombre de usuario</strong></h4>
					</div>
					<div class="modal-body">
						<input id="nusuario" type="text" class="form-control" placeholder="Nombre de Usuario">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal" onclick="control_visitas('FOX Sport')">Aceptar</button>
					</div>
				</div>
			</div>
		</div>
	  </div>
      <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html"><span class="glyphicon glyphicon-film"></span> TVStreaming</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul id="myMenu" class="nav navbar-nav">
                <li data-menuanchor='ahora' class="active"><a href="#ahora">Ahora</a></li>
                <li data-menuanchor='programas'><a href="#chat">Chat</a></li>
                <li data-menuanchor='canciones'><a href="#canales">Canales</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
               <li><a href="index.html"><span class="glyphicon glyphicon-log-out"></span> Volver</a></li>
             </ul>
            </div>
          </div>
      </nav>

      <div id="fullpage">
         <div class="section active" data-anchor="ahora"  style="background-image: url('imagenes/Fox-Sports.jpg')">
			<div class="row">
				<div id="cp_widget_3a00887b-3b49-4e23-8c38-bd1300b9c324"  class="col-lg-offset-1 col-md-4">...</div><noscript>Powered by Cincopa <a href='http://www.cincopa.com/media-platform/podcast-player'>Podcast Hosting</a> for Business solution.<span>New Gallery 2016/6/5</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1680</span><span>height</span><span> 1050</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 1200</span><span>width</span><span> 1600</span><span>camerasoftware</span><span> Google</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 843</span><span>orientation</span><span> 1</span><span>camerasoftware</span><span> GIMP 2.6.11</span><span>originaldate</span><span> 5/6/2013 2:51:29 AM</span><span>width</span><span> 1260</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 16</span><span>cameramake</span><span> Canon</span><span>height</span><span> 2000</span><span>orientation</span><span> 1</span><span>camerasoftware</span><span> Adobe Photoshop CS5.</span><span>originaldate</span><span> 4/18/2015 5:07:57 PM</span><span>width</span><span> 3000</span><span>cameramodel</span><span> Canon EOS 7D Mark II</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1920</span><span>height</span><span> 1080</span><span>cameramake</span><span> Canon</span><span>height</span><span> 1067</span><span>orientation</span><span> 1</span><span>camerasoftware</span><span> Adobe Photoshop CS4 </span><span>originaldate</span><span> 7/18/2010 3:35:05 PM</span><span>width</span><span> 1600</span><span>cameramodel</span><span> Canon EOS-1D Mark II</span></noscript>
				<iframe src="http://oneplay.tv/video_embed/Fox Sport 2/90/100%25x100%25.html" allowtransparency="true" frameborder="0" width="600" height="400" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen class="col-lg-offset-1"></iframe>
			</div>
		</div>
		<div class="section" data-anchor="chat">
			<div class="container"> 
				<div class="row"> 
					<table>
						<tr>
							<td>
							</td>
							<td>
								<div class="container">
									<div class="col-md-6"> 
										<div class="panel panel-primary"> 
											<div class="panel-heading"> 
												<span class="glyphicon glyphicon-comment"></span> Chat 
											</div> 
											<div class="panel-chat"> 
												<ul class="chat">
												</ul> 
											</div> 
											<div class="panel-footer"> 
												<div class="input-group"> 
													<input id="btn-input" type="text" class="form-control input-sm" placeholder="Escriba su mensaje aqui..." onkeypress="guardar_mensaje(event,'false','false','',null)"/> 
													<span class="input-group-btn"> 
														<button class="btn btn-primary btn-sm" id="btn-chat" onclick="guardar_mensaje_presionar('false','false','',null)"> Enviar</button> 
													</span> 
												</div> 
											</div> 
										</div>
										<div class="panel panel-primary">
											<div class="panel-heading" id="div2">
												<h3 class="panel-title"><span class="glyphicon glyphicon-star-empty"></span> Ganador</h3>
											</div>
											<table class="table table-hover maximo" id="dev-table">

											</table>
										</div>
									</div>
								</div>
							</td>
							<td>
								<div class="container">
									<div class="row" id="div1">
										<div class="col-md-6 col-md-pull-6">
											<div class="panel panel-primary">
												<div class="panel-heading" id="div2">
													<h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"></span> Ranking</h3>
												</div>
												<table class="table table-hover" id="dev-table">
													<thead>
														<tr>
															<th></th>
															<th></th>
															<th>Pos</th>
															<th>Canal</th>
															<th>Votos</th>
															<th>Votar</th>
														</tr>
													</thead>
													<tbody class="listavotos">

													</tbody>
												</table>
											</div>
											<div class="panel panel-primary">
												<div class="panel-heading" id="div2">
													<h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"></span> Estadisticas</h3>
												</div>
												<table class="table table-hover" id="dev-table">
													<thead class="totalvotos">
													
													</thead>
													<tbody class="listavisitas">

													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	<div class="section" data-anchor="canales" id="can" style="background-image: url('imagenes/Fox-Sports.jpg')">
		<table>
			<tr>
				<td>
					<div class="row">
						<span id="mensaje2">&nbsp;&nbsp;&nbsp;&nbsp;<img src="imagenes/f1.jpg" style="opacity:1;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="imagenes/le.jpg" style="opacity:1;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="imagenes/bb.jpg" style="opacity:1;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="imagenes/bk.jpg" style="opacity:1;"><strong><br/><br/>Fox Sports es una red internacional de cadenas de televisión deportivas, propiedad de News Corporation, donde podras disfrutar de tus deportes favoritos como Futbol, Formula1, Bascketball entre otros. Esperamos que lo disfrutes!!.</strong></span>
					<div>
				</td>
				<td>
					<div class="container col-lg-offset-12">
						<nav class="navbar navbar-default sidebar" role="navigation">
							<div class="container-fluid">
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>      
							</div>
							<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
							  <ul class="nav navbar-nav"> 
								<li class="active"><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Programación<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
								<li class="dropdown">
								  <a href="http://localhost/pagina/televisorfox.php" class="dropdown-toggle info FOX"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FOX Life</strong><span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span><span id="mensaje3">&nbsp;&nbsp;&nbsp;&nbsp;<img src="imagenes/tw.jpg" style="opacity:1;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="imagenes/evgmT.jpg" style="opacity:1;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="imagenes/empire.jpg" style="opacity:1;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="imagenes/x.jpg" style="opacity:1;"><strong><br/><br/>FOX Life es un canal de televisión por cable y satélite del grupo FOX,  Fox Life tiene una programación variada en la que se emiten telenovelas, comedias, dramas, películas, shows entre otros programas. Esperamos que lo disfrutes!!.</strong></span></a>
								</li>          
								<li class="dropdown">
								  <a href="http://localhost/pagina/televisorfacyt.php"  class="dropdown-toggle info TVFACYT"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TV Facyt</strong><span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span><span id="mensaje">&nbsp;&nbsp;&nbsp;&nbsp;<img src="imagenes/cp.jpg" style="opacity:1;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="imagenes/bl.jpg" style="opacity:1;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="imagenes/qm.jpg" style="opacity:1;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="imagenes/ma.jpg" style="opacity:1;"><strong><br/><br/>La Facultad Experimental de Ciencias y Tecnología es la más joven de las siete Facultades que conforman la Universidad de Carabobo. Las carreras que se ofrecen empezaron bajo un régimen de estudio anual, el cual cambió a semestral a partir de marzo del 2011. Los estudios que se llevan a cabo en la facultad son: Biología, Computación, Física, Matemática y Química. En este canal podras disfrutar presentaciones de las mismas en tiempo real. Esperamos que lo disfrutes!!</strong></span></a>
								</li> 
							   </ul>
							</div>
						  </div>
						</nav>
					</div>
				</td>
				<td>
					<div class="container col-md-12"></div>
				</td>
			</tr>
		</table>
	</div>
	<script type="text/javascript">
		var cpo = []; cpo["_object"] ="cp_widget_3a00887b-3b49-4e23-8c38-bd1300b9c324"; cpo["_fid"] = "A8BAugt9zio0";
		var _cpmp = _cpmp || []; _cpmp.push(cpo);
		(function() { var cp = document.createElement("script"); cp.type = "text/javascript";
		cp.async = true; cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
		var c = document.getElementsByTagName("script")[0];
		c.parentNode.insertBefore(cp, c); })(); 
	</script>
    <script type="text/javascript">
         //Ajustar contenido a la pantalla
         $(document).ready(function() {
            $('#fullpage').fullpage({
               fitToSection: false,
               loopTop: true,
               loopBottom: true,
               paddingTop: $("nav.navbar").css("height"),
               paddingBottom: $(".parrilla").css("height"),
               sectionsColor: ['#1BBC9B', '#4BBFC3', '#7BAABE'],
               anchors: ['ahora', 'chat', 'canales'],
               menu: '#myMenu',
               recordHistory: false
            });
			$('#carouselv').jsCarousel({ onthumbnailclick: function(src) { alert(src); }, autoscroll: true, masked: false, itemstodisplay: 3, orientation: 'v' });
	     });
		
		/*setInterval('agregar_usuario()',10);
		function agregar_usuario()
		{
			var usuario = $("#nusuario").val();
			if(usuario == "")
			{
				$(window).load(function () {
					$("#myModal").modal();
				});
			}
		}*/
		
		$(document).ready(function () {
			$("#myModal").modal();
		});

		$(".dropdown").hover(            
			function() {
				$("#mensaje2").hide();
			}
		);

		$(".dropdown").mouseleave(function(e){
			$("#mensaje2").show();
		});

		
		$(".FOX").hover(            
			function() {
				$("#can").css("background-image","url('imagenes/foxlife.jpg')");
			}
		);
		$(".FOX").mouseleave(            
			function(e) {
				$("#can").css("background-image","url('imagenes/Fox-Sports.jpg')");
			}
		);
		
		$(".TVFACYT").hover(            
			function() {
				$("#can").css("background-image","url('imagenes/LogoFacyt.png')");
			}
		);
		$(".TVFACYT").mouseleave(            
			function(e) {
				$("#can").css("background-image","url('imagenes/Fox-Sports.jpg')");
			}
		);
		

		 $(function(){
			$(".dropdown").hover(            
				function() {
						$('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
						$(this).toggleClass('open');
						$('b', this).toggleClass("caret caret-up");                
				},
					function() {
						$('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
						$(this).toggleClass('open');
						$('b', this).toggleClass("caret caret-up");                
					});
			});
		
		function guardar_mensaje(e,bandera,bandera2,canal,canal2)
		{
				tecla = (document.all) ? e.keyCode : e.which;
				if (tecla == 13){
					var usuario = $("#nusuario").val();
					var mensaje = $("#btn-input").val(); 
					var fech=new Date();
					var cadena;
					var indice=0;
					
					fecha= fech.getFullYear()+ "-" +(fech.getMonth() +1)+ "-" +fech.getDate()+" "+fech.getHours()+":"+fech.getMinutes()+":"+fech.getSeconds();
					$.ajax({
							data:  {"usuarioChat" : usuario, "mensajeChat" : mensaje, "fechaChat" : fecha, "bandera" : bandera, "bandera2" : bandera2, "canal" : canal, "canal2" : canal2},
							url:   'guardar_mensaje.php',
							type:  'post',
							dataType: 'json',
							beforeSend: function () {
									$("#btn-input").val("");
									$("#btn-input").attr("placeholder", "Enviando mensaje.....");
							},
							success:  function (response) {
									$("#btn-input").attr("placeholder", "Escriba su mensaje aqui...");
									while(indice < response.longitud-1)
									{
										cadena = cadena+response[indice].html;
										indice++;
									}
									$(".chat").html(cadena);
									$(".panel-chat").animate({ scrollTop: $('.panel-chat')[0].scrollHeight}, 1000);
							}
					});
				}
		}
		
		function guardar_mensaje_presionar(bandera,bandera2,canal,canal2)
		{
			var usuario = $("#nusuario").val();
			var mensaje = $("#btn-input").val(); 
			var fech=new Date();
			var cadena;
			var indice=0;
			
			fecha= fech.getFullYear()+ "-" +(fech.getMonth() +1)+ "-" +fech.getDate()+" "+fech.getHours()+":"+fech.getMinutes()+":"+fech.getSeconds();
			$.ajax({
					data:  {"usuarioChat" : usuario, "mensajeChat" : mensaje, "fechaChat" : fecha, "bandera" : bandera, "bandera2" : bandera2, "canal" : canal, "canal2" : canal2},
					url:   'guardar_mensaje.php',
					type:  'post',
					dataType: 'json',
					beforeSend: function () {
							$("#btn-input").val("");
							$("#btn-input").attr("placeholder", "Enviando mensaje.....");
					},
					success:  function (response) {
							$("#btn-input").attr("placeholder", "Escriba su mensaje aqui...");
							while(indice < response.longitud-1)
							{
								cadena = cadena+response[indice].html;
								indice++;
							}
							$(".chat").html(cadena);
							$(".panel-chat").animate({ scrollTop: $('.panel-chat')[0].scrollHeight}, 1000);
					}
			});
		}
		
		setInterval('actualizar("false")',200);
		function actualizar(bandera,bandera2,canal,canal2)
		{
			var cadena,cadena2,cadena3;
			var indice=0;
			var usuario = $("#nusuario").val();
			
			$.ajax({
					data:  {"usuarioChat" : usuario, "bandera" : bandera, "bandera2" : bandera2, "canal" : canal, "canal2" : canal2},
					url:   'actualizar.php',
					type:  'post',
					dataType: 'json',
					success:  function (response) {
						$("#btn-input").attr("placeholder", "Escriba su mensaje aqui...");
						while(indice < response.longitud-1)
						{
							cadena = cadena+response[indice].html;
							indice++;
						}
						indice = 0;
						$(".chat").html(cadena);
						$(".maximo").html(response.maximo);
						while(indice < response.longitudvotos)
						{
							cadena2 = cadena2+response[indice].votos;
							indice++;
						}
						indice = 2;
						$(".listavotos").html(cadena2);
						$(".totalvotos").html(response[1].visitas);
						while(indice < response.longitudvisitas+1)
						{
							cadena3 = cadena3+response[indice].visitas;
							indice++;
						}
						$(".listavisitas").html(cadena3);
					}
			});
			
		}
		
		function control_visitas(canal2)
		{
			actualizar("true","false","",canal2);
		}
		
		function control_votar(canal)
		{
			actualizar("false","true",canal,null);
		}
    </script>

   </body>
</html>

