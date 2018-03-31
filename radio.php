<?php
    include "php/dbconnect.php";
    include "php/updateplay.php";
    
    $conection = dbConnect();
    updatePlay($conection);

	$result = mysqli_query($conection,"SELECT * FROM static");
	$row = mysqli_fetch_array($result);

	$result2 = mysqli_query($conection,"SELECT * FROM mixes WHERE R_id='".$row["current_play"]."'");
	$row2 = mysqli_fetch_array($result2);
	
	$program_name = $row2["nombre"];
	$program_file = "internal-pages/".str_replace(" ","-",strtolower($program_name)).".php";

	$mix_id = $row["current_play"];
	$deezer_player = '<iframe class="col-xs-9" scrolling="no" frameborder="0" allowTransparency="true" src="http://www.deezer.com/plugins/player?format=classic&autoplay=true&playlist=false&width=700&height=350&color=007FEB&layout=dark&size=medium&type=radio&id='.$mix_id.'&app_id=1" width="700" height="350"></iframe>';

	mysqli_close($conection);
?>

<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Radio Facyt Equipo 2</title>

      <!-- jQuery library (served from Google) -->
      <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

      <!-- Full page plugin -->
      <link rel="stylesheet" type="text/css" href="fullPage.js-master/jquery.fullPage.css" />

      <!-- Estilo personalizado-->
      <link rel="stylesheet" type="text/css" href="radio.css">

      <!-- Slider -->
      <script src="js/jquery.bxslider.min.js"></script>
      <link href="css/jquery.bxslider.css" rel="stylesheet" />

   </head>
   <body>
   		<!-- <audio src="http://186.95.7.56:8080/streaming.ogg" autoplay></audio> -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html"><span class="glyphicon glyphicon-headphones"></span> RadioStreaming</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul id="myMenu" class="nav navbar-nav">
                <li data-menuanchor='ahora' class="active"><a href="#ahora">Sonando ahora</a></li>
                <li data-menuanchor='canciones'><a href="#top">Top programas</a></li>
                <li data-menuanchor='programas'><a href="#programas">Programas</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
               <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
                <li><a href="index.html"><span class="glyphicon glyphicon-log-out"></span> Volver</a></li>
             </ul>
            </div>
          </div>
      </nav>

      <div id="fullpage">
          <?php include($program_file); ?>
          <div class="section" data-anchor="top">
		   <div class="section-container" style="color: #fff; ">
				<h4 style="width: 100%; text-align: center;">Top programas</h4>
				<div class="col-xs-12 col-md-10 col-md-offset-1" style="background-color: #fff; padding: 15px; border-radius: 5px; color: #000;">

					<table class="table table-striped">
						<thead>
						  <tr>
							<th>Pos.</th>
							<th>Programa</th>
							<th>Votos</th>
						  </tr>
						</thead>
						<tbody id="tabla_top_programas">

						

						</tbody>
					</table>

				</div>
			</div>
		</div>
          <div class="section" data-anchor="programas">
            <div class="section-container">
              <ul class="bxslider">
                <li id="Clasicas">
                  <h4 class="col-md-12" style="color: #fff; text-align: center;">Clasicas</h4>
                  <img class="col-md-6 col-md-offset-3" style="height: 100%;" src="imagenes/stand-by-mini.jpg">
                  <h4 class="col-md-12" style="color: #fff; text-align: center;"></h4>
                  <h5 class="col-md-12" style="color: #fff; text-align: center;">Orquestas sinfónicas y artistas reconocidos que nos han deleitado con hermosas melodías a lo largo de la historia.</h5>
                </li>
                <li id="Jazz">
                  <h4 class="col-md-12" style="color: #fff; text-align: center;">Jazz</h4>
                  <img class="col-md-6 col-md-offset-3" style="height: 100%;" src="imagenes/jazz-mini.jpg">
                  <h4 class="col-md-12" style="color: #fff; text-align: center;"></h4>
                  <h5 class="col-md-12" style="color: #fff; text-align: center;">Trompetas, Saxofón y melodías animadas para alegrar y tranquilizar tu día.</h5>
                </li>
                <li id="Alternativo">
                  <h4 class="col-md-12" style="color: #fff; text-align: center;">Alternativo</h4>
                  <img class="col-md-6 col-md-offset-3" style="height: 100%;" src="imagenes/alternativo-mini.jpg">
                  <h4 class="col-md-12" style="color: #fff; text-align: center;"></h4>
                  <h5 class="col-md-12" style="color: #fff; text-align: center;">¿No te gusta lo tradicional? Esta es una hora en que puedes salir de lo común. La mejor y mas variada música alternativa.</h5>
                </li>
                <li id="Bossa Nova">
                  <h4 class="col-md-12" style="color: #fff; text-align: center;">Bossa Nova</h4>
                  <img class="col-md-6 col-md-offset-3" style="height: 100%;" src="imagenes/bossa-nova-mini.jpg">
                  <h4 class="col-md-12" style="color: #fff; text-align: center;"></h4>
                  <h5 class="col-md-12" style="color: #fff; text-align: center;">Relájate con suaves voces y sutiles melodías provenientes de la cultura brasileña.</h5>
                </li>
                <li id="Electro">
                  <h4 class="col-md-12" style="color: #fff; text-align: center;">Electro</h4>
                  <img class="col-md-6 col-md-offset-3" style="height: 100%;" src="imagenes/edm-night-mini.jpg">
                  <h4 class="col-md-12" style="color: #fff; text-align: center;"></h4>
                  <h5 class="col-md-12" style="color: #fff; text-align: center;">Si lo tuyo en cambio es la adrenalina y las fuertes emociones, esta es tu hora. La mejor música electronica del momento.</h5>
                </li>
              </ul>
            </div>

         </div>
      </div>

      <section class="parrilla row">
         <!-- <div class="col-xs-9 row">
            <figure class="col-xs-4"><img class="img-responsive" src="https://userscontent2.emaze.com/images/3c7ee944-0e2a-43cd-a8c6-d5902841dd8e/d99e7ce9-b514-479b-b7ba-41c7ecdb68ef.jpg" alt="Album cover" />
   </figure>
            <div class="text-muted col-xs-8">
            	<h6>Reproduciendo:</h6>
               <h4 id="tituloDeCancion"></h4>
               <h5 id="artistaDeCancion"></h5>
               <h6 id="generoDeCancion"></h6>
            </div>
         </div> -->
         <?php echo $deezer_player; ?>
         <div class="col-xs-3">
            <div class="controles">
               <button id="nolike" type="button" class="btn btn-info boton1" style="padding: 10px 15px; font-size: 12px; display:none;">Te gusta <span class="glyphicon glyphicon-thumbs-up"></button>
