<?php
function musique_artiste_type() {
	$labels = array (
			'name' => _x ( 'Artists', 'Post Type General Name', 'musique' ),
			'singular_name' => _x ( 'Artist', 'Post Type Singular Name', 'musique' ),
			'menu_name' => __ ( 'Artists', 'musique' ),
			'parent_item_colon' => __ ( 'Parent Artist:', 'musique' ),
			'all_items' => __ ( 'All Artists', 'musique' ),
			'view_item' => __ ( 'View Artist', 'musique' ),
			'add_new_item' => __ ( 'Add New Artist', 'musique' ),
			'add_new' => __ ( 'Add New', 'musique' ),
			'edit_item' => __ ( 'Edit Artist', 'musique' ),
			'update_item' => __ ( 'Update Artist', 'musique' ),
			'search_items' => __ ( 'Search Artist', 'musique' ),
			'not_found' => __ ( 'Not Artist found', 'musique' ),
			'not_found_in_trash' => __ ( 'Not Artist found in Trash', 'musique' ) 
	);
	$args = array (
			'label' => __ ( 'artist', 'musique' ),
			'description' => __ ( 'Artiste du Label', 'musique' ),
			'labels' => $labels,
			'supports' => array (
					'title',
					'editor',
					'thumbnail' 
			),
			'hierarchical' => false,
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'show_in_admin_bar' => true,
			'menu_position' => 5,
			'can_export' => true,
			'has_archive' => true,
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			'capability_type' => 'page' 
	);
	register_post_type ( 'artist', $args );
}

add_action ( 'init', 'musique_artiste_type', 0 );

function musique_video_type() {
	$labels = array (
			'name' => _x ( 'Videos', 'Post Type General Name', 'musique' ),
			'singular_name' => _x ( 'Video', 'Post Type Singular Name', 'musique' ),
			'menu_name' => __ ( 'Videos', 'musique' ),
			'parent_item_colon' => __ ( 'Parent Video:', 'musique' ),
			'all_items' => __ ( 'All Videos', 'musique' ),
			'view_item' => __ ( 'View Video', 'musique' ),
			'add_new_item' => __ ( 'Add New Video', 'musique' ),
			'add_new' => __ ( 'Add New', 'musique' ),
			'edit_item' => __ ( 'Edit Video', 'musique' ),
			'update_item' => __ ( 'Update Video', 'musique' ),
			'search_items' => __ ( 'Search Video', 'musique' ),
			'not_found' => __ ( 'Not Video found', 'musique' ),
			'not_found_in_trash' => __ ( 'Not Video found in Trash', 'musique' )
	);
	$args = array (
			'label' => __ ( 'video', 'musique' ),
			'description' => __ ( 'Videos du Label', 'musique' ),
			'labels' => $labels,
			'supports' => array (
					'title',
					'editor',
					'thumbnail'
			),
			'hierarchical' => false,
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'show_in_admin_bar' => true,
			'menu_position' => 5,
			'can_export' => true,
			'has_archive' => true,
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			'capability_type' => 'page'
	);
	register_post_type ( 'video', $args );
}

// Hook into the 'init' action
add_action ( 'init', 'musique_video_type', 0 );

function musique_slide_type() {
	$labels = array (
			'name' => _x ( 'Slides', 'Post Type General Name', 'musique' ),
			'singular_name' => _x ( 'Slide', 'Post Type Singular Name', 'musique' ),
			'menu_name' => __ ( 'Slides', 'musique' ),
			'parent_item_colon' => __ ( 'Parent Slide:', 'musique' ),
			'all_items' => __ ( 'All Slides', 'musique' ),
			'view_item' => __ ( 'View Slide', 'musique' ),
			'add_new_item' => __ ( 'Add New Slide', 'musique' ),
			'add_new' => __ ( 'Add New', 'musique' ),
			'edit_item' => __ ( 'Edit Slide', 'musique' ),
			'update_item' => __ ( 'Update Slide', 'musique' ),
			'search_items' => __ ( 'Search Slide', 'musique' ),
			'not_found' => __ ( 'Not Slide found', 'musique' ),
			'not_found_in_trash' => __ ( 'Not Slide found in Trash', 'musique' )
	);
	$args = array (
			'label' => __ ( 'slide', 'musique' ),
			'description' => __ ( 'Slides', 'musique' ),
			'labels' => $labels,
			'supports' => array (
					'title',
					'editor',
					'thumbnail'
			),
			'hierarchical' => false,
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'show_in_admin_bar' => true,
			'menu_position' => 5,
			'can_export' => true,
			'has_archive' => true,
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			'capability_type' => 'page'
	);
	register_post_type ( 'slide', $args );
}

// Hook into the 'init' action
add_action ( 'init', 'musique_slide_type', 0 );

