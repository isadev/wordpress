<?php

	// funcion para cargar los estilos de bootstrap
	function css_js_scripts() {
		wp_enqueue_style( 'styles-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
		wp_enqueue_script('jquery_', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.2.1', true);
		wp_enqueue_script('js_bootstrap_', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array("jquery_"), '3.2.1', true);
		wp_enqueue_style( "mod_styles", get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
	}
	add_action( 'wp_enqueue_scripts', 'css_js_scripts' );