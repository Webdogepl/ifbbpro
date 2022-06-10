<?php
/*
*
*
*  Template Name: FRONT PAGE
*
*
*
*
*/


get_header();

?>



<header class="main-top">

    <div class="langSwitcher">
        <h5>Language:</h5>
        <li class="langSwitcher__item"><a href="/"><img class="langSwitcher__img" src="/wp-content/themes/ifbbpro/polylang/pl_PL.png" alt="PL"></a></li>
        <li class="langSwitcher__item"><a href="/en"><img class="langSwitcher__img" src="/wp-content/themes/ifbbpro/polylang/en_US.png" alt="ENG"></a></li>
    </div>

    <div id="top-slider">



        <?php

        for ($i = 2; $i <= 9; $i++) {

        ?>

            <div class="top-slide-<?php echo $i ?> top-slide">

                <div class="toplogolewa"></div>
                <div class="toplogoprawa"></div>

                <img class="person" src="/wp-content/themes/ifbbpro/img/top-slider/zawodnicy/<?php echo $i ?>.png" alt="zawodnik">

                <div class="top-slide-content">
                    <div class="main-logo">
                        <img src="/wp-content/uploads/2021/08/top-slider-logo-<?php echo (rand(1, 17)) ?>.png" alt="logo">
                    </div>

                    <div class="slider__buttons">

                        <p class="slider__live-button mobile"><a href="<?php pll_e('/bilety-na-festiwal/'); ?>"><?php pll_e('BILETY'); ?></a></p>
                        <p class="slider__registration-button"><a href="<?php pll_e('/live-stream-page') ?>"><?php pll_e('RELACJA LIVE'); ?></a></p>

                        <p class="slider__ticket-button mobile"><a href="<?php pll_e('/pakiet-multimedialny-z-zawodow'); ?>"><?php pll_e('PAKIET MULTIMEDIALNY'); ?></a></p>


                    </div>
                </div>

            </div>

        <?php }
        ?>

    </div>

    <p class="left"><i class="fas fa-chevron-left"></i></p>
    <p class="right"><i class="fas fa-chevron-right"></i></p>

