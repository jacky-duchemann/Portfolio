<?php
/* Template Name: Page de Contact */
get_header();
?>

<main id="main" class="site-main">
    <section class="contact-section">
        <h1>Contactez-moi</h1>
        <p>Je suis disponible pour discuter de vos projets et répondre à vos questions.</p>
        
        <!-- Formulaire de Contact Form 7 -->
        <div class="contact-section__form">
            <?php echo do_shortcode('[contact-form-7 id="26246bd" title="Formulaire contact"]'); ?>
        </div>

        <!-- Informations de contact -->
        <div class="contact-section__info">
            <p>Email : jackyduchemann@hotmail.fr</p>
            <p>Téléphone : 06 92 01 24 12</p>
            <iframe src="https://www.google.com/maps/embed?... (ton lien Google Maps)" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
</main>

<?php get_footer(); // Inclut le footer du site ?>