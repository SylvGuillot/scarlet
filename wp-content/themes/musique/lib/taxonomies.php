<?php
add_action ( 'init', 'musique_artiste_taxonomy' );
function musique_artiste_taxonomy() {

	$labels_taxonomy = array (
			'name' => __ ( 'Artist Categories', 'musique' ),
			'singular_name' => __ ( 'Artist Category', 'musique' ),
			'menu_name' => __ ( 'Categories', 'musique' ),
			'search_items' => __ ( 'Search Artist Categories', 'musique' ),
			'all_items' => __ ( 'All Artist Categories', 'musique' ),
			'parent_item' => __ ( 'Parent Artist Category', 'musique' ),
			'parent_item_colon' => __ ( 'Parent Artist Category', 'musique' ),
			'edit_item' => __ ( 'Edit Artist Category', 'musique' ),
			'update_item' => __ ( 'Update Artist Category', 'musique' ),
			'add_new_item' => __ ( 'Add New Artist Category', 'musique' ),
			'new_item_name' => __ ( 'New Artist Category Name', 'musique' ) 
	);
	$args_taxonomy = array (
			'hierarchical' => true,
			'show_in_nav_menus' => true,
			'labels' => $labels_taxonomy,
			'rewrite' => array (
					'slug' => __ ( 'artists', 'musique' ),
					'hierarchical' => true 
			) 
	);
	register_taxonomy ( 'artist_category', array (
			'artist' 
	), $args_taxonomy );
}

add_action ( 'init', 'musique_video_taxonomy' );
function musique_video_taxonomy() {
	$labels_taxonomy = array (
			'name' => __('Video Categories', 'musique'),
			'singular_name' => __('Video Category', 'musique'),
			'menu_name' => __('Categories', 'musique' ),
			'search_items' => __('Search Video Categories', 'musique'),
			'all_items' => __('All Video Categories', 'musique'),
			'parent_item' => __('Parent Video Category', 'musique'),
			'parent_item_colon' => __('Parent Video Category', 'musique'),
			'edit_item' => __('Edit Video Category', 'musique'),
			'update_item' => __('Update Video Category', 'musique'),
			'add_new_item' => __('Add New Video Category', 'musique'),
			'new_item_name' => __('New Video Category Name', 'musique'),			
	);
	$args_taxonomy = array (
			'hierarchical' => true,
			'show_in_nav_menus' => true,
			'labels' => $labels_taxonomy,
			'rewrite' => array (
					'slug' => __ ( 'video', 'musique' ),
					'hierarchical' => true
			)			
	);
	register_taxonomy ( 'video_category', array (
	'video'
			), $args_taxonomy );	
}