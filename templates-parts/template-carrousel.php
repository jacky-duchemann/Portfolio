<?php
// Récupération des images 
$image_1 = get_field('image-illustration-1');
$image_2 = get_field('image-illustration-2');
$image_3 = get_field('image-illustration-3');


if ($image_1 || $image_2 || $image_3) : // Vérifier si au moins une image est présente
?>
    <!-- Carrousel HTML -->
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

        <!-- Boutons de navigation (peut être rajouter si besoin)-->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Pagination ((peut être rajouter si besoin)) -->
        <div class="swiper-pagination"></div>
    </div>
<?php
endif; 
?>