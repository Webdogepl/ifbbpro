<?php

/**
 * Template Name: top-template
 *
 */

?>

<header class="main-top">

    <div id="top-slider" class="top-template">

        <?php

        for ($i = 1; $i < 9; $i++) {

        ?>

            <div class="top-slide-<?php echo $i ?> top-slide">

                <div class="toplogolewa"></div>
                <div class="toplogoprawa"></div>

                <img class="person" src="/wp-content/uploads/2021/08/<?php echo $i ?>.png" alt="zawodnik">


                <div class="top-slide-content">
                    <div class="main-logo">
                        <img src="/wp-content/uploads/2021/08/top-slider-logo-<?php echo (rand(1, 17)) ?>.png" alt="logo">
                    </div>

                    <div class="main-subtitle">
                        <h4><?php pll_e('ZMIANA DATY <br> WIĘCEJ INFORMACJI WKRÓTCE'); ?></h4>
                    </div>

                    <div class="slider__buttons">

                        <p class="slider__registration-button"><a href="<?php pll_e('/#front-register') ?>"><?php pll_e('REJESTRACJA'); ?></a></p>

                        <p class="slider__ticket-button mobile"><a href="<?php pll_e('/pakiet-multimedialny-z-zawodow'); ?>"><?php pll_e('PAKIET MULTIMEDIALNY'); ?></a></p>

                        <p class="slider__live-button mobile"><a href="/en/live-stream-zamowienie/"><?php pll_e('RELACJA LIVE'); ?></a></p>

                    </div>
                </div>

            </div>

        <?php } ?>

    </div>

    <p class="left"><i class="fas fa-chevron-left"></i></p>
    <p class="right"><i class="fas fa-chevron-right"></i></p>

</header>

<div class="frontpage-icons">

    <a href="mailto:office@ifbbpro.pl"><img src="/wp-content/themes/ifbbpro/img/szkolenia-online/mail-logo.png" alt="mail"></a>
    <a href="https://wa.me/48602650291"><img src="/wp-content/themes/ifbbpro/img/szkolenia-online/whatsapp-logo.png" alt="whatsapp"></a>
    <a href="http://m.me/robert.terminator.piotrkowicz"><img src="/wp-content/themes/ifbbpro/img/szkolenia-online/messenger-logo.png" alt="messenger"></a>
    <a href="https://instagram.com/npc_poland_ifbb_pro_league?igshid=30nkpwtnyyub"><img src="/wp-content/themes/ifbbpro/img/szkolenia-online/instagram.png" alt="instagram"></a>
    <a href="https://www.facebook.com/RobertPiotrkowicz"><img src="/wp-content/themes/ifbbpro/img/szkolenia-online/facebook.png" alt="facebook"></a>
    <a href="https://www.youtube.com/c/NPCIFBBPROPOLAND"><img src="/wp-content/themes/ifbbpro/img/szkolenia-online/youtube-logo.png" alt="youtube"></a>

</div>

<div class="frontpage__logotypes-top">

    <?php for ($i = 1; $i < 10; $i++) { ?>
        <img src="/wp-content/themes/ifbbpro/img/frontpage/logotypy-top/H_<?php echo $i ?>.png" alt="logotyp">

    <?php } ?>

</div>