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
 
								function fetch_fb_feed($url, $maxnumber) {
								ini_set('user_agent', 'Mozilla/5.0 (Linux; U; Debian 6.0; ES-es; rv:1.9.1.3) Gecko/20090824 Firefox/3.5.3');
								$updates = simplexml_load_file($url);
								$fb_array = array();
								foreach ($updates->channel->item as $fb_update) {
									if ($maxnumber == 0) {
										break;
									} else {
										$desc = $fb_update->description;
										$desc = str_replace('href="', 'href="http://www.facebook.com', $desc);
										#$desc = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $desc);
										$pubdate = strtotime($fb_update->pubDate);
										$propertime = gmdate('F jS Y, H:i', $pubdate);
										$linkback = $fb_update->link;
										$fb_item = array(
											'desc' => $desc,
											'date' => $propertime,
											'link' => $linkback
										);
										array_push($fb_array, $fb_item);
										$maxnumber--;
									}          
								}

								return $fb_array;
								} 
 
								$myfb_statuses = fetch_fb_feed('http://www.facebook.com/feeds/page.php?id=127892434049953&format=rss20', 3);
  
								echo '<ul class="fb-updates">';
								foreach ($myfb_statuses as $k => $v) {
									echo '<li>';
									echo '<span class="update">' .$v['desc']. '</span>';
									echo '<span class="date">' .$v['date']. '</span>';
									echo '<span class="link"><a href="' .$v['link']. '">Link to status update</a></span>';
									echo '</li>';
								} 
								echo '</ul>'; 
 
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
