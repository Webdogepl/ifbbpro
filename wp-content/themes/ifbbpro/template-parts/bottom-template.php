<?php

/**
 * Template Name: partnerzy festiwalu
 *
 */
?>

<div class="tnp tnp-subscription">
    <form method="post" action="https://ifbbpro.com.pl/newsletter" onsubmit="return newsletter_check(this)">
        <h4 class="newsletter-button"><?php pll_e('Zapisz się do newslettera'); ?></h4>
        <input type="hidden" name="nlang" value="">
        <div class="tnp-field tnp-field-firstname"><input class="tnp-firstname" type="text" name="nn" placeholder="<?php pll_e('IMIĘ'); ?>"></div>
        <div class="tnp-field tnp-field-email"><input class="tnp-email" type="email" name="ne" placeholder="<?php pll_e('ADRES E-MAIL'); ?>" required></div>
        <div class="tnp-field tnp-field-button"><input class="tnp-submit" type="submit" value="<?php pll_e('Zapisz się'); ?>"></div>

        <div class="tnp-field tnp-field-privacy" style="display:block;"><label><input type="checkbox" name="ny" required class="tnp-privacy"><?php pll_e('Kontynuując zgadzasz się z  '); ?><a target="_blank" href="http://ifbbpro.com.pl/polityka-prywatnosci/"><?php pll_e('polityką prywatności'); ?></a> <?php pll_e('strony'); ?></label></div>

    </form>
</div>

<section class="sponsors">
    <h3><?php pll_e('Sponsorzy i partnerzy festiwalu'); ?></h3>

    <div id="sponsors-slider">

        <?php get_template_part('template-parts/slider-template'); ?>

    </div>

</section>

<section class="timer">

    <div class="timer-overlay"></div>

    <div class="timer__left">

        <h4><?php pll_e('DO FESTIWALU POZOSTAŁO:'); ?></h4>
        <div id="clock"></div>

    </div>

    <div class="timer__right">

        <p><?php pll_e('WARSZAWA'); ?></p>

    </div>

</section>


<?php get_footer(); ?>