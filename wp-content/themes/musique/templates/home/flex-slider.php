<?php
global $musique;
$slides = $musique ['slides_accueil'];
$slidewidth = $musique ['slider_accueil_size_width'];
$slidemin = $musique ['slider_accueil_min_slides'];
$slidemax = $musique ['slider_accueil_max_slides'];
$slidemargin = $musique ['slider_accueil_margin_slides'];
$slidepager = $musique ['slider_accueil_pager_slides'];
$slidemoveslides = $musique ['slider_accueil_moveslides_slides'];
?>
<style>
div.flexslider ul.slides li {
	margin-right: <?php echo $slidemargin;?>px;
	position : relative;
}

.flex-caption {
	background: none repeat scroll 0 0 rgba(0, 0, 0, 0.6);
	bottom: 0;
	color: #fff;
	font-size: 14px;
	left: 0;
	line-height: 18px;
	padding: 2%;
	position: absolute;
	text-align: center;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3);
	width: 96%;
}
</style>
<div class="flexslider" data-flex-slidewidth="<?php echo $slidewidth; ?>" data-flex-minslides="<?php echo $slidemin; ?>" data-flex-maxslides="<?php echo $slidemax; ?>"
	data-flex-slidemargin="<?php echo $slidemargin; ?>" data-flex-pager="<?php echo $slidepager; ?>" data-flex-moveslides="<?php echo $slidemoveslides; ?>">
	<ul class="slides">
<?php foreach ($slides as $slide) : ?>
	<li><img src="<?php echo $slide['image'];?>" alt="" title="<?php echo $slide['title']; ?>" />
			<p class="flex-caption"><?php echo $slide['title']; ?></p></li>
<?php endforeach;?>
</ul>
</div>