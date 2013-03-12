<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Language" CONTENT="en"/>
		<meta name="author" CONTENT="Brankia S.A."/>
		<meta name="copyitright" CONTENT="Brankia S.A., 2012. Rato. Todos los derechos en los reservados."/>
		<meta name="title" CONTENT="Bankia"/>
		<meta name="generator" CONTENT="Bankia"/>
		<meta name="distribution" CONTENT="global"/>
		<meta name="revisit" CONTENT="0 day" />
		<meta name="robots" CONTENT="all" />
		<link rel="stylesheet" href="estilos.css" />
		<meta property="og:title" content="Toque a Bankia" />
		<meta property="og:type" content="cause" />
		<meta property="og:url" content="http://bankia.mepone.net" />
		<meta property="og:image" content="http://bankia.mepone.net/images/TAB_logoWeb.png" />
		<meta property="og:site_name" content="Dale un toque a Bankia" />
		<meta property="fb:admins" content="100003745894955" />
		<!--[if lte IE 8]> <link rel="stylesheet" href="estilos.ie.css" />  <![endif]-->  
		<title>Bankia - Toque a Bankia</title>
	</head>
	<body>
	<div id="principal">
			<div id="cabecera">
				<a href="index.php"><img src="images/TAB_logoWeb.png"></a>
			</div>
			<div id="cabecera2">
				<table width="100%">
				<tr>
					<td width="15%">&nbsp;</td>
					<td width="14%"><a href="index.php"><span id="textc21">Operación Toque</span></a></td>
					<td width="14%"><a href="toque.php"><span id="textc21">Regístrate y participa</span></a></td>
					<td width="14%"><span id="textc21">Sí se puede</span></td>
					<td width="14%"><span id="textc21">El rescate</span></td>
					<td width="14%"><span id="textc21">Accede a tu foro</span></td>
					<td width="15%">&nbsp;</td>
				</tr>
				</table>
			</div>
			<div id="presentacion">
				<table width="100%" border="0">
					<tr>
						<td colspan="2" width="75%" align="right" height="10"><p id="textc30">&nbsp;¡Dale un toque a bankia!</p></td>
						<td rowspan="3" width="25%">
							<div id="fb-root"></div>
								<script>
								(function(d, s, id) {
									var js, fjs = d.getElementsByTagName(s)[0];
									if (d.getElementById(id)) return;
									js = d.createElement(s); js.id = id;
									js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
									fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));
								</script>	
								<div class="fb-like" data-href="http://bankia.mepone.net" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true" data-font="arial" data-action="recommend"></div>
								<?php
								$rss = new DOMDocument();
								$rss->load('http://www.facebook.com/feeds/page.php?id=127892434049953&format=rss20');
								$feed = array();
								foreach ($rss->getElementsByTagName('item') as $node) {
									$item = array ( 
									'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
									'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
									'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
									'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
									);
								array_push($feed, $item);
								}
								
								$limit = 10;
								for($x=0;$x<$limit;$x++) {
									$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
									$link = $feed[$x]['link'];
									$description = $feed[$x]['desc'];
									$date = date('l F d, Y', strtotime($feed[$x]['date']));
									echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
									echo '<small><em>Posted on '.$date.'</em></small></p>';
									echo '<p>'.$description.'</p>';
								}
								
								?>
						
						
						</td>
					</tr>
					<tr>
						<td width="33%" align="left"><span id="textcuerpo2"><b>Te proponemos la primera acción distribuida para paralizar Bankia.</b> Muchas pequeñas acciones que pueden devolver el control a las personas. ¿Estabas deseando hacer algo y no sabías cómo?</span><br>&nbsp;</td>
						<td rowspan="1" width="33%" align="center" valign="top"><a href="toque.php"><div id="apuntateboton"><span id="textboton">¡Apúntate y participa!</span></div></a></td>
					</tr>
					<tr>
						<td colspan="2"><img src="images/raton.jpg" width="100%"></td>
					</tr>
				</table>
				
			</div>


			<div id="contenedorcuerpo">
			
			aquí más cosas luego
		
			</div>
	</div>
	</body>
</html>
