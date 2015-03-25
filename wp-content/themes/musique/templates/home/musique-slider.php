<?php
global $musique;
$slidewidth = $musique ['slider_accueil_size_width'];
$slidemin = $musique ['slider_accueil_min_slides'];
$slidemax = $musique ['slider_accueil_max_slides'];
$slidemargin = $musique ['slider_accueil_margin_slides'];
$slidepager = $musique ['slider_accueil_pager_slides'];
$slidecaptions = $musique ['slider_accueil_captions_slides'];
$slidemoveslides = $musique ['slider_accueil_moveslides_slides'];
?>
<?php

$wp_query = new WP_Query ();
$wp_query->query ( array (
		'post_type' => 'slide' 
) );

?>
<?php if ($wp_query) : ?>
<ul class="bxslider" data-bx-slidewidth="<?php echo $slidewidth; ?>" data-bx-minslides="<?php echo $slidemin; ?>" data-bx-maxslides="<?php echo $slidemax; ?>"
	data-bx-slidemargin="<?php echo $slidemargin; ?>" data-bx-pager="<?php echo $slidepager; ?>" data-bx-captions="<?php echo $slidecaptions; ?>" data-moveslides="<?php echo $slidemoveslides; ?>">
<?php while ( $wp_query->have_posts () ) : ?>
	<?php
		$wp_query->the_post ();
		global $post;
	?>
	<?php if (has_post_thumbnail ( $post->ID )) : ?>
		<?php
			$image = wp_get_attachment_image_src ( get_post_thumbnail_id ( $post->ID ), 'full' );
			$image_url = $image[0];
		?>
			<li><img src="<?php echo $image_url; ?>" alt="" title="<?php echo the_title(); ?>" /></li>
	<?php endif;?>
<?php endwhile;?>
</ul>
<?php wp_reset_query(); //important ?>
<?php endif;?>
