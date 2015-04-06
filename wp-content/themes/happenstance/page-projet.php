<?php
/*
Template Name: Projet
*/
?>
<?php get_header(); ?>
<div id="wrapper-content">
 <div id="main-content">
 
  <div id="content-projet">
     <div class="content-headline">
      <h1 class="entry-headline"><span class="entry-headline-text"><?php the_title(); ?></span></h1>

    </div>

    <div class="entry-content-projet">
   
   
<?php if (pll_current_language() == "fr"): ?>

        <div class="p1projet">
    <div class="img1projet">
        <img src="<?php bloginfo('template_url'); ?>/img/SunRise3.2.png">
    </div>
    
    <div class="texte1projet">
       <h1>Le projet Scarlet</h1>
        <p> Le projet Scarlet s’inscrit dans le cadre de la formation Génie Électrique et Informatique Industrielle (GEII) visant à répondre aux attentes du monde industriel actuel et futur. <br/> Sa réalisation est assurée par les élèves du département GEII de la filière Énergie Électrique et Énergie Renouvelable de l'IUT1 Joseph Fourier. <br/> Une équipe de neuf élèves, encadrée par 5 professeurs, travaille actuellement sur le projet de voiture solaire, et ce pour une durée de deux ans. Réalisation du moteur, monitoring, panneaux et batteries sont donc à la charge des plus jeunes sous le regard expert des professeurs.  </p>
    </div>
</div>
    
<div class="p2projet">
    <div class="img2projet ">
        <img src="<?php bloginfo('template_url'); ?>/img/p2.jpg">
    </div>
    
    <div class="texte2projet">
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
    
<div class="p3projet">
    <div class="img3projet">
        <img src="<?php bloginfo('template_url'); ?>/img/p3.jpg">
    </div>
    
    <div class="texte3projet">
       <h1>Le but</h1>
        <p> Le but ultime de ce projet est bien entendu à participer au WSC mais ce n’est pas la seule motivation de l’équipe. <br/> Scarlet vise à promouvoir sa section et son projet pour que les promotions futures puissent contribuer à la notoriété de l’IUT et reprendre le flambeau. Participer à un maximum de compétition ne peut ainsi qu’être bénéfique pour approfondir les connaissances des étudiants.</p>
        
    </div>
</div>

<?php else: ?>

<div class="p1projet">
    <div class="img1projet">
        <img src="<?php bloginfo('template_url'); ?>/img/SunRise3.2.png">
    </div>
    
    <div class="texte1projet">
       <h1>The scarlet project</h1>
        <p> The Scarlet project is part of the “Electrical Engineering and Computer Science (GEII)” training, which aims at meeting the current and future needs of the industry.This 2 years project will be carried out by the GEII students of the Joseph Fourier University. <br/> A team of 9 students, supervised by 5 teachers, is currently working of the solar car project. The making of the engine, monitoring, panels and batteries are therefore left to the students, guided by the expertise of teachers.  </p>
    </div>
</div>
    
<div class="p2projet">
    <div class="img2projet ">
        <img src="<?php bloginfo('template_url'); ?>/img/p2.jpg">
    </div>
    
    <div class="texte2projet">
       <h1> Achievement </h1>
        <p>  To carry out this project, some tasks are critical to the construction of the car. Here is an overview of the work to be done :  
            <br/>Designing the body structure
            <br/>Installing the battery pack
            <br/>Determining the dimension of the solar panel for optimal power
            <br/>Performing measurement and piloting tests on the the motor and inverter
            <br/>Making the monitoring to measure speed, battery consumption… On a tablet display
  </p>
        
    </div>
</div>
    
<div class="p3projet">
    <div class="img3projet">
        <img src="<?php bloginfo('template_url'); ?>/img/p3.jpg">
    </div>
    
    <div class="texte3projet">
       <h1>The aim</h1>
        <p> The ultimate goal of this project is to participate to the World Solar Challenge, but that is not the only motivation of the team. <br/> The Scarlet team aim at promoting their training and their project so that future promotions can contribute to the notoriety of the IUT, and take up the torch. Participating in a maximum of competitions is a great way to deepen students’ knowledge.</p>
        
    </div>
</div>

<?php endif; ?>
   
   
    

    </div>   
  </div> <!-- end of content -->

<?php if ($happenstance_options_db['happenstance_display_sidebar'] != 'Hide') { ?>

<?php } ?>

<?php get_footer(); ?>