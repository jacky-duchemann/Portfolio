<!DOCTYPE html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/swipe/2.2.0/swipe.min.js"></script>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?> <!-- Charge les styles et scripts WordPress -->
    </head>
    <?php
        get_header(); // Inclut l'en-tête du site
    ?>
<body>

    <section class="hero-header fade-in" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . "/images/galaxy.webp" ); ?>');">
        <div class="hero-header__content">
            <div class="typewriter-container">
                <div class="typewriter-container__title">
                    <h1><i><strong>DUCHEMANN Jacky</strong></i></h1>
                </div>
            </div>
            <P>Developpeur Wordpress</p>
            <!-- Bouton CTA -->
            <a href="#contact" class="cta-button btn-contact fade__in__section">| Contactez-moi |</a>
        </div>
    </section>


    <section class="about-me" >
        <!-- Texte introductif a propos de moi -->
        
            <div class="about-me__text" id="a-propos" >
                <h2>À propos de moi</h2>
                <p>Je m'appelle Jacky Duchemann et je suis développeur web spécialisé dans la création de sites WordPress. Initialement diplômé en réseaux, j'ai choisi de me tourner vers le développement web, porté par une passion pour le code et le désir de transformer des idées en sites fonctionnels et intuitifs</p>
                <p>Ma transition vers le développement s’est concrétisée au travers d’une formation complète, au cours de laquelle j’ai réalisé divers projets en PHP, JavaScript et WordPress. Cette expérience m’a permis de maîtriser les bases du développement moderne tout en renforçant ma capacité à apprendre et m’adapter en permanence. Je tire également profit de mon expertise en réseau, qui m’offre une compréhension approfondie de l'architecture et des performances des sites web.</p>
                <p>Aujourd'hui, je suis à la recherche de nouveaux défis en tant que freelance ou au sein d'une équipe dynamique.</p>
                <p>Si vous avez un projet ou une opportunité à partager, n'hésitez pas à me contacter.</p>
            </div>
            <div class="about-me__photo">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/about-me.webp' ); ?>" alt="Photo de Jacky Duchemann">
            </div>
        
    </section>
    
    <section class="a-propos" >
    
    <div class="cv-sections" id="cv">
        <h2> Mon CV </h2>
        <div class="cv-section">
            <h3 class="cv-title" onclick="toggleSection(this)">Formation <span class="icone-toggle">+</span></h3>
            <div class="cv-content">
                <p>&diams; <strong>2007/2008 :</strong> Collège Joseph Hubert – Obtention du Brevet des collèges</p>
                <p>&diams; <strong>2010/2011 :</strong> Lycée Pierre Poivre – Obtention du Baccalauréat 
                (Scientifique option Science et vie de la terre)</p>
                <p>&diams;<strong> 2012/2013 :</strong> Lycée Pierre Poivre – Obtention du BTS SIO (Services Informatiques aux 
                organisations, option solutions d'infrastructure, systèmes et réseaux)<br><br>
                Cette formation permet d’acquérir des compétences dans trois domaines :<br><br>
                <strong>Support et mise à disposition de services informatiques :</strong> Garantir la disponibilité des services et répondre aux besoins des utilisateurs, tout en accompagnant la transformation numérique.<br><br>
                <strong>Cybersécurité :</strong> Protéger les infrastructures réseau et analyser les risques, en sécurisant les données et l'identité numérique de l'entreprise.<br><br>
                <strong>Administration des systèmes et réseaux :</strong> Concevoir, installer, tester et déployer des solutions d'infrastructure, tout en administrant et supervisant les réseaux.</p>
                <p>&diams; <strong>2024 - 13 février au 13 novembre :</strong> Formation de Développeur WordPress avec Openclassrooms.<br>
                Cette formation m'a permis d'apprendre à créer des sites web avec WordPress, en développant mes compétences en front-end et en personnalisant des thèmes et des plugins. 
                J'ai été formé à des technologies clés telles que WordPress, PHP, HTML, CSS, JavaScript, ainsi qu'à des outils comme Git & GitHub et Elementor.</p>
            </div>
        </div>
    
        <div class="cv-section">
            <h3 class="cv-title" onclick="toggleSection(this)">Expérience <span class="icone-toggle">+</span></h3>
            <div class="cv-content">
                <p>&diams; <strong>2012 - Mars à Avril :</strong> Stagiaire dans le collége Joseph Suacot<br><br>
                Stagiaire aux services de l'administrateur réseaux du collége, dans le cadre de mon BTS.<br>
                Projet de stage : Réinstallation(logiciel et physique), rénovation et remise en service de la salle informatique du collége</p>
                <p>&diams; <strong>2013 - Avril à Mai :</strong> Stagiaire dans l'association E.I.L.P Informatique<br><br>
                Stagiaire dans le cadre du BTS dans une assiociation de jeune en difficulté.<br><br>
                Installation matériel et logiciel d'un parc informatique, sous la supervisionde l'administrateurréseaux de l'association.<br><br>
                Accompagnement des utilisateurs sur les différents outils informatiques.</p>
                <p>&diams; <strong>Octobre 2013 à Juillet 2014 :</strong> Accompagnant scolaire à l'AJMD<br><br>
                Elargir les centres d'intérêt des jeunes par l'introduction à de nouvelles activités culturelles et à la construction de projets collectifs.<br><br>
                Proposer un accompagnement adapté aux besoins de chaque enfant.<br><br>
                Aide aux devoirs scolaires pour élève en difficulté d'apprentissage.</p>
                <p>&diams; <strong>Septembre 2015 à Août 2021 :</strong> Assistant d'éducation TICE employé par le lycée Paul Langevin<br><br>
                Aide à l'utilisation des nouvelles technologies aux enfants, de Petite Section jusqu'au CM2.<br><br>
                Aide au travail scolaire<br><br>
                Prise en charge de groupes d'éléves en difficulté.</p>
            </div>
        </div>
    </div>

    <section class="competences fade__in__section">
        <h2> Mes compétences </h2>

        <div class="competence">
            <span class="competence-name">HTML</span>
            <div class="competence-bar">
                <div class="competence-level" style="width: 90%;"></div>
            </div>
            <p>Structuration efficace de pages web en utilisant des balises sémantiques et les bonnes pratiques.</p>
        </div>
        <div class="competence">
            <span class="competence-name">SCSS  &rarr; CSS</span>
            <div class="competence-bar">
                <div class="competence-level" style="width: 80%;"></div>
            </div>
            <p>Création de mises en page modernes et responsives avec Flexbox et Grid. Animation CSS pour enrichir l'expérience utilisateur, en plus d'une bonne maîtrise de SCSS pour une gestion avancée du style.</p>
        </div>
        <div class="competence">
            <span class="competence-name">PHP</span>
            <div class="competence-bar">
                <div class="competence-level" style="width: 50%;"></div>
            </div>
            <p>Conception de fonctionnalités dynamiques pour WordPress, gestion des templates et custom post types. Code maintenable et respect des bonnes pratiques. </p>
        </div>
        <div class="competence">
            <span class="competence-name">Javascript</span>
            <div class="competence-bar">
                <div class="competence-level" style="width: 65%;"></div>
            </div>
            <p>Manipulation dynamique du DOM et création d'interactions riches.</p>
        </div>
        <div class="competence">
            <p> Prêt à discuter de votre projet ? Je suis à votre écoute !"</p>
            <a href="#contact" class="cta-button2 btn-contact fade__in__section">| Contactez-moi |</a>
        </div>
    </section>
</section>

    <section class="liste-projet" id="projets">
        <!-- Titre = Mes projets -->
        <!-- Loop des projets -> 2 colonnes -->
        <!-- Envie de réaliser un projet ? -> CTA comme sur le hero-header -->
        
        <h2 class="liste-projet__h2"> Mes projets </h2>
        
        <div class="liste-projet__grid">
            <?php
            $args = array (
                'post_type' => 'projet',
                'posts_per_page' => -1,
            );
            $projets = new WP_Query($args);
            
            if ($projets->have_posts()) :
                while ($projets->have_posts()) : $projets->the_post();
                    $image = get_the_post_thumbnail_url();
                    $titre = get_the_title();
                    $contexte = get_field('contexte_projet');
            ?>
                <a href="<?php the_permalink(); ?>" class="liste-projet__grid__project">
                    <img src="<?php echo esc_url($image);?>" alt="<?php echo esc_attr($titre);?>">
                    <h3><?php echo esc_html($titre);?></h3>
                    <p><?php echo esc_html($contexte) ; ?></p>
                </a>
                <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
        </div>

    </section>

    <?php 
        get_footer();
    ?>  
</body>
</html>