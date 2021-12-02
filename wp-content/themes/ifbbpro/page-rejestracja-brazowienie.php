<?php
/**
* Template Name: REJESTRACJA BRAZOWIENIE
 */


get_header(); ?>

<main class="tanning-page">

    <?php get_template_part('template-parts/top-template') ?>


    <?php if (pll_current_language() == 'pl') { ?>


    <div class="cognito">

        <div class="register-tanning__top">
            <img src="/wp-content/themes/ifbbpro/img/rejestracja/tanning-logo1.png" alt="logo">
            <img src="/wp-content/themes/ifbbpro/img/rejestracja/tanning-logo2.png" alt="logo">
            <img src="/wp-content/themes/ifbbpro/img/rejestracja/tanning-logo3.png" alt="logo">
        </div>

        <script src="https://www.cognitoforms.com/s/hLWZOxiSs0uV_r9wMdO40A"></script>
        <script>
            Cognito.load("forms", {
                id: "4"
            });

        </script>
    </div>

    <?php } else { ?>


    <div class="cognito">

        <div class="register-tanning__top">
            <img src="/wp-content/themes/ifbbpro/img/rejestracja/tanning-logo1.png" alt="logo">
            <img src="/wp-content/themes/ifbbpro/img/rejestracja/tanning-logo2.png" alt="logo">
            <img src="/wp-content/themes/ifbbpro/img/rejestracja/tanning-logo3.png" alt="logo">
        </div>

        <script src="https://services.cognitoforms.com/s/hLWZOxiSs0uV_r9wMdO40A"></script>
        <script>
            Cognito.load("forms", {
                id: "9"
            });

        </script>
    </div>


    <?php } ?>
    <?php get_footer(); ?>
