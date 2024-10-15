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