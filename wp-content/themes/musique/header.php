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
				
<?php
global $musique;
$slider = $musique['diaporama-select'];
?>
<div id="slider" class="row">
	<div class="col-md-12">
	<?php
	if ($slider == 'meta_slider') {
		get_template_part('templates/home/meta','slider');
	}
	else if($slider == 'bx_slider') {
		get_template_part('templates/home/bx','slider');
	}
	else if($slider == 'flex_slider') {
		get_template_part('templates/home/flex','slider');
	}
	else if($slider == 'musique_slider') {
		get_template_part('templates/home/musique','slider');
	}
	?>
	</div>
</div>
				
				

				<?php get_template_part('templates/menu'); ?>
			</div>	
			<!-- Fin div#header -->

