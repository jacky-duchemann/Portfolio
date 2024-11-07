<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="main-title"><?php the_title(); ?></h1>
        
        <article class="projet-detail">
            <div class="projet-detail__thumbnail">
                <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail('large');
                } ?>
            </div>
            <!-- <div class="projet-detail__contenu">
                <?php /*the_content();*/ ?>
            </div> -->

            <div class="projet-detail__info">

                <div>
                <h2>Contexte du projet</h2>
                <p><?php the_field('contexte_projet'); ?></p>
                </div>

                <div>
                <h2>Description</h2>
                <p><?php the_field('description_projet'); ?></p>
                </div>
                <?php
                // Récupérer les images ACF
                $image_1 = get_field('image-illustration-1');
                $image_2 = get_field('image-illustration-2');
                $image_3 = get_field('image-illustration-3');

                if ($image_1 || $image_2 || $image_3) : ?>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <?php if ($image_1) : ?>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url($image_1['url']); ?>" alt="<?php echo esc_attr($image_1['alt']); ?>" />
                        </div>
                    <?php endif; ?>

                    <?php if ($image_2) : ?>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url($image_2['url']); ?>" alt="<?php echo esc_attr($image_2['alt']); ?>" />
                        </div>
                    <?php endif; ?>

                    <?php if ($image_3) : ?>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url($image_3['url']); ?>" alt="<?php echo esc_attr($image_3['alt']); ?>" />
                        </div>
                    <?php endif; ?>
                        <div class="swiper-slide">
                            <p> Prêt à discuter de votre projet ? Je suis à votre écoute !"</p>
                            <a href="#contact" class="cta-button2 btn-contact fade__in__section">| Contactez-moi |</a>
                        </div>
                    </div>
            </div>
                <?php endif; ?>
                    <!-- -->
                <div class="projet-detail__info__competences">
                <h2>Compétences acquises</h2>
                <ul>
                    <?php 
                    $competences = get_field('competences'); // Récupère les compétences sélectionnées
                    if ( $competences ) :
                        foreach ( $competences as $competence ) :
                            echo '<li>' . esc_html( $competence ) . '</li>'; // Affiche chaque compétence
                        endforeach;
                    endif;
                    ?>
                </ul>
                </div>
                
                <div class="projet-detail__info__link">
                <p><a class="cta-link" href="<?php the_field('lien_github'); ?>" target="_blank">Accéder au projet sur GitHub</a></p>
                </div>
            </div>
        </article>
    <?php endwhile; endif; ?>

    <div class="other-project">
    <h2>A voir aussi</h2>
    <div class="other-project__grid">
        <?php
        // Requête pour récupérer deux projets autres que le projet actuel
        $related_args = array(
            'post_type'      => 'projet',
            'posts_per_page' => 2,
            'post__not_in'   => array(get_the_ID()), // Exclure le projet actuel
            'orderby'        => 'rand' // Pour sélectionner aléatoirement d'autres projets
        );

        $related_query = new WP_Query($related_args);

        if ($related_query->have_posts()) :
            while ($related_query->have_posts()) : $related_query->the_post();
                $image = get_the_post_thumbnail_url(); // Récupérer l'image de couverture
                $title = get_the_title(); // Récupérer le titre du projet
                ?>
                
                <div class="other-project__item">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ($image): ?>
                            <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>">
                        <?php endif; ?>
                        <h3><?php echo esc_html($title); ?></h3>
                    </a>
                </div>

            <?php endwhile;
        else : ?>
            <p>Aucun autre projet trouvé.</p>
        <?php endif;
        
        wp_reset_postdata();
        ?>
    </div>
</div>
</main>

<?php get_footer(); ?>