<?php
function musique_custom_css() {
	global $musique;
	if (isset($musique['background'])) {
		$background ='body {background : url("'.$musique['background']['background-image'].'")'.$musique['background']['background-repeat'].' '.$musique['background']['background-color'].' }';
	}
	else {
		$background ='';
	}	
	$musique_custom_css = '<style type="text/css">'.$background.'</style>';
	echo $musique_custom_css;
}
add_action('wp_head', 'musique_custom_css');