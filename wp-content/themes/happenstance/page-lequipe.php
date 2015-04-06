<?php
/*
Template Name: Equipe
*/
?>
<?php get_header(); ?>

<div id="wrapper-content">
 <div id="main-content">
  <div id="content-equipe">
     <div class="content-headline">
      <h1 class="entry-headline"><span class="entry-headline-text"><?php the_title(); ?></span></h1>

    </div>
    

<?php if (pll_current_language() == "fr"): ?>

      <div class="p1equipe">
   <h2>Les origines</h2>
    <div class="img1equipe">
        <img src="<?php bloginfo('template_url'); ?>/img/SunRise3.2.png">
    </div>
    
    <div class="texte1equipe">
       
       <p> L’équipe s’est construite suite à la compétition au Bourget du lac en 2014. Cinq à l’origine l’équipe a accueilli ensuite quatre nouveaux membres, avec l’arrivée du projet scolaire puis personnel de participer à la course en Australie. <br/> Pourquoi Scarlet ? Pour la simple et bonne raison que la voiture solaire (Solar car électrique) proposée est un fantasme du grand public, un petit bijou qui se nourrit exclusivement de soleil. . Sa référence au terme écarlate représentant la couleur rouge vif correspond d’autant plus à cette compétition dans le désert d’Australie.
 </p>
    </div>
</div>

<?php else: ?>

      <div class="p1equipe">
   <h2>The origins</h2>
    <div class="img1equipe">
        <img src="<?php bloginfo('template_url'); ?>/img/SunRise3.2.png">
    </div>
    
    <div class="texte1equipe">
       
       <p> The team has been set up after a competition in Le Bourget du Lac in 2014. At this moment, the team consisted in 5 people, who where soon joined by 4 other students when the team decided to participate in the World Solar Challenge of 2017.<br/> Why “Scarlet”? Simply because the name refers to the nature of the vehicle: Solar car electric, and is as well a reference to 50’s pin-up drawn on vehicles. Furthermore, the color Scarlet suits well with the concept of a race in the Australian desert. </p>
    </div>
</div>

<?php endif; ?>




<?php $loop = new WP_Query( array( 'post_type' => 'membres') );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
    <div class="content-headline-equipe">
      <h1 class="entry-headline-equipe "><span class="entry-headline-text"><?php the_title(); ?></span></h1>
<?php happenstance_get_breadcrumb(); ?>
    </div>
    <div class="image-equipe">
<?php happenstance_get_display_image_page(); ?>
   </div>
    <div class="entry-content-equipe">
<?php the_content(); ?>
<?php wp_link_pages( array( 'before' => '<p class="page-link"><span>' . __( 'Pages:', 'happenstance' ) . '</span>', 'after' => '</p>' ) ); ?>  
<?php endwhile; endif; ?>
    </div>   
  </div> <!-- end of content -->
  <div class="sidebar-equipe">
<?php if ($happenstance_options_db['happenstance_display_sidebar'] != 'Hide') { ?>

</div>
<?php } ?>

<?php get_footer(); ?>