<?php
/*
Template Name: Projet
*/
?>
<?php get_header(); ?>

  <div id="content-projet">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     <div class="content-headline">
      <h1 class="entry-headline"><span class="entry-headline-text"><?php the_title(); ?></span></h1>
<?php happenstance_get_breadcrumb(); ?>
    </div>
<?php happenstance_get_display_image_page(); ?>
    <div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages( array( 'before' => '<p class="page-link"><span>' . __( 'Pages:', 'happenstance' ) . '</span>', 'after' => '</p>' ) ); ?>  
<?php endwhile; endif; ?>

    </div>   
  </div> <!-- end of content -->

<?php if ($happenstance_options_db['happenstance_display_sidebar'] != 'Hide') { ?>

<?php } ?>

<?php get_footer(); ?>