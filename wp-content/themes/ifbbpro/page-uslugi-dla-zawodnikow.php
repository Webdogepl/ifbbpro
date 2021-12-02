<?php 

/*
*
*   Template Name: Uslugi dla zawodnikow
*/

get_header(); ?>


<main>

    <?php get_template_part('template-parts/top-template'); ?>


    <section class="page-container services-template">

        <h1><?php wp_title('') ?></h1>

        <?php if (pll_current_language() == 'pl') {
    get_template_part('template-parts/PL/uslugi-dla-zawodnikow');
} else {
     get_template_part('template-parts/ENG/uslugi-dla-zawodnikow');   
}

            ?>

    </section>

</main>


<?php get_footer(); ?>
