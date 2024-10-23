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

    <section class="hero-header fade-in" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . "/images/moon5.jpg" ); ?>');">
        <div class="hero-header__content">
            <div class="typewriter-container">
                <div class="typewriter-container__title">
                    <h1><i><strong>DUCHEMANN Jacky</strong></i></h1>
                </div>
            </div>
            <P>Developpeur Wordpress</p>
            <!-- Bouton CTA -->
            <a href="#contact" class="cta-button fade__in__section">| Contactez-moi |</a>
        </div>
    </section>

    <hr></hr>

    <section class="about-me">
        <!-- Texte introductif a propos de moi -->
        <!-- Bouton pour accéder la page CV -->
        
            <div class="about-me__text">
                <h2>À propos de moi</h2>
                <p>Je m'appelle Jacky Duchemann et je suis développeur web spécialisé dans la création de sites WordPress. Passionné par le code depuis plusieurs années, j'aime transformer des idées en sites fonctionnels et intuitifs.</p>
                <p>Avec plusieurs projets réalisés en PHP, JavaScript et WordPress, je maîtrise les outils modernes du développement web.</p>
                <p>Je suis actuellement à la recherche de nouveaux défis en tant que développeur freelance ou au sein d'une équipe dynamique.</p>
                <p>Pour me contacter, pour discuter d'un projet ou d'une opportunité.</p>

                <a href="#contact" class="cta-button2 fade__in__section">| Cliquez-ici |</a>
            </div>
            <div class="about-me__photo">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/jacky.jpg' ); ?>" alt="Photo de Jacky Duchemann">
            </div>
        
    </section>
    <!--<h2 class="title-tech">Technologies Utilisées</h2>
    <section class="technologies-carousel" id="technologies">
        
        <div class="swipe-container">
            <div class="swipe">
                <div class="swipe-wrapper">
                    <div class="swipe-item">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/competences/wordpress.png' ); ?>" alt="Wordpress" />
                    </div>
                    <div class="swipe-item">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/competences/css.png' ); ?>" alt="CSS" />
                    </div>
                    <div class="swipe-item">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/competences/node-sass.png' ); ?>" alt="Sass" />
                    </div>
                    <div class="swipe-item">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/competences/elementor.svg' ); ?>" alt="Elementor" />
                    </div>
                    <div class="swipe-item">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/competences/php.svg' ); ?>" alt="PHP" />
                    </div>
                    <div class="swipe-item">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/competences/javascript-1.svg' ); ?>" alt="Javascript" />
                    </div>
                    <!-- Ajoutez d'autres icônes ici 
                </div>
            </div>
        </div>
    </section>-->
    <section class="liste-projet" id="projets">
        <!-- Titre = Mes projets -->
        <!-- Loop des projets -> 2 colonnes -->
        <!-- Envie de réaliser un projet ? -> CTA comme sur le hero-header -->
        <hr></hr>
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
                    <!-- <h4> Langage(s) utilisé(es) </h4> -->
                    <!--<div class="langage">
                    <?php 
                    /*$langages = get_field('langage'); // Récupère les compétences sélectionnées
                    if ( $langages ) :
                        foreach ( $langages as $langage) :
                            echo '<p>' . esc_html( $langage ) . '</p>'; // Affiche chaque compétence
                        endforeach;
                    endif;*/
                    ?> 
                    </div> -->
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