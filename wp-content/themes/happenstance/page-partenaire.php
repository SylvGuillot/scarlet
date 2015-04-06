<?php
/*
Template Name: Partenaire
*/
?>
<?php get_header(); ?>
<div id="wrapper-content">
 <div id="main-content">
  <div id="content-partenaire">
     <div class="content-headline">
      <h1 class="entry-headline"><span class="entry-headline-text"><?php the_title(); ?></span></h1>

    </div>
    


<?php if (pll_current_language() == "fr"): ?>
    
<div class="p1partenaire">

    <div class="texte1partenaire">
        <p> Scarlet recherche activement de nouveaux partenaires désireux de s'impliquer dans un projet à la fois social et technologique. <br/> Ce projet ambitieux de réaliser la voiture de demain, 100% solaire et respectueuse de l’environnement, qui plus est pour le grand public, peut être également VOTRE projet. <br/></p>
        <h2>Soyez acteur du monde de demain !</h2>
        <p> <br/> Pour en savoir plus sur le projet et sur vos avantages fiscaux merci de nous contacter sur le formulaire prévu à cet effet.</p>
        <h2>Rejoignez-nous ! <a href="http://localhost/scarlet/contact/">Cliquez ici !</a></h2>
    </div>
</div>

<?php else: ?>
    
<div class="p1partenaire">

    <div class="texte1partenaire">
        <p> Scarlet is actively seeking new partners who want to get involved in a project that is both social and technological. <br/> This ambitious project to make the car of tomorrow 100% solar and environmentally friendly, and more importantly for the general public, can also be YOUR project. <br/></p>
        <h2>Take part in building the world of tomorrow!</h2>
        <p> <br/> To learn more about the project and your tax benefits, thank you for contacting us on the form provided for this purpose.</p>
        <h2> Join us ! <a href="http://localhost/scarlet/contact/"> Click here !</a></h2>
    </div>
</div>

<?php endif; ?>



<?php $loop = new WP_Query( array( 'post_type' => 'partenaire') );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
    <div class="content-headline-partenaire">
      <h1 class="entry-headline-partenaire "><span class="entry-headline-text"><?php the_title(); ?></span></h1>
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