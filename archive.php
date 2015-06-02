<?php get_header(); ?>

<?php 
	// Archive is for categories, slug, [day|month|year], post
	// Validate that is a category 'proyectos'
	if ( is_category( array('proyectos') ) ) {
		get_template_part('parts/content', 'proyectos');
	}
	if ( is_category( array('capital-humano') ) ) {
		get_template_part('parts/content', 'capital');
	}
	if ( is_category( array('gobierno-corporativo') ) ) {
		get_template_part('parts/content', 'gobierno');
	}
	if ( is_category( array('rsc') ) ) {
		get_template_part('parts/content', 'rsc');
	}
	if ( is_category( array('sgi') ) ) {
		get_template_part('parts/content', 'sgi');
	}
	if ( is_category( array('seguridad') ) ) {
		get_template_part('parts/content', 'seguridad');
	}
	if ( is_category( array('comunidad-y-medio-ambiente') ) ) {
		get_template_part('parts/content', 'comunidad');
	}

?>

<?php get_footer(); ?>