<!--
               <button id="like" type="button" class="btn btn-info boton2" style="display:none;">Te gusta <span class="glyphicon glyphicon-thumbs-up"></button>
-->
               <div id="like" class="alert alert-success" style="margin: 0; padding: 10px 15px; font-size: 12px; display: none; ">
                Haz indicado que te gusta este programa.
              </div>
              
            </div>
         </div>

<!--
          <div class="deezer-widget-player" data-src="http://www.deezer.com/plugins/player?format=classic&autoplay=true&playlist=false&width=700&height=350&color=007FEB&layout=dark&size=medium&type=radio&id=radio-37765&app_id=1" data-scrolling="no" data-frameborder="0" data-allowTransparency="true" data-width="700" data-height="350"></div> 
-->
         <!-- <iframe scrolling="no" frameborder="0" allowTransparency="true" src="http://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=false&width=700&height=350&color=007FEB&layout=dark&size=medium&type=radio&id=radio-30621&app_id=1" width="700" height="350"></iframe> -->
         
      </section>

      <!-- Recommend Modal -->
      <div id="recommend-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Recomendar cancion</h4>
            </div>
            <div class="modal-body">
               <form role="form">
                <div class="form-group">
                  <label for="title">Titulo de la cancion:</label>
                  <input type="text" class="form-control" id="title">
                </div>
                <div class="form-group">
                  <label for="artist">Artista:</label>
                  <input type="text" class="form-control" id="artist">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Enviar</button>
            </div>
          </div>

        </div>
      </div>

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      <script type="text/javascript" src="fullPage.js-master/jquery.fullPage.min.js"></script>

      <script type="text/javascript">
         var lastTime = (new Date()).getHours();
         //Ajustar contenido a la pantalla
         $(document).ready(function() {
			 
			 actualizarTablaTopProgramas();
			 
            $('#fullpage').fullpage({
               fitToSection: false,
               // loopTop: true,
               // loopBottom: true,
               paddingTop: $("nav.navbar").css("height"),
               paddingBottom: $(".parrilla").css("height"),
               sectionsColor: ['#1BBC9B', '#4BBFC3', '#412F4F'],
               anchors: ['ahora', 'top', 'programas'],
               menu: '#myMenu',
               recordHistory: false
            });

            actualizar();
         	setInterval(actualizar, 60E3);

            $('.bxslider').bxSlider({
              adaptiveHeight: true,
              pager: false
            });

         });

         var program = '<?php echo $program_name; ?>';

         $("#nolike").click(function(){
         	$.ajax({
	          type: 'post',
	          url: 'votar.php',
	        }).done(function(data){
				actualizarTablaTopProgramas();
				actualizar();
				window.location="#top";
			});
         });

         function actualizar(){
	        $.ajax({
	          type: 'post',
	          url: 'metadata.php',
	          data: {
	            funcion: "getState"
	          }
	        }).done(function(data){
	            var obj = JSON.parse(data);

              if(obj.programa!=program){
                window.location.reload();
              }

	            if(obj.gusta){
	            	$('#like').css("display", "block");
	            	$('#nolike').css("display", "none");
	            }else{
	            	$('#like').css("display", "none");
	            	$('#nolike').css("display", "block");
	            }
	        });

           window.setInterval(function(){checkCurrentMix();}, 60000); // chequear si hay que cambiar de mix, cada minuto
            function checkCurrentMix()
            {
              var currentTime = (new Date()).getHours();
              if (currentTime != lastTime)
              {
                 $("parrilla").load('playerloader.php');
              }
           }
	    }

      </script>

      <!-- <script>
      	(function(d, s, id) {
         	var js, djs = d.getElementsByTagName(s)[0];
         	if (d.getElementById(id)) return;
         	js = d.createElement(s); js.id = id;
         	js.src = "http://e-cdn-files.deezer.com/js/widget/loader.js";
         	djs.parentNode.insertBefore(js, djs);
      }(document, "script", "deezer-widget-loader"));</script> -->
      
      <script>
		function actualizarTablaTopProgramas()
		{
			$("#tabla_top_programas").load('tabla_top_programas.php');
		}
      </script>

   </body>
</html>
