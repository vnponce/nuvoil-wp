<?php get_header(); ?>

<!-- ********************* ABRE SLIDE ********************* -->
<article id="slider">
	<div class="flechas wrapt">
		<div class="flecha flecha-izq"></div>
		<div class="flecha flecha-der"></div>
	</div>


	<section class="elemento-slide elemento-uno">
		<figure><img src="<?php bloginfo(template_directory) ?>/img/equipo-nuvoil.jpg" alt=""></figure>
		<section class="texto-noticia">
			<header class="titulo-noticia">
				<h2>Titulo de la noticia de dos líneas </h2>	
			</header>
			<section class="descriptivo">
				<h3>Acompañado de una pequeña descripción de la noticia</h3>
				<div class="rayita-horizontal"></div>
				<a href="">Ver más</a>
			</section>
		</section>
	</section>


	<section class="miniaturas">
		<div class="bloque-gris">
			<div class="triangulito-gris"></div>
		</div>
		<article class="miniatura miniatura-uno">
			<section>
				<figure>
					<img src="<?php bloginfo(template_directory) ?>/img/equipo-nuvoil.jpg" alt="">
				</figure>
				
				<div>
					<strong>Título de mientras de la noticia</strong><br>
					<span>Breve descripción de dos líneas o tres líneas</span>
				</div>
			</section>
		</article>
		<article class="miniatura miniatura-dos">
			<section>
				<figure>
					<img src="<?php bloginfo(template_directory) ?>/img/equipo-nuvoil.jpg" alt="">
				</figure>
				
				<div>
					<strong>Título de mientras de la noticia</strong><br>
					<span>Breve descripción de dos líneas o tres líneas</span>
				</div>
			</section>
		</article>
		<article class="miniatura miniatura-tres">
			<section>
				<figure>
					<img src="<?php bloginfo(template_directory) ?>/img/equipo-nuvoil.jpg" alt="">
				</figure>
				
				<div>
					<strong>Título de mientras de la noticia</strong><br>
					<span>Breve descripción de dos líneas o tres líneas</span>
				</div>
			</section>
		</article>
	</section>


</article>
<!-- ********************* CIERRA SLIDE ********************* -->







<!-- ********************* ARTICULO UNO ********************* -->
<article class="cont-inicio wrapt">
	<h1>Acerca de nuvoil</h1>
	<h3>nuvoil somos una empresa mexicana que desde nuestros inicios en 1997, hemos destacado por nuestro servicio de compresión de gas onshore y offshore, tratamiento de hidrocarburos y la construcción de plantas industriales además de su mantenimiento.</h3>
	<span>....</span>
</article>



<!-- ********************* ARTICULO PROYECTOS ********************* -->
<article class="cont-proyectos">
	<article class="wrapt">
		<section>
			<h2>Nuestros proyectos</h2>
			<p>nuvoil somos una empresa mexicana que desde nuestros inicios en 1997, hemos destacado por nuestro servicio de compresión de gas onshore y offshore, tratamiento de hidrocarburos y la construcción de plantas industriales además de su mantenimiento.</p>
			<a href="">ver más</a>
		</section>
		<figure><img src="<?php bloginfo(template_directory) ?>/img/proyectos.jpg" alt=""></figure>
	</article>
</article>


<!-- ********************* ARTICULO CULTURA ********************* -->
<article class="cont-cultura">
	<article class="wrapt">
		<h2>Nuestra cultura</h2>
		<a href=""><section class="enlaces-cultura">
			<figure><img src="<?php bloginfo(template_directory) ?>/img/equipo-nuvoil.jpg" alt=""></figure>
			<div>
				<h4>nuestros proyectos</h4>
			</div>
		</section></a>
		<a href=""><section class="enlaces-cultura">
			<figure><img src="<?php bloginfo(template_directory) ?>/img/equipo-nuvoil.jpg" alt=""></figure>
			<div>
				<h4>nuestros proyectos</h4>
			</div>
		</section></a>
		<a href=""><section class="enlaces-cultura ultimo-enlace">
			<figure><img src="<?php bloginfo(template_directory) ?>/img/equipo-nuvoil.jpg" alt=""></figure>
			<div>
				<h4>nuestros proyectos</h4>
			</div>
		</section></a>
	</article>
</article>


<!-- ********************* ARTICULO VIDEOS ********************* -->
<article class="cont-videos">
	<article class="wrapt">
		<h2>Nuestros videos</h2>
		<section class="videos video-uno">
			<iframe src="https://www.youtube.com/embed/EMtGxGyTAUs" frameborder="0" allowfullscreen></iframe>
		</section>
		
		<article class="videos-recientes">
			<div><h5>videos recientes</h5></div>
			<article class="video-contenedor">
				<section class="videos">
					<iframe src="https://www.youtube.com/embed/MxzGPTrdnck" frameborder="0" allowfullscreen></iframe>
				</section>
			</article>
			<article class="video-contenedor ultimo-video">
				<section class="videos">
					<iframe src="https://www.youtube.com/embed/MxzGPTrdnck" frameborder="0" allowfullscreen></iframe>
				</section>
			</article>

		</article>
		<section class="logo-youtube">
			<figure><img src="<?php bloginfo(template_directory) ?>/img/logo-youtube.svg" alt=""></figure>
			<a href="">Visita nuestro canal</a>
		</section>
		
	</article>
</article>


<?php get_footer(); ?>