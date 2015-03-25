<div class="row">
	<div class="col-md-12">
		<div class="thumbnail">
		<?php echo wp_get_attachment_image( get_post_meta( get_the_ID(), '_musique_profile_image_id',1), 'normal');?>
		<?php echo get_post_meta( get_the_ID(), '_musique_twitter2',1); ?>
		</div>
	</div>
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<header>
					<h4 class="text-uppercase">Biography</h4>
				</header>
			</div>
			<div class="panel-body">
				<?php the_content(); ?>
			</div>			
		</div>
	</div>
</div>	


