<?php dynamic_sidebar( 'sidebar-1' ); ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<header>
					<h4 class="text-uppercase">Featured Video</h4>							
				</header>
			</div>
			<div class="panel-body">
			<?php $GLOBALS['artist_id']=8; ?>
			<?php get_template_part('templates/module', 'videos'); ?>			
			</div>
		</div>
	</div>
</div>