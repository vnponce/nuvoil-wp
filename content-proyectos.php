<!-- ********************* ABRE SLIDE ********************* -->
<figure class="slider wrapt">
	<img src="http://nuvoil.app/wp-content/themes/nuvoil/img/equipo-nuvoil.jpg">
</figure>
<!-- ********************* CIERRA SLIDE ********************* -->

<!-- ********************* ARTICULO UNO ********************* -->
<article class="cont-inicio wrapt">
	<?php
			// Get post with ID 7, in a OBJECT, in RAW format
			$acerca = get_post(82, OBJECT, raw);
	?>
	<h1><?php echo $acerca->post_title; ?></h1>
	<h3><?php echo $acerca->post_content; ?></h3>
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