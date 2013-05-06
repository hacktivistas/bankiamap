<?php include('cabecera.php'); ?>
	<body>
		<div id="principal">
			<?php include('menu.php'); ?>
			<div id="presentacion">
				<div class="ocho cols">
					<h1 id="textc30">¡Dale un toque a bankia!</h1>
					<div class="seis cols">
						<strong>Te proponemos la primera acción distribuida para paralizar Bankia.</strong> Muchas pequeñas acciones que pueden devolver el control a las personas. ¿Estabas deseando hacer algo y no sabías cómo?
					</div>
					<div class="cinco offset-by-one cols"><div class="apuntateboton sombra"><a href="toque.html">¡Apúntate y participa!</a></div></div>
					<div class="cortar"></div>
					<div id="impacto-grafico" class="sombra">
						<div id="diapos" class="orbit">
							<img src="images/00_baner_fecha.jpg" width="620" height="250" alt="slide image" />
							<img src="images/01_raton-mamon.jpg" width="620" height="250" alt="slide image" />
							<img src="images/02_stopdesahucios.jpg" width="620" height="250" alt="slide image" />
							<img src="images/03_preferentes.jpg" width="620" height="250" alt="slide image" />
							<img src="images/04_recortes.jpg" width="620" height="250" alt="slide image" />
							<img src="images/05_nuestra.jpg" width="620" height="250" alt="slide image" />
						</div>
					</div>
				</div><!--fin 8 cols-->

				<div class="cuatro cols">
					<div id="cajaAvatar" class="bordeBN">
						<div class="bordeazul">
							<h3 id="apuntadas">Ya se han apuntado!</h3>
							<!-- FACEBOOK-->
							<div id="registros">
								<div class="cortar"></div>
							</div>
							<!--Fin FB-->
						 </div><!--fin bordeazul-->
					</div><!--Fin bordeBN -->
				</div><!--fin 4 cols-->
				<div class="cortar"></div>
			</div><!--fin presentacion-->

			<div id="cuerpo">
				<h2>Todo sucede en la oficina más cercana</h2>
				<div class="seis cols">
					<p><strong>Esta es una acción de la gente común.</strong> Es muy sencillo, te ofrecemos una herramienta web para entrar en contacto con otras personas cerca de tí y poneros de acuerdo para visitar vuestra sucursal.</p>
					<ul class="vineta">
						<li><strong>Te apuntas a la oficina que mejor te venga.</strong></li>
						<li><strong>Conoces a otras personas y aportas tus ideas.</strong></li>
						<li><strong>El día de la acción todas visitamos nuestra oficina al mismo tiempo.</strong></li>
					</ul>
					<p><a class="aazul" href="operacion.html">Más información de “Toque a Bankia”</a></p>
					<div class="apuntateboton sombra cinco"><a href="toque.html" class="font-effect-fire-animation">¡Comienza ahora!</a></div>
				</div>
				<div class="cinco offset-by-one cols"><img src="images/swarm_bankia-es-nuestra.png" width="404" height="376" alt="¡Bankia es nuestra!" /></div>
				<div class="cortar"></div>
			</div><!--Fin Cuerpo-->
		</div><!--Fin Principal-->

<?php include('pie.php'); ?>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
		<script src="js/modernizr.foundation.min.js"></script>
		<script src="js/jquery.foundation.orbit.min.js"></script>
		<script>
			$(function() {
				//Widget Carrusel
				$(window).load(function(){
					$("#diapos").orbit({
					timer:true,
					pauseOnHover: true,
					startClockOnMouseOut:true,
					startClockOnMouseOutAfter: 1000,
					directionalNav: true,
					bullets: false,
					fluid: '16x9'
					});
				});

				//Widget "Ya se han apuntado"
				$.ajax({
					cache: false,
					url: 'http://foros.toqueabankia.net/lusers.txt',
					dataType: 'text',
					success: function(usuarios) {
						var registro = '', lineas = usuarios.split('\n');
						for (i=0; i<lineas.length; i++) {
							usuarios = lineas[i].split(';');
							if (usuarios.length == 4) {
							//8; Simon Munoz Pinero; //graph.facebook.com/100002450191482/picture?type=large; 0
								var img = '', enlace_oficina = '<a href="http://foros.toqueabankia.net/categories/oficina-'+usuarios[3]+'">Oficina '+usuarios[3]+'</a>';
								if (usuarios[2].trim() != 'NULL') img='<img src="'+usuarios[2].replace('large','small')+'" width="52" height="52" alt="Avatar '+usuarios[1]+'">';
								registro += '<div class="registro"><div class="img_usuaria">'+img+'</div><div class="datos_usuaria"><h5>'+usuarios[1]+'</h5><p>Ahora forma parte del grupo de acción de la '+enlace_oficina+'</p></div></div>';
								$('#registros').append(registro);
								registro = '';
							}
						}
					}
				});

			});

		</script>

	</body>
</html>
