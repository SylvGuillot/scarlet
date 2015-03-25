<div class="panel panel-default">
	<div class="panel-heading">
		<header>
			<h4 class="text-uppercase"><?php the_title(); ?></h4>
		</header>
	</div>
	<div class="panel-body">
		<div class="embedded-video">
			<?php echo get_post_meta( get_the_ID(), '_musique_video_code',1); ?>
		</div>
	</div>			
</div>
