<?php 
// Adding Css
function nuvoilWP_resources(){

	//wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'nuvoilWP_resources');

// Navigation menus

// Theme setup
function nuvoilWP_setup(){

	// Navigation Menus
	register_nav_menus(array(
			'primary' => __('Menu ae'),
			'footer'  => __('Menu de pie')
	 	));

	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumnail', 180, 120, true);
	add_image_size('banner-image', 920, 210, true);

	// Add post format support
	add_theme_support('post-formats', array('aside', 'gallery', 'link', 'video'));

}

add_action('after_setup_theme', 'nuvoilWP_setup');

// Add our widget location
function nuvoilWidgetInit(){

	register_sidebar( array(
			'name' => 'Sidebar Twitter',
			'id'   => 'sidebar_twitter'
		));

}

add_action('widgets_init', 'nuvoilWidgetInit');

// Custom function
	// Identifica la página actual
	function itsme_page($me){
		if ( is_page( array($me) ) ) {
			return 'seleccionado';
		}
		else{
			return 'false';
		}
	}
	// Identifica la categoría actual
	function itsme_cat($me){
		if ( is_category( array($me) ) ) {
			return 'seleccionado';
		}
		else{
			return 'false';
		}
	}
