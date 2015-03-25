<?php
/**
 * The Header 
 */
global $musique;
if ($musique ['global_layout'] == 'fluid') {
	$layout = "container-fluid";
}
else {
	$layout = "container";
}

if ($musique ['logo_layout'] == 'logoleft') {
	$logo_layout = "col-md-3";
} else {
	$logo_layout = "col-md-6";
}


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
			<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="container" class="<?php echo $layout; ?>">
			<div id="header" class="row">
				<div class="logo <?php echo $logo_layout; ?>">
				<?php if (!empty($musique['logo_upload']['url'])) : ?>
					<img src="<?php echo $musique['logo_upload']['url']; ?>" alt="" />
				<?php endif;?>
				</div>
				<?php get_template_part('templates/menu'); ?>
			</div>	
			<!-- Fin div#header -->

