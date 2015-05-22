<?php get_header(); ?>

<?php 

	if ( is_category( array('proyectos') ) ) {
		get_template_part('content', 'proyectos');
	}

?>

<?php get_footer(); ?>
