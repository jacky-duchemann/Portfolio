<!DOCTYPE html>
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

    <header class="hero-header fade-in" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . "/images/hero-header2.jpg" ); ?>');">
        <div class="hero-header__content">
            <h1><i>JACKY DUCHEMANN</i></h1>
            <P>Developpeur Wordpress</p>
            <!-- Bouton CTA -->
            <a href="#contact" class="cta-button">| Contactez-moi |</a>
        </div>
    </header>

    <section class="about-me">
        <!-- Texte introductif a propos de moi -->
        <!-- Bouton pour accéder la page CV -->
        
            <div class="about-me__text">
                <h2>À propos de moi</h2>
                <p>Je m'appelle Jacky Duchemann et je suis développeur web spécialisé dans la création de sites WordPress. Passionné par le code depuis plusieurs années, j'aime transformer des idées en sites fonctionnels et intuitifs.</p>
                <p>Avec plusieurs projets réalisés en PHP, JavaScript et WordPress, je maîtrise les outils modernes du développement web.</p>
                <p>Je suis actuellement à la recherche de nouveaux défis en tant que développeur freelance ou au sein d'une équipe dynamique.</p>
                <p>N'hésitez pas à me contacter pour discuter d'un projet ou d'une opportunité.</p>
            </div>
            <div class="about-me__photo">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/jacky-photo.jpg' ); ?>" alt="Photo de Jacky Duchemann">
            </div>
        
    </section>

    </section class="liste-projet">
        <!-- Titre = Mes projets -->
        <!-- Loop des projets -> 2 colonnes -->
        <!-- Envie de réaliser un projet ? -> CTA comme sur le hero-header -->
    </section>

    <?php 
        get_footer();
    ?>  
</body>
</html>