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
                <div><?php the_field('description_projet'); ?></div>
                </div>

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

                <div class="projet-detail__link">
                <h2>Voir le code sur GitHub</h2>
                <p><a href="<?php the_field('lien_github'); ?>" target="_blank">Accéder au projet sur GitHub</a></p>
                </div>
            </div>
        </article>
    <?php endwhile; endif; ?>

    <div class="call-to-action">
            
    </div>
</main>

<?php get_footer(); ?>