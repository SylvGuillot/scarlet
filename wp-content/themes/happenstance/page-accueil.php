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

<?php if (pll_current_language() == "fr"): ?>

<div class="p1">
    <div class="img1">
        <img src="<?php bloginfo('template_url'); ?>/img/p1.jpg">
    </div>
    
    <div class="texte1">
       <h2>“La fierté que l’on peut en tirer ? <br/>Avoir conçu de A à Z une voiture solaire qui roule !”</h2>
    </div>
</div>
    
<div class="p2">
    <div class="img2">
        <img src="<?php bloginfo('template_url'); ?>/img/p2.jpg">
    </div>
    
    <div class="texte2">
       <h1>Qui sommes nous</h1>
        <p> Le projet Scarlet s’inscrit dans le cadre de la formation Génie Électrique et Informatique Industrielle (GEII) visant à répondre aux attentes du monde industriel actuel et futur. <br/> Sa réalisation est assurée par les élèves du département GEII de la filière Énergie Électrique et Énergie Renouvelable de l'IUT1 Joseph Fourier. <br/> Une équipe de neuf élèves, encadrée par 5 professeurs, travaille actuellement sur le projet de voiture solaire, et ce pour une durée de deux ans. Réalisation du moteur, monitoring, panneaux et batteries sont donc à la charge des plus jeunes sous le regard expert des professeurs.  </p>
        
    </div>
</div>
    
<div class="p3">
    <div class="img3">
        <img src="<?php bloginfo('template_url'); ?>/img/p3.jpg">
    </div>
    
    <div class="texte3">
       <h1>Que faisons nous</h1>
        <p> Nous souhaitons mettre au point la voiture solaire du futur, et non un énième prototype ne pouvant transporter qu’une seule personne. <br/> Notre but est de réaliser une voiture électrosolaire. Son autonomie atteindrait 600km, avec une vitesse sur route proche de celle des véhicules de particuliers. L’énergie est fournie par des batteries associées à des capteurs photovoltaïques. Une gestion intelligente permet des échanges avec le réseau électrique lors des heures de pointes ou les heures creuses.</p>
        
    </div>
</div>
    
<div class="p4">
    <div class="img4">
        <img src="<?php bloginfo('template_url'); ?>/img/p4.jpg">
    </div>
    
    <div class="texte4">
       <h1>Pourquoi le faire </h1>
        <p>Le but ultime de ce projet est bien entendu à participer au World Solar Challenge mais ce n’est pas la seule motivation de l’équipe.<br/> Scarlet vise à promouvoir sa section et son projet pour que les promotions futures puissent contribuer à la notoriété de l’IUT et reprendre le flambeau. Participer à un maximum de compétition ne peut ainsi qu’être bénéfique pour approfondir les connaissances des étudiants.</p>
        
    </div>
</div>


<?php else: ?>

<div class="p1">
    <div class="img1">
        <img src="<?php bloginfo('template_url'); ?>/img/p1.jpg">
    </div>
    
    <div class="texte1">
       <h2>“The thing in which we can take pride in this project? It is to have built a working solar vehicle from scratch!”</h2>
    </div>
</div>
    
<div class="p2">
    <div class="img2">
        <img src="<?php bloginfo('template_url'); ?>/img/p2.jpg">
    </div>
    
    <div class="texte2">
       <h1>Who we are</h1>
        <p> The Scarlet project is part of the “Electrical Engineering and Computer Science (GEII)” training, which aims at meeting the current and future needs of the industry. This 2 years project will be carried out by the GEII students of the Joseph Fourier University. <br/> A team of 9 students, supervised by 5 teachers, is currently working of the solar car project. The making of the engine, monitoring, panels and batteries are therefore left to the students, guided by the expertise of teachers.
  </p>
        
    </div>
</div>
    
<div class="p3">
    <div class="img3">
        <img src="<?php bloginfo('template_url'); ?>/img/p3.jpg">
    </div>
    
    <div class="texte3">
       <h1>What we do</h1>
        <p> We want to build the solar car of the future, and not just another prototype that can only carry one person. <br/> Our goal is to build an electrosolar car. Its autonomy would reach 600km (372 miles), at a speed close to the one of a production vehicle. The energy is provided by batteries linked to photovoltaic sensors.</p>
        
    </div>
</div>
    
<div class="p4">
    <div class="img4">
        <img src="<?php bloginfo('template_url'); ?>/img/p4.jpg">
    </div>
    
    <div class="texte4">
       <h1>Why we do it </h1>
        <p>The ultimate goal of this project is to participate to the World Solar Challenge, but that is not the only motivation of the team.<br/> The Scarlet team aim at promoting their training and their project so that future promotions can contribute to the notoriety of the IUT, and take up the torch. Participating in a maximum of competitions is a great way to deepen students’ knowledge.</p>
        
    </div>
</div>

<?php endif; ?>





    </div>   
  </div> <!-- end of content -->

<?php if ($happenstance_options_db['happenstance_display_sidebar'] != 'Hide') { ?>

<?php } ?>

<?php get_footer(); ?>