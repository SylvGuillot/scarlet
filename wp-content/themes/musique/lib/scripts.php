<?php
function musique_scripts() {
	wp_enqueue_script ( 'bootstrap-script', get_stylesheet_directory_uri () . '/bootstrap/dist/js/bootstrap.min.js', array (
			'jquery' 
	) );
	// wp_enqueue_style ( 'style', get_stylesheet_directory_uri () . '/less/theme.css' );
	wp_enqueue_style ( 'bootstrap-style', get_stylesheet_directory_uri () . '/bootstrap/dist/css/bootstrap.css' );
	if (is_front_page ()) {
		slider_accueil_scripts ();
	}
	wp_enqueue_style( 'musique-style', get_stylesheet_uri() );
}
add_action ( 'wp_enqueue_scripts', 'musique_scripts' );
function slider_accueil_scripts() {
	global $musique;
	$slider = $musique ['diaporama-select'];
	if ($slider == 'bx_slider' || $slider == 'musique_slider') {
		wp_enqueue_script ( 'bxslider-script', get_stylesheet_directory_uri () . '/assets/sliders/bxslider/jquery.bxslider.js', array (
				'jquery' 
		) );
		wp_enqueue_style ( 'bxslider-style', get_stylesheet_directory_uri () . '/assets/sliders/bxslider/jquery.bxslider.css' );
		wp_enqueue_script ( 'bxslidermain-script', get_stylesheet_directory_uri () . '/js/bxslider.js', array (
				'jquery' 
		) );
	}
	else if ($slider == 'flex_slider') {
		wp_enqueue_script ( 'flexslider-script', get_stylesheet_directory_uri () . '/assets/sliders/flexslider/jquery.flexslider-min.js', array (
				'jquery' 
		) );
		wp_enqueue_style ( 'flexslider-style', get_stylesheet_directory_uri () . '/assets/sliders/flexslider/flexslider.css' );
		wp_enqueue_script ( 'flexslidermain-script', get_stylesheet_directory_uri () . '/js/flexslider.js', array (
				'jquery' 
		) );
	}
}