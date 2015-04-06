<?php
/*
Template Name: Voiture
*/
?>
<?php get_header(); ?>
 
 
  <div id="content-projet">
     <div class="content-headline">
      <h1 class="entry-headline"><span class="entry-headline-text"><?php the_title(); ?></span></h1>

    </div>

    <div class="entry-content">

<div class="p1projet .col-xs-12 .col-md-12">
    <div class="img1projet .col-xs-12 .col-md-4">
        <img src="<?php bloginfo('template_url'); ?>/img/SunRise2.png">
    </div>
    
    <div class="texte1projet .col-xs-12 .col-md-8">
       <h1>En quoi consiste ce projet</h1>
        <p> Le projet Scarlet s’inscrit dans le cadre de la formation Génie Électrique et Informatique Industrielle (GEII) visant à répondre aux attentes du monde industriel actuel et futur. <br/> Sa réalisation est assurée par les élèves du département GEII de la filière Énergie Électrique et Énergie Renouvelable de l'IUT1 Joseph Fourier. <br/> Une équipe de neuf élèves, encadrée par 5 professeurs, travaille actuellement sur le projet de voiture solaire, et ce pour une durée de deux ans. Réalisation du moteur, monitoring, panneaux et batteries sont donc à la charge des plus jeunes sous le regard expert des professeurs.  </p>
    </div>
</div>
    
<div class="p2projet .col-xs-12 .col-md-12">
    <div class="img2projet .col-xs-12 .col-md-4 ">
        <img src="<?php bloginfo('template_url'); ?>/img/p2.jpg">
    </div>
    
    <div class="texte2projet .col-xs-12 .col-md-8">
       <h1> La réalisation </h1>
        <p> Pour réaliser à bien ce projet, certaines tâches sont capitales à la réalisation de la voiture. Voici un aperçu du travail à effectuer : 
            <br/>Définition de la structure de la carrosserie
            <br/>Installation du pack batterie
            <br/>Dimension des panneaux photovoltaïques pour une puissance optimale
            <br/>Mesures et tests de pilotage sur le moteur et le variateur
            <br/>Monitoring pour mesure de vitesse, consommation de la batterie, affichage sur tablette
  </p>
        
    </div>
</div>
    
<div class="p3projet .col-xs-12 .col-md-12">
    <div class="img3projet .col-xs-12 .col-md-4">
        <img src="<?php bloginfo('template_url'); ?>/img/p3.jpg">
    </div>
    
    <div class="texte3projet .col-xs-12 .col-md-8">
       <h1>Le but</h1>
        <p> Le but ultime de ce projet est bien entendu à participer au WSC mais ce n’est pas la seule motivation de l’équipe. <br/> Scarlet vise à promouvoir sa section et son projet pour que les promotions futures puissent contribuer à la notoriété de l’IUT et reprendre le flambeau. Participer à un maximum de compétition ne peut ainsi qu’être bénéfique pour approfondir les connaissances des étudiants.</p>
        
    </div>
</div>
    

    </div>   
  </div> <!-- end of content -->

<?php if ($happenstance_options_db['happenstance_display_sidebar'] != 'Hide') { ?>

<?php } ?>

<?php get_footer(); ?>