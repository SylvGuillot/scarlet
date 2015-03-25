<?php
add_action ( 'init', 'initialize_meta_boxes', 9999 );
function initialize_meta_boxes() {
	if (! class_exists ( 'cmb2_bootstrap_202' ))
		require_once locate_template ( '/cmb2/init.php' );
}

add_filter ( 'cmb2_meta_boxes', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param array $meta_boxes        	
 * @return array
 *
 */
function cmb2_sample_metaboxes(array $meta_boxes) {
	
	// Start with an underscore to hide fields from custom fields list
	$prefix = '_musique_';
	
	$meta_boxes [] = array (
			'id' => 'artist_metabox',
			'title' => __ ( 'Artist Options', 'musique' ),
			'object_types' => array (
					'artist' 
			),
			'context' => 'normal',
			'priority' => 'high',
			'show_names' => true,
			'fields' => array (
					array (
							'name' => __ ( 'Profile Image', 'musique' ),
							'id' => $prefix .'profile_image',
							'type' => 'file',
							'desc' => __ ( 'Choose profile image from WordPress media library', 'musique' ),
							'allow' => array( 'attachment' )
					),
					array (
							'name' => __ ( 'Facebook', 'musique' ),
							'id' => $prefix .'facebook',
							'type' => 'text_url' 
					),
					array (
							'name' => __ ( 'Google+', 'musique' ),
							'id' => $prefix .'google',
							'type' => 'text_url' 
					),
					array (
							'name' => __ ( 'Instagram+', 'musique' ),
							'id' => $prefix .'instagram',
							'type' => 'text_url' 
					),
					array (
							'name' => __ ( 'Twitter', 'musique' ),
							'id' => $prefix .'twitter2',
							'type' => 'text_url' 
					)											
													
			) 
	);
	
	$meta_boxes [] = array (
			'id' => 'video_metabox',
			'title' => __ ( 'Video Options', 'musique' ),
			'object_types' => array (
					'video'
			),
			'context' => 'normal',
			'priority' => 'high',
			'show_names' => true,
			'fields' => array (
					array (
							'name' => __ ( 'Artist', 'musique' ),
							'id' => $prefix .'video_artist',
							'type' => 'select',
							'desc' => __ ( 'Select an artist', 'musique' ),
							'options' => 'get_artists_array'
					),
					array (
							'name' => __ ( 'Video Code', 'musique' ),
							'id' => $prefix .'video_code',
							'desc' => __('Place Embed Code Here, works with youtube, vimeo...', 'musique'),
							'type' => 'textarea_code'
					)
			)
	);
	
	// Add other metaboxes as needed
	return $meta_boxes;
}