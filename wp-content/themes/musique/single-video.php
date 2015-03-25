<?php get_header (); ?>
<div id="contenu" class="row">
	<div class="col-md-12">
	<?php if ( have_posts() ) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('templates/content', 'video'); ?>
		<?php endwhile; ?>
	<?php else : ?>
		<?php get_template_part( 'content', 'none' );?>
	<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>