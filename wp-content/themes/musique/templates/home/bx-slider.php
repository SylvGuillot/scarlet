<?php
global $musique;
$slides = $musique ['slides_accueil'];
$slidewidth = $musique ['slider_accueil_size_width'];
$slidemin = $musique ['slider_accueil_min_slides'];
$slidemax = $musique ['slider_accueil_max_slides'];
$slidemargin = $musique ['slider_accueil_margin_slides'];
$slidepager = $musique ['slider_accueil_pager_slides'];
$slidecaptions = $musique ['slider_accueil_captions_slides'];
$slidemoveslides = $musique ['slider_accueil_moveslides_slides'];
?>
<ul class="bxslider" data-bx-slidewidth="<?php echo $slidewidth; ?>"
	data-bx-minslides="<?php echo $slidemin; ?>"
	data-bx-maxslides="<?php echo $slidemax; ?>"
	data-bx-slidemargin="<?php echo $slidemargin; ?>"
	data-bx-pager="<?php echo $slidepager; ?>"
	data-bx-captions="<?php echo $slidecaptions; ?>"
	data-moveslides="<?php echo $slidemoveslides; ?>">
<?php foreach ($slides as $slide) : ?>
	<li><img src="<?php echo $slide['image'];?>" alt=""
		title="<?php echo $slide['title']; ?>" /></li>
<?php endforeach;?>
</ul>