<?php

/*--=====================================
		CARGA CSS Y JS 
=======================================-*/

function marginal_script_enqueue() {


	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.css', array(), '3.3.7', 'all');

	wp_enqueue_style('font', get_template_directory_uri() . '/lib/font-awesome/css/font-awesome.css', array(), '4.7.0', 'all');

	wp_enqueue_style('animate', get_template_directory_uri() . '/lib/animate-css/animate.min.css', array(), '3.5.1', 'all');

	wp_enqueue_style('estilo', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');


	wp_enqueue_script('jquery', get_template_directory_uri() . '/lib/jquery/jquery.min.js', array(), '1.12.4', true);
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.js', array(), '3.3.7', true);
	wp_enqueue_script('hoverintent', get_template_directory_uri() . '/lib/superfish/hoverIntent.js', array(), '1.8.1', true);
	wp_enqueue_script('superfish', get_template_directory_uri() . '/lib/superfish/superfish.min.js', array(), '1.7.9', true);
	wp_enqueue_script('morphext', get_template_directory_uri() . '/lib/morphext/morphext.js', array(), '2.4.4', true);
	wp_enqueue_script('wow', get_template_directory_uri() . '/lib/wow/wow.js', array(), '1.1.2', true);
	wp_enqueue_script('sticky', get_template_directory_uri() . '/lib/stickyjs/sticky.js', array(), '1.0.4', true);
	wp_enqueue_script('easing', get_template_directory_uri() . '/lib/easing/easing.js', array(), '1.4.0', true);
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true);
	wp_enqueue_script('contactform', get_template_directory_uri() . '/contactform/contactform.js', array(), '1.0.0', true);


}

add_action('wp_enqueue_scripts', 'marginal_script_enqueue');


/*--=====================================
		MENU
=======================================-*/

function marginal_theme_setup() {

	add_theme_support('menus');

	register_nav_menu('primero', 'Primer Menu');
	register_nav_menu('segundo', 'Segundo Menu');

}

add_action('init', 'marginal_theme_setup');

/*--=====================================
		ACTIVAR MENUS (SUBIR IMAGENES)
=======================================-*/

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');


// Register custom navigation walker
require_once('wp-bootstrap-navwalker.php');