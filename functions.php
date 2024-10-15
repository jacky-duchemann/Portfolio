<?php

function mon_theme_enfant_enqueue_styles() {
    // Enqueue du fichier style.css généré dans le dossier css a partir du style.scss
    wp_enqueue_style(
        'mon-theme-enfant-style', 
        get_stylesheet_directory_uri() . '/css/style.css', 
        array(), 
        filemtime( get_stylesheet_directory() . '/css/style.css' ) // Version basée sur la date de modification du fichier pour éviter la mise en cache
    );
}
add_action( 'wp_enqueue_scripts', 'mon_theme_enfant_enqueue_styles' );


function register_my_menu() {
    register_nav_menu( 'main-menu', __( 'Menu principal', 'text-domain' ) );
}
add_action( 'after_setup_theme', 'register_my_menu' );
?>