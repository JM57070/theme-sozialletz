<?php get_header(); ?>

<main class="grid-container" style="padding-top: 1.5rem; padding-bottom: 2rem;">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content(); // Indispensable pour qu'Elementor puisse charger son éditeur
    endwhile;
    ?>
</main>

<?php get_footer(); ?>