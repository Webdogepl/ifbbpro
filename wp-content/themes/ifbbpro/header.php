<!DOCTYPE html <?php language_attributes(); ?>>
<!--[if IE 7]>
  <html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
  <html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title('') ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <meta property="og:type" content="sport" />
    <meta property="og:image" content="https://ifbbpro.com.pl/wp-content/uploads/2019/09/Edyta-Tamilewska-1200-x-630px-1.png" />

    <?php wp_head(); ?>
</head>

<body <?php body_class('ifbb'); ?>>


    <li style="display:none;"><a href="/"><img class="facebook-img" src="<?php echo wpse207895_featured_image(); ?>" alt="og"></a></li>


    <div class="lang-switcher">
        <li><a href="/"><img class="lang-switch" src="/wp-content/themes/ifbbpro/polylang/pl_PL.png" alt="PL"></a></li>
        <li><a href="/en"><img class="lang-switch" src="/wp-content/themes/ifbbpro/polylang/en_US.png" alt="ENG"></a></li>
    </div>

    <nav>


        <ul id="menu">

            <li class="mobile" id="insta"><a href="https://www.instagram.com/ifbb_pro_league/" target="_blank"><i class="fab fa-instagram"></i>IFBB PRO</a></li>
            <li class="mobile" id="insta"><a href="https://www.instagram.com/npcnewsonlineofficialpage/?hl=pl" target="_blank"><i class="fab fa-instagram"></i>NPC</a></li>

            <li class="mobile" id="facebook"><a href="https://www.facebook.com/RobertPiotrkowicz/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>

            <li id="home-button"><a href="<?php pll_e('/'); ?>">HOME</a></li>

            <li id="buy-ticket"><a href="<?php pll_e('/bilety-na-festiwal/'); ?>"><?php pll_e('BILETY'); ?></a></li>
            <li id="coop-button"><a href="<?php pll_e('/pakiet-multimedialny-z-zawodow'); ?>"><?php pll_e('PAKIET MULTIMEDIALNY'); ?></a></li>

            <li class="mobile" id="hamburger"><img src="/wp-content/themes/ifbbpro/img/hamburger.png" alt="hamburger"></li>

        </ul>

    </nav>


    <?php if (pll_current_language() == 'pl') {

        get_template_part('template-parts/PL/menu');
    } else {
        get_template_part('template-parts/ENG/menu');
    } ?>