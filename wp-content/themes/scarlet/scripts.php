<?php
	function scarlet_scripts(){
		wp_enqueue_style ('scarlet-style', get_stylesheet_directory_uri (), '/style.css');
	}
	add_action ('wp_enqueue_style', 'scarlet-style');