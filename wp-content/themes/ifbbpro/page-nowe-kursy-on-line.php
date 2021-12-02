<?php 

/*
*
*   Template Name: Nowe Kursy Online
*/

get_header(); ?>


<main>

    <?php get_template_part('template-parts/top-template'); ?>

    <h2><?php wp_title('') ?></h2>

    <section class="page-container szkolenia szkolenia-online">

        <img src="<?php echo get_stylesheet_directory_uri();?>/img/szkolenia-online.jpeg" width=80% style="margin:0 10%;">

        <h1>27 CERTYFIKOWANYCH
            SZKOLEŃ ON-LINE <br>
            <span class="red">☆ CENY JUŻ OD 37 PLN ☆ <br>
                ☆ ZA JEDNO SZKOLENIE W PAKIECIE ☆</span></h1>


        <h3>Poniżej przedstawiam Ci lista szkoleń oraz pakietów szkoleń, które możesz zamówić. Proszę o zaznaczenie szkoleń, którymi jesteś zainteresowany. Bezpośrednio pod ich listą znajduje się podsumowanie twojego koszyka.</h3>

        <div class="szkolenia__form">
            <?php echo do_shortcode('[contact-form-7 id="2278" title="Formularz nowe kursy online"]') ?>
        </div>

    </section>

</main>


<?php get_footer(); ?>
