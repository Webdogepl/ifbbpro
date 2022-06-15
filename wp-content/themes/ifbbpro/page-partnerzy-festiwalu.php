<?php

/**
 * Template Name: partnerzy festiwalu
 *
 */

get_header(); ?>

<main>

    <?php get_template_part('template-parts/top-template') ?>

    <div id="slide_down" class="page-container">

        <section class="sponsors">
            <h1><?php pll_e('Sponsorzy i partnerzy'); ?></h1>

            <div class="top-sponsor">
                <h4><?php pll_e('Główny partner i tytułowy sponsor'); ?></h4>
                <a href="https://www.fasklep.pl/" target="_blank">
                    <div><img src="<?php bloginfo('template_directory'); ?>/img/partnerzy/22.png" alt="sponsor-logo" class="lazy"></div>
                </a>
            </div>

            <div class="top-sponsor">
                <h4><?php pll_e('Partner strategiczny i złoty sponsor'); ?></h4>
                <a href="https://www.xtremefitness.pl/ig/xfg/" target="_blank">
                    <div><img src="<?php bloginfo('template_directory'); ?>/img/partnerzy/min_xtreme.png" alt="sponsor-logo" class="lazy"></div>
                </a>
            </div>


            <div class="top-sponsor">
                <h4><?php pll_e('Główny partner i złoty sponsor'); ?></h4>
                <a href="https://www.panattasport.pl/media" target="_blank">
                    <div><img src="<?php bloginfo('template_directory'); ?>/img/panatta.png" alt="sponsor-logo" class="lazy"></div>
                </a>
            </div>




            <div class="top-sponsor">
                <h4><?php pll_e('Partner i sponsor'); ?></h4>
                <a href="https://www.najlepszepeptydy.com" target="_blank">
                    <div><img src="<?php bloginfo('template_directory'); ?>/img/partnerzy/biowellpolska.png" alt="sponsor-logo" class="lazy"></div>
                </a>
            </div>


            <div class="top-sponsor">
                <h4><?php pll_e('Partner i sponsor'); ?></h4>
                <a href="https://www.sklepzawodnika.pl" target="_blank">
                    <div><img src="<?php bloginfo('template_directory'); ?>/img/partnerzy/9.png" alt="sponsor-logo" class="lazy"></div>
                </a>
            </div>


            <h3><?php pll_e('PARTNERZY'); ?></h3>

            <div id="sponsors" class="sponsors-slider">


                <a href="https://mcer.pl/" target="_blank">
                    <div><img src="<?php bloginfo('template_directory'); ?>/img/partnerzy/mcer.png" alt="sponsor-logo" class="lazy"></div>
                </a>

                <a href="https://fiwe.pl/" target="_blank">
                    <div><img src="<?php bloginfo('template_directory'); ?>/img/partnerzy/fiwe-color2.png" alt="sponsor-logo" class="lazy"></div>
                </a>

                <a href="https://protanusa.com/" target="_blank">
                    <div><img src="<?php bloginfo('template_directory'); ?>/img/partnerzy/13.png" alt="sponsor-logo" class="lazy"></div>
                </a>

                <a href="https://steelfitusa.com/" target="_blank">
                    <div><img src="<?php bloginfo('template_directory'); ?>/img/partnerzy/14.png" alt="sponsor-logo" class="lazy"></div>
                </a>

                <a href="https://www.jantana.com/" target="_blank">
                    <div><img src="<?php bloginfo('template_directory'); ?>/img/partnerzy/12.png" alt="sponsor-logo" class="lazy"></div>
                </a>

                <a href="https://www.facebook.com/streetmeat.truck/" target="_blank">
                    <div><img src="<?php bloginfo('template_directory'); ?>/img/logon1.jpg" alt="sponsor-logo" class="lazy"></div>
                </a>

                <a href="https://www.fanutrition.pl/" target="_blank">
                    <div><img src="<?php bloginfo('template_directory'); ?>/img/partnerzy/26.png" alt="sponsor-logo" class="lazy"></div>
                </a>


                <a href="https://www.facebook.com/RobertPiotrkowicz/" target="_blank">
                    <div><img src="<?php bloginfo('template_directory'); ?>/img/partnerzy/4.png" alt="sponsor-logo" class="lazy"></div>
                </a>

                <a href="https://www.instagram.com/ifbbpropoland_official/" target="_blank">
                    <div><img src="<?php bloginfo('template_directory'); ?>/img/partnerzy/1.png" alt="sponsor-logo" class="lazy"></div>
                </a>

                <a href="https://www.instagram.com/npc_poland_ifbb_pro_league/" target="_blank">
                    <div><img src="<?php bloginfo('template_directory'); ?>/img/partnerzy/2.png" alt="sponsor-logo" class="lazy"></div>
                </a>


            </div>



        </section>
        <div class="partners-buttons">
            <a href="<?php pll_e('/wspolpraca-2') ?>" class="slider__buttons be-partner">
                <p><?php pll_e('Zostań partnerem Festiwalu') ?></p>
            </a>

            <a href="<?php pll_e('/wp-content/uploads/pakiety sponsorskie.pdf') ?>" target="_blank" class="slider__buttons be-partner sponsor-pack">
                <p><?php pll_e('Pakiety dla partnerów') ?></p>
            </a>

        </div>
    </div>
</main>
<?php get_footer(); ?>