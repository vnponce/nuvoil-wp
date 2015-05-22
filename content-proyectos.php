<!-- ********************* ABRE SLIDE ********************* -->
<figure class="slider wrapt">
	<img src="http://nuvoil.app/wp-content/themes/nuvoil/img/equipo-nuvoil.jpg">
</figure>
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
					<a href="<?php the_permalink(); ?>">ver más</a>
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