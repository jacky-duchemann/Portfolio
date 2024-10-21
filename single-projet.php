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

    <div class="call-to-action">
            
    </div>
</main>

<?php get_footer(); ?>