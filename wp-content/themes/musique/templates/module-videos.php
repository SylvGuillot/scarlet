<?php
//global $nbvideos;
$nbvideos= 1;
global $artist_id;
if (!isset($artist_id)) {
	$artist_id = get_the_ID();
}
$args=array(
		'post_type' =>'video',
		'orderby' => 'post_date',
		'posts_per_page' => $nbvideos,
		'meta_query' => array(
				array(
						'key' => '_musique_video_artist',
						'value' => $artist_id,
				)
		)		
);
$videos = get_posts( $args );
?>
<?php foreach($videos as $video) : ?>
	<div class="thumbnail">
		<a href="<?php echo get_permalink($video->ID); ?>"><?php echo get_the_post_thumbnail($video->ID, 'preview', array('class'=>'img-responsive')); ?></a>
		<a class="caption" href="<?php echo get_permalink($video->ID); ?>">
			<span><?php echo $video->post_title; ?></span>
		</a>
	</div>
<?php endforeach; ?>

