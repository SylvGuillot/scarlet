<?php get_header (); ?>
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
<div id="contenu" class="row">
	<div class="col-md-8">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<header>
							<h4 class="text-uppercase">Actu</h4>							
						</header>
					</div>
					<div class="panel-body">	
					<?php if ( have_posts() ) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<h3><?php echo the_title();?></h3>
							<?php echo the_content();?>
						<?php endwhile; ?>
						<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
						<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
					<?php else : ?>
						<?php get_template_part( 'content', 'none' );?>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>