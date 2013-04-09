<?php include('cabecera.php'); ?>
	<body>
		<div id="principal">
			<div id="cabecera">
				<a href="index.html"><img src="images/TAB_logoWeb.png"/></a>
			</div>

			<?php include('menu.php'); ?>

			<div id="cabecera3">
				<h1>Reg&iacute;strate y participa</h1>

				<ul id="proceso">
					<li><img src="images/icon_geolocaliza.png" alt="" /></li>
					<li><img src="images/flecha_proceso.png" alt="" /></li>
					<li><img src="images/icon_oficina.png" alt="" /></li>
					<li><img src="images/flecha_proceso.png" alt="" /></li>
					<li><img src="images/icon_acceso.png" alt="" /></li>
					<li><img src="images/flecha_proceso.png" alt="" /></li>
					<li><img src="images/icon_superapp.png" alt="" /></li>
				</ul>
				<ul id="procesotx">
					<li>
						<ul>
							<li class="num">1</li>
							<li>Pulsa en buscar y<br/>acepta geolocalizarte</li>
						</ul>
					</li>
					<li>
						<ul>
							<li class="num">2</li>
							<li>Escoge oficina</li>
						</ul>
					</li>
					<li>
						<ul>
							<li class="num">3</li>
							<li>Elige c&oacute;mo entrar</li>
						</ul>
					</li>
					<li>
						<ul>
							<li class="num">4</li>
							<li>Acepta la app<br/>(s&oacute;lo facebook)</li>
						</ul>
					</li>
				</ul>
			</div><!--Fin cabecera 3-->

			<div id="contenedormapa1" class="sombra">
				<div id="contenedormapa2">
					<iframe src="map/index.html" width="100%" height="400"></iframe>
				</div>
			</div>

			<div id="contenedorcuerpo">
				<div class="uno cols"><img src="images/icon_bombilla.png"/></div>
				<div class="siete cols"><h2>Todo comienza por el mapa</h2>
					<p><strong>También puedes navegar por el mapa.</strong> Si haces doble click, irás aproximándote al lugar donde quieras buscar tu oficina.</b>
					<p><strong>Cuando seleccionas una oficina</strong> y te registras en ella, entras a formar parte de un grupo de acción, junto con las demás personas que la han escogido.</p>
					<p><strong>Cada grupo se comunica</strong> a través de su foro. Sólo puedes pertenecer a un foro a la vez. De esta manera todas sabemos cuántas somos y podemos distribuir mejor las tareas.</p>
					<p><strong>Los grupos pueden ver</strong> cómo lo están haciendo los demás y aprender de ellos, pero sólo participan en el foro de su sucursal.<p>
					<p>Por supuesto el teléfono y los bares siguen existiendo ;-)</p>
				</div>
				<div class="cuatro cols" style="text-align:center;"><img src="images/swarm_foros.png"/></div>
				<div class="cortar"></div>
			</div>

			<div id="contenedorinfo">
				<div id="info" class="borde-dash">
					<div class="seis cols margeni15">
						<p><strong>Si entras con tu usuario de Facebook</strong> es más cómodo para tí y puedes interactuar también en ese espacio.  Además le das difusión a “Toque a Bankia”.</p>
						<p>La noticia de que te has apuntado a la acción aparecerá en tu muro y en el de todas las demás personas de tu grupo.</p>
					</div>
					<div class="seis cols margeni15">
						<p><strong>Si te registras con el formulario</strong> todo es igual salvo que no has conectado tu Facebook a la acción y tu espacio privilegiado será el foro.</p>
						<p>En ambos casos es muy importante que el grupo se organice para definir formas de acción y disponibilidad horaria para la jornada.</p>
					</div>
					<div class="cortar"></div>
				</div>
			</div>
		</div><!--Fin Principal-->

<?php include('pie.php'); ?>

	</body>
</html>