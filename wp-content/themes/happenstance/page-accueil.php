<?php
/*
Template Name: Accueil
*/
?>
<?php get_header(); ?>
 
 
  <div id="content-accueil">
     <div class="content-headline">
      <h1 class="entry-headline"><span class="entry-headline-text"><?php the_title(); ?></span></h1>

    </div>

    <div class="entry-content">

<div class="p1 .col-xs-12 .col-md-12">
    <div class="img1 .col-xs-12 .col-md-4">
        <img src="<?php bloginfo('template_url'); ?>/img/p1.jpg">
    </div>
    
    <div class="texte1 .col-xs-12 .col-md-8">
       <h2>“La fierté que l’on peut en tirer ? <br/>Avoir conçu de A à Z une voiture solaire qui roule !”</h2>
    </div>
</div>
    
<div class="p2 .col-xs-12 .col-md-12">
    <div class="img2 .col-xs-12 .col-md-4 ">
        <img src="<?php bloginfo('template_url'); ?>/img/p2.jpg">
    </div>
    
    <div class="texte2 .col-xs-12 .col-md-8">
       <h1>Qui sommes nous</h1>
        <p> Le projet Scarlet s’inscrit dans le cadre de la formation Génie Électrique et Informatique Industrielle (GEII) visant à répondre aux attentes du monde industriel actuel et futur. <br/> Sa réalisation est assurée par les élèves du département GEII de la filière Énergie Électrique et Énergie Renouvelable de l'IUT1 Joseph Fourier. <br/> Une équipe de neuf élèves, encadrée par 5 professeurs, travaille actuellement sur le projet de voiture solaire, et ce pour une durée de deux ans. Réalisation du moteur, monitoring, panneaux et batteries sont donc à la charge des plus jeunes sous le regard expert des professeurs.  </p>
        
    </div>
</div>
    
<div class="p3 .col-xs-12 .col-md-12">
    <div class="img3 .col-xs-12 .col-md-4">
        <img src="<?php bloginfo('template_url'); ?>/img/p3.jpg">
    </div>
    
    <div class="texte3 .col-xs-12 .col-md-8">
       <h1>Que faisons nous</h1>
        <p> Nous souhaitons mettre au point la voiture solaire du futur, et non un énième prototype ne pouvant transporter qu’une seule personne. <br/> Notre but est de réaliser une voiture électrosolaire. Son autonomie atteindrait 600km, avec une vitesse sur route proche de celle des véhicules de particuliers. L’énergie est fournie par des batteries associées à des capteurs photovoltaïques. Une gestion intelligente permet des échanges avec le réseau électrique lors des heures de pointes ou les heures creuses.</p>
        
    </div>
</div>
    
<div class="p4 .col-xs-12 .col-md-12">
    <div class="img4 .col-xs-12 .col-md-4">
        <img src="<?php bloginfo('template_url'); ?>/img/p4.jpg">
    </div>
    
    <div class="texte4 .col-xs-12 .col-md-8">
       <h1>Pourquoi le faire </h1>
        <p>Le but ultime de ce projet est bien entendu à participer au World Solar Challenge mais ce n’est pas la seule motivation de l’équipe.<br/> Scarlet vise à promouvoir sa section et son projet pour que les promotions futures puissent contribuer à la notoriété de l’IUT et reprendre le flambeau. Participer à un maximum de compétition ne peut ainsi qu’être bénéfique pour approfondir les connaissances des étudiants.</p>
        
    </div>
</div>

    </div>   
  </div> <!-- end of content -->

<?php if ($happenstance_options_db['happenstance_display_sidebar'] != 'Hide') { ?>

<?php } ?>

<?php get_footer(); ?>