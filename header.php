<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php bloginfo(the_tile); ?></title>
	<?php if ( is_front_page() ) {?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/inicio.css">
	<?php } elseif ( is_page( array('bolsa-de-trabajo') ) ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/pages.css">
	<?php } elseif ( is_category( array('proyectos') ) ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/proyectos.css">
	<?php } elseif ( is_category( array('noticias') ) ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/noticias.css">
	<?php } elseif ( is_single() ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/noticias-int.css">
	<?php } ?>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>	
</head>
<body>

<!-- ********************* ABRE CABECERA PRINCIPAL ********************* -->	
	<header class="cabecera-principal">
		<section class="barra-negra">
			<div class="wrapt">
				<section class="idioma">
					<div class="lenguaje">
						<div>Es</div>
						<div class="triangulito-lenguaje"></div>
					</div>
					<ul class="seleccion-lenguaje">
						<li>español</li>
						<li>inglés</li>
					</ul>
				</section>
				<section class="bolsa-blog">
					<ul>
						<li><a href="">Bolsa de trabajo</a></li>
						<li class="rojo">|</li>
						<li><a href="">Blog</a></li>
					</ul>
				</section>
				<section class="contacto">
					<div><img src="<?php bloginfo(template_directory) ?>/img/contacto.svg" alt=""></div>
				</section>
			</div>
		</section>

		<section class="barra-blanca">
			<div class="wrapt">
				<div class="cont-logo">
					<figure><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo(template_directory) ?>/img/logo-nuvoil.svg" alt="" id="logo"></a></figure>
				</div>
				<div class="social"></div>
				<div class="menu-icono">
					<span></span>
					<div>menu</div>
				</div>
				
			</div>
			<nav>
					<ul>
						<?php 
							$args = array(
								'theme_location' => 'primary'
								);
							wp_nav_menu( $args ); 
						?>
<!--
						<li><a href=""><p>servicios</p></a></li>
						<li><a href=""><p>proyectos</p></a></li>
						<li><a href=""><p>marcas</p></a></li>
						<li><a href=""><p>sistema de gestión integral</p></a></li>
						<li><a href=""><p>acerca de nuvoil</p></a></li>
						<li><a href=""><p>noticias</p></a></li>
-->
					</ul>
				</nav>
		</section>
		
	</header>
<div class="bloque"></div>
