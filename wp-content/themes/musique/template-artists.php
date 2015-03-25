<?php 
/*
Template Name: Artists
*/
?>
<?php get_header (); ?>
<?php
$wp_query = new WP_Query ();
$wp_query->query ( array (
		'post_type' => 'artist'
) );
?>
<div id="contenu" class="row">
	<div class="col-md-12">
	<?php if ($wp_query) : ?>
		<div class="row">
		<?php while ( $wp_query->have_posts () ) : ?>
			<div class="col-xs-6 col-md-4">
			<?php
				$wp_query->the_post ();
				global $post;
			?>
			<?php if (has_post_thumbnail ( $post->ID )) : ?>
				<?php
					$image = wp_get_attachment_image_src ( get_post_thumbnail_id ( $post->ID ), 'cover' );
					$image_url = $image[0];
				?>
				<div class="thumbnail">
					<a href="<?php the_permalink(); ?>">
						<img src="<?php echo $image_url; ?>" alt="" title="<?php echo the_title(); ?>"/>
					</a>
					<a class="caption_artist" href="<?php the_permalink(); ?>">
						<span><?php the_title(); ?></span>
					</a>					
				</div>
			<?php endif;?>
			</div>
		<?php endwhile;?>
		</div>
	<?php endif;?>
	</div>
</div>
<?php get_footer(); ?>