</header>
<main>

    <div class="frontpage-icons">

        <a href="mailto:office@ifbbpro.pl"><img src="/wp-content/themes/ifbbpro/img/szkolenia-online/mail-logo.png" alt="mail"></a>
        <a href="https://wa.me/48602650291"><img src="/wp-content/themes/ifbbpro/img/szkolenia-online/whatsapp-logo.png" alt="whatsapp"></a>
        <a href="http://m.me/robert.terminator.piotrkowicz"><img src="/wp-content/themes/ifbbpro/img/szkolenia-online/messenger-logo.png" alt="messenger"></a>
        <a href="https://instagram.com/npc_poland_ifbb_pro_league?igshid=30nkpwtnyyub"><img src="/wp-content/themes/ifbbpro/img/szkolenia-online/instagram.png" alt="instagram"></a>
        <a href="https://www.facebook.com/RobertPiotrkowicz"><img src="/wp-content/themes/ifbbpro/img/szkolenia-online/facebook.png" alt="facebook"></a>
        <a href="https://www.youtube.com/c/NPCIFBBPROPOLAND"><img src="/wp-content/themes/ifbbpro/img/szkolenia-online/youtube-logo.png" alt="youtube"></a>

    </div>

    <div class="frontpage__logotypes-top">

        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <img src="/wp-content/themes/ifbbpro/img/frontpage/logotypy-top/H_<?php echo $i ?>.png" alt="logotyp">

        <?php } ?>

    </div>


    <?php
    $title = pll_e('Partnerzy i sponsorzy Festiwalu');
    $args = array('section_title' => $title);
    get_template_part('template-parts/sponsors-logotypes', $args); ?>


    <?php get_template_part('/template-parts/frontpage-banners'); ?>


    <?php if (pll_current_language() == 'pl') {

        get_template_part('template-parts/PL/frontpage/frontpage-powitanie');
    } else {
        get_template_part('template-parts/ENG/frontpage/frontpage-powitanie');
    } ?>



    <?php if (pll_current_language() == 'pl') {

        get_template_part('template-parts/PL/frontpage/frontpage-calendar');
    } else {

        get_template_part('template-parts/ENG/frontpage/frontpage-calendar');
    } ?>


    <?php if (pll_current_language() == 'pl') {

        get_template_part('template-parts/PL/frontpage/frontpage-rejestracja');
    } else {

        get_template_part('template-parts/ENG/frontpage/frontpage-rejestracja');
    } ?>

    <div class="tnp tnp-subscription">

        <form method="post" action="http://ifbbpro.com.pl/?na=s" onsubmit="return newsletter_check(this)">
            <h4 class="newsletter-button"><?php pll_e('Zapisz się do newslettera'); ?></h4>
            <input type="hidden" name="nlang" value="">
            <div class="tnp-field tnp-field-firstname"><input class="tnp-firstname" type="text" name="nn" placeholder="IMIĘ"></div>
            <div class="tnp-field tnp-field-email"><input class="tnp-email" type="email" name="ne" placeholder="ADRES E-MAIL" required></div>
            <div class="tnp-field tnp-field-button"><input class="tnp-submit" type="submit" value="Zapisz się"></div>

            <div class="tnp-field tnp-field-privacy" style="display:block;"><label><input type="checkbox" name="ny" required class="tnp-privacy"><?php pll_e('Kontynuując zgadzasz się z'); ?>  <a target="_blank" href="http://ifbbpro.com.pl/polityka-prywatnosci/"><?php pll_e('polityką prywatności'); ?></a><?php pll_e(' strony'); ?></label></div>

        </form>
    </div>



    <section class="sponsors">
        <h3><?php pll_e('Sponsorzy i partnerzy festiwalu'); ?></h3>

        <div id="sponsors-slider" class="lazy-load">

            <?php get_template_part('template-parts/slider-template'); ?>

        </div>

    </section>

    <section class="timer">

        <div class="timer-overlay"></div>

        <div class="timer__left">

            <h4>DAYS TO THE NPC WORLDWIDE FESTIVAL:</h4>
            <div id="clock"></div>

        </div>

        <div class="timer__right">


        </div>

    </section>

    <section class="logotypes">
        <h3><?php pll_e('Partnerzy federacji NPC Worldwide & IFBB Professional League'); ?></h3>

        <div id="logotypes-slider">

            <a class="lazy-load" href="http://npcnewsonline.com/" target="_blank">
                <div><img src="/wp-content/uploads/2021/08/logotypy-slider1-1.jpg" alt="sponsor-logo"></div>
            </a>

            <a href="https://www.facebook.com/flexmagazine/" target="_blank">
                <div><img data-lazy="/wp-content/uploads/2021/08/logotypy-slider1-2.jpg" alt="sponsor-logo"></div>
            </a>

            <a href="https://pl-pl.facebook.com/MuscleandFitnessMag" target="_blank">
                <div><img data-lazy="/wp-content/uploads/2021/08/logotypy-slider1-3.jpg" alt="sponsor-logo"></div>
            </a>

            <a href="https://www.muscleandfitness.com/muscle-fitness-hers" target="_blank">
                <div><img data-lazy="/wp-content/uploads/2021/08/logotypy-slider1-4.jpg" alt="sponsor-logo"></div>
            </a>

            <a href="http://npcnewsonline.com/" target="_blank">
                <div><img data-lazy="/wp-content/uploads/2021/08/logotypy-slider1-5.jpg" alt="sponsor-logo"></div>
            </a>

            <a href="https://www.ifbbpro.com/" target="_blank">
                <div><img data-lazy="/wp-content/uploads/2021/08/logotypy-slider1-6.jpg" alt="sponsor-logo"></div>
            </a>

            <a href="https://mrolympia.com/" target="_blank">
                <div><img data-lazy="/wp-content/uploads/2021/08/logotypy-slider1-7.jpg" alt="sponsor-logo"></div>
            </a>

            <a href="https://mrolympia.com/" target="_blank">
                <div><img data-lazy="/wp-content/uploads/2021/08/logotypy-slider1-8.jpg" alt="sponsor-logo"></div>
            </a>

            <a href="https://www.ifbbpro-japan.com/contests/amateur-olympia-japan-2019/" target="_blank">
                <div><img data-lazy="/wp-content/uploads/2021/08/logotypy-slider1-9.jpg" alt="sponsor-logo"></div>
            </a>

            <a href="https://mrolympia.com/" target="_blank">
                <div><img data-lazy="/wp-content/uploads/2021/08/logotypy-slider1-10.jpg" alt="sponsor-logo"></div>
            </a>

            <a href="https://mrolympia.com/Amateur-Olympia" target="_blank">
                <div><img data-lazy="/wp-content/uploads/2021/08/logotypy-slider1-11.jpg" alt="sponsor-logo"></div>
            </a>

            <a href="https://generationiron.com/new-york-pro-2019-results/" target="_blank">
                <div><img data-lazy="/wp-content/uploads/2021/08/logotypy-slider1-12.jpg" alt="sponsor-logo"></div>
            </a>

            <a href="http://npcnewsonline.com/2019-ifbb-pittsburgh-pro-masters-championships-official-day-one-score-cards/553053/" target="_blank">
                <div><img data-lazy="/wp-content/uploads/2021/08/logotypy-slider1-13.jpg" alt="sponsor-logo"></div>
            </a>

            <a href="http://www.timgardnerproductions.com/" target="_blank">
                <div><img data-lazy="/wp-content/uploads/2021/08/logotypy-slider1-14.jpg" alt="sponsor-logo"></div>
            </a>

            <a href="http://www.musclecontest.com/" target="_blank">
                <div><img data-lazy="/wp-content/uploads/2021/08/logotypy-slider1-15.jpg" alt="sponsor-logo"></div>
            </a>

            <a href="https://www.europaexpo.com/events/dallas-npc-amateur-bodybuilding/" target="_blank">
                <div><img data-lazy="/wp-content/uploads/2021/08/logotypy-slider1-16.jpg" alt="sponsor-logo"></div>
            </a>

            <a href="https://spectrumfitnessproductions.com/" target="_blank">
                <div><img data-lazy="/wp-content/uploads/2021/08/logotypy-slider1-17.jpg" alt="sponsor-logo"></div>
            </a>

            <a href="http://npcmidwest.com/" target="_blank">
                <div><img data-lazy="/wp-content/uploads/2021/08/logotypy-slider1-18.jpg" alt="sponsor-logo"></div>
            </a>

            <a href="http://www.torontoprosupershow.com/" target="_blank">
                <div><img data-lazy="/wp-content/uploads/2021/08/logotypy-slider1-19.jpg" alt="sponsor-logo"></div>
            </a>

            <a href="http://www.vanproshow.com/" target="_blank">
                <div><img data-lazy="/wp-content/uploads/2021/08/logotypy-slider1-20.jpg" alt="sponsor-logo"></div>
            </a>




        </div>

    </section>

    <section class="front-footer">

        <div class="youtube-video-place embed-responsive embed-responsive-4by3" style="text-align:center; width:80%; margin:5% auto;" data-yt-url="https://www.youtube.com/embed/nKD7jIx0lHk?controls=0">
            <img style="text-align:center; width:100%; margin:5% auto;" src="/wp-content/themes/ifbbpro/img/frontpage/youtube.png" async class="play-youtube-video">
        </div>

        <div class="front-footer-block">
            <a href="https://mrolympia.com/Amateur-Olympia"><img src="<?php bloginfo('template_directory'); ?>/img/AmateurOlympia.jpg" alt="olympia"></a>
        </div>

        <div class="front-footer-block">
            <a href="https://arnoldamateur.com/"><img src="<?php bloginfo('template_directory'); ?>/img/ArnoldAmateur.jpg" alt="arnold"></a>
        </div>


        <div class="front-footer-block">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/festivalbanner3.jpg" alt="festival"></a>
        </div>

    </section>

</main>


<?php get_footer(); ?>