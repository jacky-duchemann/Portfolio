<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<header class="site-header">
	<div class="site-header__logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <!-- Lien vers l'acceuil avec le logo -->
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Logo Jacky Duchemann" />
				</a>
            </div>
    <nav class="site-header__menu">
      <?php
      /**
      * Affiche le menu "Menu principal" enregistré au préalable.
      */
      wp_nav_menu([
          'theme_location' => 'main-menu',
          'container'      => false //On retire le conteneur généré par WP
      ]);
      ?>
    </nav>
</header>

