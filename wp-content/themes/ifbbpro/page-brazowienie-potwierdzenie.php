<?php
/**
 * Template Name: POTWIERDZENIE BRAZOWIENIE
 *
 */

get_header(); ?>

<main>

    <?php if (pll_current_language() == 'pl') {

    get_template_part('template-parts/PL/potwierdzenie-brazowienia');
   
    } else {
    
        get_template_part('template-parts/ENG/potwierdzenie-brazowienia');
    
} ?>


</main>
<?php get_footer(); ?>
