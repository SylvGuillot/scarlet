 <?php
/*
Template Name: Actu
*/
?>
<?php get_header(); ?>
<div id="wrapper-content">
 <div id="main-content-actualité">
  <div id="content">
     <div class="content-headline">
      <h1 class="entry-headline"><span class="entry-headline-text"><?php the_title(); ?></span></h1>

     </div>
  
<?php $loop = new WP_Query( array( 'post_type' => 'actualites') );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
        
    <div class="content-headline-actualité">
      <h1 class="entry-headline-actualité"><span class="entry-headline-text"><?php the_title(); ?></span></h1>
<?php happenstance_get_breadcrumb(); ?>
    </div>

<?php happenstance_get_display_image_post(); ?>

    <div class="entry-content-actualité">
<?php the_content(); ?>
<?php wp_link_pages( array( 'before' => '<p class="page-link"><span>' . __( 'Pages:', 'happenstance' ) . '</span>', 'after' => '</p>' ) ); ?>
<?php endwhile; endif; ?>
<?php if ( $happenstance_options_db['happenstance_next_preview_post'] != 'Hide' ) { ?>
<?php } ?>
    </div>   
  </div> <!-- end of content -->
</div>
</div>
<?php if ($happenstance_options_db['happenstance_display_sidebar'] != 'Hide') { ?>
<?php get_sidebar(); ?>
<?php } ?>
<?php get_footer(); ?>

