<?php

/**
 * Template Name: BILETY
 */


get_header(); ?>

<?php WC()->cart->empty_cart();  ?>


<main>

    <?php get_template_part('template-parts/top-template'); ?>

    <?php echo get_bloginfo('url') ?>

    <?php if (is_page('6339')) { ?>


        <div class="page-container tickets-page">



            <h1><?php wp_title('') ?></h1>

            <div class="tickets tickets-en-pl">
                <p class="cart-button"><a href="/cart">Zobacz koszyk</a></p>

                <p class="cart-button"><a href="/harmonogram-zawodow-schedule" target="_blank">Harmonogram i miejsce zawodów</a></p>

                <?php add_filter('custom_menu_order', '__return_true'); ?>

                <?php

                WC()->cart->empty_cart();


                echo do_shortcode('[products columns="1" orderby="menu_order" order="desc" category="bilety-en-pl"]');  ?>


                <p class="cart-button"><a href="/cart/">Zobacz koszyk</a></p>

                <p class="tickets-info">Bilety będą również dostępne w wyższej cenie w dniu zawodów na hali w kasie biletowej. Jeśli masz problem z zakupem biletów skontaktuj się z nami pod adresem help@ifbbpro.com.pl</p>

            </div>

        </div>





    <?php } else { ?>



        <div class="page-container tickets-page tickets-eng">


            <h1><?php wp_title('') ?></h1>

            <div class="tickets">

                <p class="cart-button"><a href="/cart"><?php pll_e('Zobacz koszyk') ?></a></p>

                <p class="cart-button"><a href="<?php pll_e('/harmonogram-zawodow-schedule') ?>" target="_blank"><?php pll_e('Harmonogram i miejsce zawodów') ?></a></p>

                <?php add_filter('custom_menu_order', '__return_true'); ?>

                <?php

                WC()->cart->empty_cart();


                echo do_shortcode('[products columns="1" orderby="menu_order" order="desc" category="bilety-en"]');  ?>



                <p class="cart-button"><a href="/cart/"><?php pll_e('Zobacz koszyk') ?></a></p>

                <p class="tickets-info">Tickets will be available also in higher price on Festival venue. If you have any problem with buying ticket, please contact us at help@ifbbpro.com.pl</p>

            </div>

        </div>





    <?php } ?>

</main>

<?php get_footer(); ?>