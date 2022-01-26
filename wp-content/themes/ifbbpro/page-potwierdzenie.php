<?php

/**
 * Template Name: POTWIERDZENIE ZBIORCZE TEMPLATE
 *
 */

get_header(); ?>

<main>

    <!-------------------- BRĄZOWIENIE -------------------------->

    <?php if (is_page('brazowienie-potwierdzenie/')) {

        get_template_part('template-parts/PL/potwierdzenia/potwierdzenie-brazowienia');
    } else if (is_page('tanning-confirmation')) {

        get_template_part('template-parts/ENG/potwierdzenia/potwierdzenie-brazowienia');
    } ?>


    <!--------------- KWIECIEŃ 2022 ------------------------>

    <?php if (is_page('potwierdzenie-kwiecien-2022')) {

        get_template_part('template-parts/PL/potwierdzenia/potwierdzenie-kwiecien-2022');
    } else if (is_page('confirmation-april-2022')) {
        get_template_part('template-parts/ENG/potwierdzenia/potwierdzenie-kwiecien-2022');
    } ?>


    <!--------------- MAJ 2022 ------------------------>

    <?php if (is_page('potwierdzenie-maj-2022')) {

        get_template_part('template-parts/PL/potwierdzenia/potwierdzenie-maj-2022');
    } else if (is_page('confirmation-may-2022')) {
        get_template_part('template-parts/ENG/potwierdzenia/potwierdzenie-maj-2022');
    } ?>

    <!---------------  10 WRZEŚNIA 2022  ------------------------>

    <?php if (is_page('potwierdzenie-10-wrzesnia-2022')) {

        get_template_part('template-parts/PL/potwierdzenia/potwierdzenie-10-wrzesnia-2022');
    } else if (is_page('confirmation-10-september-2022')) {

        get_template_part('template-parts/ENG/potwierdzenia/potwierdzenie-10-wrzesnia-2022');
    } ?>

    <!--------------- 18 WRZEŚNIA 2022 ------------------------>

    <?php if (is_page('potwierdzenie-18-wrzesnia-2022')) {

        get_template_part('template-parts/PL/potwierdzenia/potwierdzenie-18-wrzesnia-2022');
    } else if (is_page('confirmation-18-september-2022')) {

        get_template_part('template-parts/ENG/potwierdzenia/potwierdzenie-18-wrzesnia-2022');
    } ?>

    <!--------------- PAŹDZIERNIK 2021 ------------------------>

    <?php if (is_page('potwierdzenie-pazdziernik-2021')) {

        get_template_part('template-parts/PL/potwierdzenia/potwierdzenie-pazdziernik-2021');
    } else if (is_page('confirmation-october-2021')) {

        get_template_part('template-parts/ENG/potwierdzenia/potwierdzenie-pazdziernik-2021');
    } ?>


</main>
<?php get_footer(); ?>