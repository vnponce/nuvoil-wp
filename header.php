<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php bloginfo(the_tile); ?></title>
	<!-- Condiciones -->
	<!-- Pagina principal -->
	<?php if ( is_front_page() ) {?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/inicio.css">
	<!-- Pagina bolsa de trabajo -->
	<?php } elseif ( is_page( array('bolsa-de-trabajo') ) ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/pages.css">
	<!-- Pagina contacto -->
	<?php } elseif ( is_page( array('contacto') ) ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/contacto.css">
	<!-- Pagina sgi -->
	<?php } elseif ( is_page( array('sgi', 'nuestras-certificaciones', 'seguridad') ) ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/sgi.css">
	<!-- Pagina aceraca de nuvoil -->
	<?php } elseif ( is_page( array('acerca-de-nuvoil') ) ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/acerca.css">
	<!-- Pagina capital -->
	<?php } elseif ( is_page( array('capital') ) ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/capital.css">
	<!-- Pagina gobierno -->
	<?php } elseif ( is_page( array('gobierno') ) ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/gobierno.css">
	<!-- Pagina Historia -->
	<?php } elseif ( is_page( array('historia') ) ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/historia.css">
	<!-- Pagina Historia -->
	<?php } elseif ( is_page( array('responsabilidad-social-corporativa') ) ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/rsc.css">
	<!-- Pagina Proyectos -->
	<?php } elseif ( is_page( array('proyectos') ) ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/proyectos.css">
	<!-- Paginas Marcas -->
	<?php } elseif ( is_page( 
		array(
			'compresion-de-gas-offshore',
			'arrendamiento-de-maquinaria',
			'servicio-boca-de-pozo',
			'aceitemex',
			'rancho',
			'verde-balam',
			'exsen'
		) ) ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/marcas.css">
	<?php } elseif ( is_page( 
		array(
			'compresion-de-gas-natural',
			'acondicionamiento-y-tratamiento',
			'sistema-de-levantamiento',
			'construccion-de-plantas',
			'mantenimiento-a-instalaciones',
			'proyectos-integrados',
			'suministro-de-equipos',
			'telemetria',
			'ingenieria'
		) ) ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/servicios.css">


	<!-- Categoria proyectos (ESTE NO DEBE ESTAR)-->
	<?php } elseif ( is_category( array('proyectos-2') ) ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/proyectos.css">
	<!-- Categoria noticias -->
	<?php } elseif ( is_category( array('noticias') ) ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/noticias.css">


	<!-- Es blog -->
	<?php } elseif ( is_home() ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/noticias-gen.css">
	<!-- Es post -->
	<?php } elseif ( is_single() ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/noticias-int.css">
	<!-- Es categoría de blog -->
	<?php } elseif ( is_category( 
					array(
						'capital-humano',
						'gobierno-corporativo',
						'rsc',
						'sgi',
						'seguridad',
						'comunidad-y-medio-ambiente',
						'proyectos'
						) 
					 ) 
					) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylus/noticias-gen.css">
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
						<li><a href="">Proveedores</a></li>
						<li class="rojo en-desktop">|</li>
						<li><a href="">Telemetría</a></li>
						<li class="rojo en-desktop">|</li>
						<li><a href="<?php get_site_url() ?>/bolsa-de-trabajo">Bolsa de trabajo</a></li>
						<li class="rojo en-desktop">|</li>
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
				
				<div class="social">
					<a href=""><span class="icon-facebook"></span></a>
					<a href=""><span class="icon-twitter"></span></a>
					<a href=""><span class="icon-linkedin"></span></a>
					<a href=""><span class="icon-gplus"></span></a>
					<a href=""><span class="icon-instagram"></span></a>
					<a href=""><span class="icon-youtube"></span></a>
				</div>
				
				<div class="menu-icono">
					<div>
						<span class="rayita"></span>
						<span class="rayita"></span>
						<span class="cerrar-nav">x</span>	
						<nav class="navegacion-movil">
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
					</div>
					<div class="menu-texto">menu</div>
				</div>
			</div>
		</section>

	</header>
	
	<div class="bloque"></div>
<!-- ********************* CIERRA CABECERA PRINCIPAL ********************* -->	
