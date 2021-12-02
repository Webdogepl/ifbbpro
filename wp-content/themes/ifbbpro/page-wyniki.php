<?php
/**
* Template Name: WYNIKI ZAWODÓW
 */


get_header(); ?>


<main>

    <?php get_template_part('template-parts/top-template');
    
    if (pll_current_language() == 'pl') {
    get_template_part('template-parts/PL/wyniki-zawodow');
} else {
    get_template_part('template-parts/ENG/wyniki-zawodow');
}


    get_template_part('template-parts/bottom-template'); ?>

</main>

<?php get_footer(); ?>
