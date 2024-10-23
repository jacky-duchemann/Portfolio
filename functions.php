<?php
function mon_theme_enfant_enqueue_styles() {
    // Enqueue du fichier style.css généré dans le dossier css a partir du style.scss
    wp_enqueue_style(
        'mon-theme-enfant-style', 
        get_stylesheet_directory_uri() . '/css/style.css', 
        array(), 
        filemtime( get_stylesheet_directory() . '/css/style.css' ) 
    );
}
add_action( 'wp_enqueue_scripts', 'mon_theme_enfant_enqueue_styles' );

function register_my_menu() {
    register_nav_menu( 'main-menu', __( 'Menu principal', 'text-domain' ) );
}
add_action( 'after_setup_theme', 'register_my_menu' );

function enqueue_swiper_assets() {
    // Enregistrement du fichier CSS de Swiper.js
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), '10.0.0');
    
    // Enregistrement du fichier JS de Swiper.js
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array('jquery'), '10.0.0', true);
    
    // Enregistrement de ton propre fichier JS pour le carrousel
    wp_enqueue_script('carrousel-js', get_stylesheet_directory_uri() . '/js/carrousel.js', array('swiper-js'), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');?>

<?php 
function enqueue_custom_script() {
    // Chemin vers le fichier script.js
    wp_enqueue_script(
        'custom-script', // Identifiant unique pour le script
        get_template_directory_uri() . '/js/script.js', // URL du script
        array(), // Dépendances (si besoin de jQuery, etc.)
        null, // Version (null pour désactiver la gestion des versions)
        true // Charger dans le footer (true) ou dans le header (false)
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');?>