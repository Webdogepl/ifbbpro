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


    <!--------------- KWIECIEŃ 2021 ------------------------>

    <?php if (is_page('potwierdzenie-kwiecien-2021')) {

        get_template_part('template-parts/PL/potwierdzenia/potwierdzenie-kwiecien-2021');
   
    } else if (is_page('confirmation-april-2021')) {
    
        get_template_part('template-parts/ENG/potwierdzenia/potwierdzenie-kwiecien-2021');
    
    } ?>


    <!--------------- MAJ 2021 ------------------------>

    <?php if (is_page('potwierdzenie-maj-2021')) {

        get_template_part('template-parts/PL/potwierdzenia/potwierdzenie-maj-2021');
   
    } else if (is_page('confirmation-may-2021')) {
    
        get_template_part('template-parts/ENG/potwierdzenia/potwierdzenie-maj-2021');
    
    } ?>

    <!--------------- MAJ 2021 ------------------------>

    <?php if (is_page('potwierdzenie-sierpien-2021')) {

        get_template_part('template-parts/PL/potwierdzenia/potwierdzenie-sierpien-2021');
   
    } else if (is_page('confirmation-august-2021')) {
    
        get_template_part('template-parts/ENG/potwierdzenia/potwierdzenie-sierpien-2021');
    
    } ?>

    <!--------------- WRZESIEŃ 2021 ------------------------>

    <?php if (is_page('potwierdzenie-wrzesien-2021')) {

        get_template_part('template-parts/PL/potwierdzenia/potwierdzenie-wrzesien-2021');
   
    } else if (is_page('confirmation-september-2021')) {
    
        get_template_part('template-parts/ENG/potwierdzenia/potwierdzenie-wrzesien-2021');
    
    } ?>

    <!--------------- PAŹDZIERNIK 2021 ------------------------>

    <?php if (is_page('potwierdzenie-pazdziernik-2021')) {

        get_template_part('template-parts/PL/potwierdzenia/potwierdzenie-pazdziernik-2021');
   
    } else if (is_page('confirmation-october-2021')) {
    
        get_template_part('template-parts/ENG/potwierdzenia/potwierdzenie-pazdziernik-2021');
    
    } ?>


</main>
<?php get_footer(); ?>
