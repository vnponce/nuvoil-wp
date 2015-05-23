<?php get_header(); ?>

<?php 
	// Archive is for categories, slug, [day|month|year], post
	// Validate that is a category 'proyectos'
	if ( is_category( array('proyectos') ) ) {
		get_template_part('content', 'proyectos');
	}

?>

<?php get_footer(); ?>
