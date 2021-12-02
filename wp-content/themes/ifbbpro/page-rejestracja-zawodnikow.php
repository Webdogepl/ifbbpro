<?php
/**
 * Template Name: Rejestracja zawodnikow
 * 
 */
  ?>


<?php get_header(); ?>

<main>

    <?php get_template_part('template-parts/top-template'); ?>


    <?php if (pll_current_language() == 'pl') { ?>

    <section class="front-register" id="front-register">

        <h2> <?php pll_e('REJESTRACJA') ?></h2>

        <div class="register-flex" id="register-flex">

            <div class="main-competition1">
                <?php pll_e(' <h3>Puchar Polski NPC</h3>
           <h4>Juniorów</h4>') ?>
                <img src="/wp-content/themes/ifbbpro/img/logo/2Edycja/juniorzy.png" class="lazy">
                <a href=" <?php pll_e('/rejestracja-formularz') ?>" target="_blank">
                    <p> <?php pll_e('Rejestracja') ?></p>
                </a>
            </div>

            <div class="main-competition2">
                <?php pll_e('<h3>Puchar Polski NPC</h3>
           <h4>masters</h4>') ?>
                <img src="/wp-content/themes/ifbbpro/img/logo/2Edycja/masters.png" class="lazy">
                <a href=" <?php pll_e('/rejestracja-formularz') ?>" target="_blank">
                    <p> <?php pll_e('Rejestracja') ?></p>
                </a>
            </div>

            <div class="main-competition3">
                <?php pll_e(' <h3>Puchar Polski NPC</h3>
           <h4>seniorów - open</h4> '); ?>
                <img src="/wp-content/themes/ifbbpro/img/logo/2Edycja/seniorzy.png" class="lazy">
                <a href=" <?php pll_e('/rejestracja-formularz') ?>" target="_blank">
                    <p> <?php pll_e('Rejestracja') ?></p>
                </a>
            </div>

            <div class="main-competition4">
                <?php pll_e(' <h3>PUCHAR POLSKI</h3>
           <h4>DEBIUTANTÓW NPC</h4> '); ?>
                <img src="/wp-content/themes/ifbbpro/img/logo/2Edycja/debiutanci.png" class="lazy">
                <a href=" <?php pll_e('/rejestracja-formularz') ?>" target="_blank">
                    <p> <?php pll_e('Rejestracja') ?></p>
                </a>
            </div>

            <div class="main-competition5">
                <?php pll_e(' <h3>PUCHAR MISTRZÓW</h3>
           <h4>NPC PRO QUALIFIER</h4> '); ?>
                <img src="/wp-content/themes/ifbbpro/img/logo/2Edycja/mistrzowie.png" class="lazy">
                <a href=" <?php pll_e('/rejestracja-formularz') ?>" target="_blank">
                    <p> <?php pll_e('Rejestracja') ?></p>
                </a>
            </div>

        </div>

        <p class="tan-register"><a href=" <?php pll_e('/rejestracja-brazowienie') ?>"> <?php pll_e('Zapisz się na brązowienie') ?></a></p>

    </section>


    <?php } else { ?>


    <section class="front-register" id="front-register">

        <h2> <?php pll_e('REJESTRACJA') ?></h2>

        <div class="register-flex" id="register-flex">

            <div class="main-competition5">
                <?php pll_e(' <h3>CHAMPIONS CUP</h3>
           <h4>NPC PRO QUALIFIER</h4>
<h4>23 - 25 OCTOBER </h4> '); ?>
                <img src="/wp-content/themes/ifbbpro/img/logo/2Edycja/mistrzowie.png">
                <a href=" <?php pll_e('/registration-form') ?>" target="_blank">
                    <p> <?php pll_e('Rejestracja') ?></p>
                </a>
            </div>

            <div class="main-competition5">
                <?php pll_e(' <h3>TANNING SERVICE</h3> '); ?>
                <div class="tanning-block">
                    <img src="/wp-content/themes/ifbbpro/img/rejestracja/tanning-logo1.png">
                    <img src="/wp-content/themes/ifbbpro/img/rejestracja/tanning-logo2.png">
                    <img src="/wp-content/themes/ifbbpro/img/rejestracja/tanning-logo3.png">
                </div>
                <a href=" <?php pll_e('/rejestracja-brazowienie') ?>" target="_blank">
                    <p> <?php pll_e('Rejestracja') ?></p>
                </a>
            </div>

        </div>

    </section>


    <?php } ?>

</main>



<?php get_footer(); ?>
