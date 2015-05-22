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
	<?php
			// Get post with ID 7, in a OBJECT, in RAW format
			$acerca = get_post(7, OBJECT, raw);
	?>
	<h1><?php echo $acerca->post_title; ?></h1>
	<h3><?php echo $acerca->post_content; ?></h3>
	<span>....</span>
</article>



<!-- ********************* ARTICULO PROYECTOS ********************* -->
	<?php 
		$inicio = new WP_Query('cat=5');
		if($inicio->have_posts()) : 
			while($inicio->have_posts()) : $inicio->the_post(); 
	?>
		<article class="cont-proyectos">
			<article class="wrapt">
				<section>
					<h2><?php the_title(); ?></h2>
					<p><?php the_excerpt(); ?></p>
					<a href="/category/proyectos">ver más</a>
				</section>
				<figure><?php the_post_thumbnail(); ?></figure>
			</article>
		</article>

	<?php 
		endwhile;

		else : 

			echo '<p>No post para mostrar</p>';

		endif;

	?>

<!-- ********************* ARTICULO CULTURA ********************* -->
<article class="cont-cultura">
	<article class="wrapt">
		<h2>Nuestra cultura</h2>
		<?php
			$contador_cultura = 0; 
			$inicio = new WP_Query('cat=6');
			if($inicio->have_posts()) : 
				while($inicio->have_posts()) : $inicio->the_post();
				$contador_cultura += 1; 
		?>
					<a href="<?php echo get_the_content(); ?>"><section class="enlaces-cultura <?php echo ($contador_cultura ==3) ? 'ultimo-enlace' : ''; ?>">
						<figure><?php the_post_thumbnail();?></figure>
						<div>
							<h4><?php the_title(); ?></h4>
						</div>
					</section></a>

		<?php 
			endwhile;

			else : 

				echo '<p>No post para mostrar</p>';

			endif;

		?>
	</article>
</article>


<!-- ********************* ARTICULO VIDEOS ********************* -->
<article class="cont-videos">
	<article class="wrapt">
		<h2>Nuestros videos</h2>
		<section class="videos video-uno">

		<?php
			// Get post with ID 32, in a OBJECT, in RAW format
			$videoPrincipal = get_post(32, OBJECT, raw);
		?>
			<iframe src="<?php echo $videoPrincipal->post_content ?>" frameborder="0" allowfullscreen></iframe>

			<!-- <iframe src="https://www.youtube.com/embed/EMtGxGyTAUs" frameborder="0" allowfullscreen></iframe> -->
		</section>
		
		<article class="videos-recientes">
			<div><h5>videos recientes</h5></div>
				<?php
					$contador_cultura = 0; 
					$inicio = new WP_Query('cat=9');
					if($inicio->have_posts()) : 
						while($inicio->have_posts()) : $inicio->the_post();
							$contador_recientes += 1; 
				?>
							<article class="video-contenedor <?php echo ($contador_recientes ==2) ? 'ultimo-video' : ''; ?>">
								<section class="videos">
									<iframe src="<?php echo get_the_content(); ?>" frameborder="0" allowfullscreen></iframe>
								</section>
							</article>
				<?php 
					endwhile;

					else : 

						echo '<p>No post para mostrar</p>';

					endif;

				?>
		</article>
		<section class="logo-youtube">
			<figure><img src="<?php bloginfo(template_directory) ?>/img/logo-youtube.svg" alt=""></figure>
			<a href="https://www.youtube.com/channel/UCuc0gKfdPha0jJ6JGFClecw">Visita nuestro canal</a>
		</section>
		
	</article>
</article>


<?php get_footer(); ?>