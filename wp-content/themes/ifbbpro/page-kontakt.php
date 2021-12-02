<?php

/*
*
*   Template Name: Kontakt
*/

get_header(); ?>


<main>

    <?php get_template_part('template-parts/top-template'); ?>

    <h2><?php wp_title('') ?></h2>

    <section class="page-container contact-template">



        <div class="contact-form">
            <h3><?php pll_e('Masz pytania?') ?></h3>
            <h4><?php pll_e('Napisz do nas') ?></h4>
            <?php

            if (get_bloginfo('language') == 'en' || get_bloginfo('language') == 'en-US') {
                echo do_shortcode('[contact-form-7 id="766" title="Formularz 1_en"]');
            } else {
                echo do_shortcode('[contact-form-7 id="53" title="Formularz 1"]');
            }




            ?>
        </div>


        <div class="contact-tabs">

            <div class="contact-piotrkowicz">
                <img src="/wp-content/themes/ifbbpro/img/kontakt/piotrkowicz.png" alt="Robert Piotrkowicz">
                <div class="contact-tabs-desc">
                    <h3>Robert Piotrkowicz</h3>
                    <p><?php pll_e('Oficjalny Przedstawiciel i Promotor <br/> Federacji NPC Worldwide i IFBB <br/> Professional League w Polsce <br/> Prezes i założyciel Ligi Sportowej NPC Polska') ?></p>

                    <b><a href="https://wa.me/+48602650291" target="_blank">
                            <p class="contact-icon"> <i class="fab fa-whatsapp"></i> +48 602 650 291</p>
                        </a></b>
                    <b><a href="mailto:office@ifbbpro.pl" target="_blank">
                            <p class="contact-icon"> <i class="fab fas fa-envelope"></i> office@ifbbpro.pl</p>
                        </a></b>
                </div>
            </div>

            <div class="contact-tymczak">
                <img src="/wp-content/themes/ifbbpro/img/kontakt/tymczak.png" alt="Norbert Tymczak">
                <div class="contact-tabs-desc">
                    <h3>Norbert Tymczak</h3>
                    <p><?php pll_e('Trener i Koordynator Kadry Narodowej <br> Ligi Sportowej NPC Polska') ?></p>

                    <b><a href="https://wa.me/+48666086290" target="_blank">
                            <p class="contact-icon"> <i class="fab fa-whatsapp"></i>+48 666 086 290</p>
                        </a></b>
                    <b><a href="mailto:norbert.fenix@gmail.com" target="_blank">
                            <p class="contact-icon"> <i class="fab fas fa-envelope"></i>norbert.fenix@gmail.com</p>
                        </a></b>

                </div>
            </div>



            <div class="contact-gluchowski">
                <img src="/wp-content/themes/ifbbpro/img/kontakt/gluchowski.png" alt="Piotr Głuchowski">
                <div class="contact-tabs-desc">
                    <h3>Piotr Głuchowski</h3>
                    <p><?php pll_e('Trener Kadry Narodowej Mężczyzn <br/> Ligi Sportowej NPC Polska') ?></p>

                    <b>
                        <p class="contact-icon"> <i class="fab fa-whatsapp"></i> +48 698 051 141</p>
                    </b>
                    <b>
                        <p class="contact-icon"> <i class="fab fas fa-envelope"></i> p.gluchowski@biogenix-bx.com</p>
                    </b>
                </div>
            </div>



        </div>

    </section>

</main>


<?php get_footer(); ?>