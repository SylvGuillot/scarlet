<?php
/**
 * musique initial setup and constants
 */
function musique_setup() {
	register_nav_menus ( array (
			'primary_navigation' => __ ( 'Primary Navigation', 'musique' ),
			'footer_navigation' => __ ( 'Footer Navigation', 'musique' ) 
	) );
	add_theme_support ( 'post-thumbnails' );
	add_theme_support ( 'custom-header' );
}
add_action ( 'after_setup_theme', 'musique_setup' );
function musique_sidebar() {
	register_sidebar ( array (
			'name' => __ ( 'Primary Sidebar', 'musique' ),
			'id' => 'sidebar-1',
			'description' => __ ( 'Main sidebar that appears on the top.', 'musique' ),
			'before_widget' => '<div id="%1$s" class=""><div>',
			'after_widget' => '</div></div>',
			'before_title' => '<h1 class="hide-title">',
			'after_title' => '</h1>' 
	) );
}
add_action ( 'widgets_init', 'musique_sidebar' );
function musique_image_size() {
	add_image_size ( 'preview', 450, 300, true );
	add_image_size ( 'cover', 450, 450, true );
	add_image_size ( 'normal', 750, 99999, false );
}
add_action ( 'after_setup_theme', 'musique_image_size' );