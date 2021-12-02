<?php
/**
 * Template Name: wspolpraca html
 *
*/
get_header(); ?>




<?php get_template_part('template-parts/top-template'); ?>

<style>
    .page-container h1 {
        color: white;
    }

    .page-container h2 {
        color: white;
    }

</style>
<main>

    <div id="slide_down" class="page-container partnership">
        <div style="margin:0 auto;max-width:800px;width:100%;">
            <h1><?php wp_title('') ?></h1>

            <h2><?php pll_e('Zapraszam do współpracy') ?></h2>
            <p><?php pll_e('pasjonatów sportów sylwetkowych oraz firmy zainteresowane współpracą przy organizacji i promocji Festiwalu Sportów Sylwetkowych i zawodów w kulturystyce i fitness federacji NPC Worldwide & IFBB Professional League w Polsce.') ?></p>

            <h2><?php pll_e('Zapraszam również do kontaktu </br> osoby prywatne i firmy') ?></h2>
            <p><?php pll_e('które chciałyby zostać partnerami,sponsorami lub ufundować nagrody rzeczowe lub wyjazdy na zawody dla startujących zawodników.') ?></p>

            <br>
            <p><?php pll_e('Pozdrawiam i do zobaczenia w lutym na Festiwalu!') ?></p>
            <br>

            <div class="partnership-bottom">

                <h2>Robert Piotrkowicz</h2>
                <p>IFBB PRO League Champion</p>

                <p><?php pll_e('Oficjalny Przedstawiciel i Promotor Federacji NPC Worldwide <br>i IFBB Professional League w Polsce') ?></p>
                <p><?php pll_e('Prezes i założyciel Ligi Sportowej NPC Polska') ?></p>
                <br>
                <p><a href="https://wa.me/+48602650291" target="_blank"><?php pll_e('Telefon/WhatsApp: +48 602 650 291') ?></a></p>
                <p><a href="mailto:office@ifbbpro.pl"><?php pll_e('Oficjalny mail: office@ifbbpro.pl') ?></a></p>
                <p><a href="mailto:amartus@tlen.pl"><?php pll_e('Prywatny mail: amartus@tlen.pl') ?></a></p>

            </div>

        </div>

    </div>

    <div class="partnership-contact-form">




        <div class="contact-form">
            <a href="<?php pll_e('/wp-content/uploads/pakiety sponsorskie.pdf') ?>" target="_blank" class="slider__buttons be-partner sponsor-pack">
                <p><?php pll_e('Zapoznaj się z pakietami <br> dla partnerów') ?></p>
            </a>


            <h3><?php pll_e('Jesteś zainteresowany współpracą?') ?></h3>
            <h4><?php pll_e('Zapytaj nas o szczegóły!') ?></h4>



            <?php 
            
            
            if(get_bloginfo('language')=='en' || get_bloginfo('language')=='en-US'){
            	echo do_shortcode('[contact-form-7 id="767" title="Formularz 1_copy_en"]');
				
			}else{
				  echo do_shortcode('[contact-form-7 id="538" title="Formularz 1_copy"]');
			}
			
            
			
            
            
            
           ?>


        </div>




    </div>

</main>

<?php get_template_part('template-parts/bottom-template') ?>
