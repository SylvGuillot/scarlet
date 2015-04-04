<?php
/*
Template Name: Partenaire
*/
?>
<?php get_header(); ?>

  <div id="content">
<?php $loop = new WP_Query( array( 'post_type' => 'partenaire') );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
    <div class="content-headline-partenaire">
      <h1 class="entry-headline-partenaire"><span class="entry-headline-text"><?php the_title(); ?></span></h1>
<?php happenstance_get_breadcrumb(); ?>
    </div>
<?php happenstance_get_display_image_page(); ?>
    <div class="entry-content-partenaire">
<?php the_content(); ?>
<?php wp_link_pages( array( 'before' => '<p class="page-link"><span>' . __( 'Pages:', 'happenstance' ) . '</span>', 'after' => '</p>' ) ); ?>   
<?php endwhile; endif; ?>
    </div>   
  </div> <!-- end of content -->
<?php if ($happenstance_options_db['happenstance_display_sidebar'] != 'Hide') { ?>
<?php get_sidebar(); ?>
<?php } ?>

<?php get_footer(); ?>