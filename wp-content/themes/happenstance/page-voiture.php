<?php
/*
Template Name: Voiture
*/
?>
<?php get_header(); ?>

  <div id="content-voiture">
     <div class="content-headline">
      <h1 class="entry-headline"><span class="entry-headline-text"><?php the_title(); ?></span></h1>

    </div>
    
    
<?php if (pll_current_language() == "fr"): ?>

<div class="p1voiture">
   <h2>La voiture</h2>
    <div class="img1voiture">
        <img src="<?php bloginfo('template_url'); ?>/img/p1.jpg">
    </div>
    
    <div class="texte1voiture">
       
       <p> Scarlet réalise ses prototypes actuels dans un atelier de l’IUT où matériaux et documents sont à leur disposition. A raison de 6h réglementaires par semaine, l’équipe prend aussi sur son temps libre afin de faire avancer efficacement le projet. <br/> L’arrivée de nouvelles carcasses soulève toujours un vent d’excitation, car elle permet de s'entraîner, récupérer, bricoler, améliorer, réparer… bref de quoi basculer chaque jour un peu plus dans l’aspect pratique du projet.
 </p>
    </div>
</div>


<?php else: ?>

<div class="p1voiture">
   <h2>The car</h2>
    <div class="img1voiture">
        <img src="<?php bloginfo('template_url'); ?>/img/p1.jpg">
    </div>
    
    <div class="texte1voiture">
       
       <p> The current prototypes are manufactured in a workshop at the IUT, where materials and documents are available. At a rate of 6 hours per weeks, members of the team must take on their free time to make the project happen. <br/> The arrival of new car wrecks always causes a lot of excitment, because it allows the team to tinker, to fix, to improve… Which means to enter each day a little more in the practical aspect of the project. </p>
    </div>
</div>


<?php endif; ?>



<?php $loop = new WP_Query( array( 'post_type' => 'voitures') );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
    <div class="content-headline-voiture">
      <h1 class="entry-headline-voiture "><span class="entry-headline-text"><?php the_title(); ?></span></h1>
<?php happenstance_get_breadcrumb(); ?>
    </div>
    <div class="image-voiture">
<?php happenstance_get_display_image_page(); ?>
   </div>
    <div class="entry-content-voiture">
<?php the_content(); ?>
<?php wp_link_pages( array( 'before' => '<p class="page-link"><span>' . __( 'Pages:', 'happenstance' ) . '</span>', 'after' => '</p>' ) ); ?>  
<?php endwhile; endif; ?>
    </div>   
  </div> <!-- end of content -->
  <div class="sidebar-voiture">
<?php if ($happenstance_options_db['happenstance_display_sidebar'] != 'Hide') { ?>

</div>
<?php } ?>

<?php get_footer(); ?>