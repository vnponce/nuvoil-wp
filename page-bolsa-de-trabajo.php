<?php get_header(); ?>

<!-- ********************* IMAGEN PRINCIPAL ********************* -->

<figure class="slider wrapt">
	<img src="http://nuvoil.app/wp-content/themes/nuvoil/img/equipo-nuvoil.jpg">
</figure>

<!-- ********************* Contenedor Bolsa ********************* -->
<section class="wrapt">
	<article class="cont-bolsa wrapt">
		<section>		
			<?php
				// Get post with ID 60, in a OBJECT, in RAW format
				$bolsaPrincipal = get_post(60, OBJECT, raw);
			?>
				<h1><?php echo $bolsaPrincipal->post_title; ?></h1>
				<br>
				<?php echo $bolsaPrincipal->post_content; ?>
				<hr>
				<h2>Comparte esta nota</h2>
				<span class="redes">-</span>
				<span class="redes">-</span>
				<span class="redes">-</span>
				<span class="redes">-</span>
		</section>	
	</article>
	<article class="cont-vacantes">

		<figure class="img_vacantes">
			<?php 
				// Con esta funcion regresa el HTML renderizado de una imagen thumbnail específica, dando el ID de post
				// Regresa el thumnail del post de ID 71
				echo get_the_post_thumbnail(71) 
			?>
		</figure>
		<div>
			<h4>VACANTES</h4>
		</div>
		<section>
			<?php 
				$c = 0;
				$vacantes = new WP_Query('cat=11');
				if($vacantes->have_posts()) : 
					while($vacantes->have_posts()) : $vacantes->the_post(); 
						if( get_the_ID() != 71 ){
							//var_dump($vacantes->ID);
							$c += 1;

			?>
				<article>
					<h2><?php the_title() ; ?></h2>
					<?php echo get_the_content(); ?>
				</article>
				<?php if ( $c == 1 ) { ?>
					<hr>
				<?php } 
					}
				?>
			<?php 
					endwhile;

				else : 

					echo '<p>No post para mostrar</p>';

				endif;

			?>
		</section>



	</article>
</section>

<!-- ********************* Contenedor Valores ********************* -->
<div class="cont-valores">
	<?php
		// Get post with ID 67, in a OBJECT, in RAW format
		$valoresPrincipal = get_post(67, OBJECT, raw);
	?>
	<h2><?php echo $valoresPrincipal->post_title; ?></h2>
	<p><?php echo $valoresPrincipal->post_content; ?></p>
<!-- Primero -->
	<section>
		<article class="front">
			<figure>
				<img src="http://nuvoil.app/wp-content/themes/nuvoil/img/telefono.svg">
			</figure>	
			<h3>experiencia y autodesarrollo</h3>		
		</article>
<!--
		<article class="back">
			<figure>
				<img src="http://nuvoil.app/wp-content/themes/nuvoil/img/telefono.svg">				
			</figure>
			<p>
				<span>deshidratación</span>
				Es conducirse con honestidad en la familia, sociedad, y trabajo coerente entre el decir y el hacer
			</p>
		</article>
-->
	</section>

<!-- DOS -->
	<section>
		<article class="front">
			<figure>
				<img src="http://nuvoil.app/wp-content/themes/nuvoil/img/telefono.svg">
			</figure>	
			<h3>experiencia y autodesarrollo</h3>		
		</article>
<!--
		<article class="back">
			<figure>
				<img src="http://nuvoil.app/wp-content/themes/nuvoil/img/telefono.svg">				
			</figure>
			<p>
				<span>deshidratación</span>
				Es conducirse con honestidad en la familia, sociedad, y trabajo coerente entre el decir y el hacer
			</p>
		</article>
-->
	</section>

<!-- TRES -->
	<section>
		<article class="front">
			<figure>
				<img src="http://nuvoil.app/wp-content/themes/nuvoil/img/telefono.svg">
			</figure>	
			<h3>experiencia y autodesarrollo</h3>		
		</article>
<!--
		<article class="back">
			<figure>
				<img src="http://nuvoil.app/wp-content/themes/nuvoil/img/telefono.svg">				
			</figure>
			<p>
				<span>deshidratación</span>
				Es conducirse con honestidad en la familia, sociedad, y trabajo coerente entre el decir y el hacer
			</p>
		</article>
-->
	</section>

<!-- CUATRO -->
	<section>
		<article class="front">
			<figure>
				<img src="http://nuvoil.app/wp-content/themes/nuvoil/img/telefono.svg">
			</figure>	
			<h3>experiencia y autodesarrollo</h3>		
		</article>
<!--
		<article class="back">
			<figure>
				<img src="http://nuvoil.app/wp-content/themes/nuvoil/img/telefono.svg">				
			</figure>
			<p>
				<span>deshidratación</span>
				Es conducirse con honestidad en la familia, sociedad, y trabajo coerente entre el decir y el hacer
			</p>
		</article>
-->
	</section>

<!-- CINCO -->
	<section>
		<article class="front">
			<figure>
				<img src="http://nuvoil.app/wp-content/themes/nuvoil/img/telefono.svg">
			</figure>	
			<h3>experiencia y autodesarrollo</h3>		
		</article>
<!--
		<article class="back">
			<figure>
				<img src="http://nuvoil.app/wp-content/themes/nuvoil/img/telefono.svg">				
			</figure>
			<p>
				<span>deshidratación</span>
				Es conducirse con honestidad en la familia, sociedad, y trabajo coerente entre el decir y el hacer
			</p>
		</article>
-->
	</section>

<!-- SEIS -->
	<section>
		<article class="front">
			<figure>
				<img src="http://nuvoil.app/wp-content/themes/nuvoil/img/telefono.svg">
			</figure>	
			<h3>experiencia y autodesarrollo</h3>		
		</article>
<!--
		<article class="back">
			<figure>
				<img src="http://nuvoil.app/wp-content/themes/nuvoil/img/telefono.svg">				
			</figure>
			<p>
				<span>deshidratación</span>
				Es conducirse con honestidad en la familia, sociedad, y trabajo coerente entre el decir y el hacer
			</p>
		</article>
-->
	</section>

</div>

<?php get_footer(); ?>