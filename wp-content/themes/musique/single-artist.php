<?php get_header (); ?>
<div id="contenu" class="row">
	<div class="col-md-8">
	<?php if ( have_posts() ) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('templates/content', 'artist'); ?>
		<?php endwhile; ?>
	<?php else : ?>
		<?php get_template_part( 'content', 'none' );?>
	<?php endif; ?>
	</div>
	<div class="col-md-4">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<header>
							<h4 class="text-uppercase">Videos</h4>							
						</header>
					</div>
					<div class="panel-body">
					<?php //$GLOBALS['nbvideo']=1; ?>
					<?php get_template_part('templates/module', 'videos'); ?>
					</div>
				</div>	
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<header>
							<h4 class="text-uppercase">Photo</h4>							
						</header>
					</div>
					<div class="panel-body">
					<?php the_post_thumbnail('preview', array('class'=>'img-responsive'));?>
					</div>
				</div>			
			</div>
	</div>
</div>
<?php get_footer(); ?>