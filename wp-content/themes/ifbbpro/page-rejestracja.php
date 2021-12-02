<?php
/**
* Template Name: REJESTRACJA ZBIORCZY TEMPLATE
 */


get_header(); ?>

<?php get_template_part('template-parts/top-template'); ?>



<section class="registration__page">


    <!--------------------------- SIERPIEŃ ------------------------------------>

    <?php if (is_page('rejestracja-sierpien-2021')) { ?>

    <div class="cognito">
        <div class="top-img"><img src="/wp-content/themes/ifbbpro/img/rejestracja/sierpien/6_new.jpg" alt="Rejestracja"></div>
        <div class="top-img"><img src="/wp-content/themes/ifbbpro/img/rejestracja/sierpien/6a.jpg" alt="Rejestracja"></div>

        <script src="https://www.cognitoforms.com/s/hLWZOxiSs0uV_r9wMdO40A"></script>
        <script>
            Cognito.load("forms", {
                id: "30"
            });

        </script>
    </div>


    <?php } else if (is_page('registration-august-2021')) { ?>

    <div class="cognito">
        <div class="top-img"><img src="/wp-content/themes/ifbbpro/img/rejestracja/sierpien/6.jpg" alt="Rejestracja"></div>
        <div class="top-img"><img src="/wp-content/themes/ifbbpro/img/rejestracja/sierpien/6a.jpg" alt="Rejestracja"></div>

        <script src="https://www.cognitoforms.com/s/hLWZOxiSs0uV_r9wMdO40A"></script>
        <script>
            Cognito.load("forms", {
                id: "29"
            });

        </script>
    </div>


    <?php } ?>



    <!-------------------- WRZESIEŃ 2021 ------------------------------>

    <?php if (is_page('rejestracja-wrzesien-2021')) { ?>


    <div class="cognito">
        <div class="top-img"><img src="/wp-content/themes/ifbbpro/img/rejestracja/wrzesien/18wrzesnia.png" alt="Rejestracja"></div>

        <div class="cognito">
            <script src="https://www.cognitoforms.com/s/hLWZOxiSs0uV_r9wMdO40A"></script>
            <script>
                Cognito.load("forms", {
                    id: "23"
                });

            </script>
        </div>
    </div>

    <?php } else if (is_page('registration-september-2021')) { ?>

 <div class="cognito">
        <div class="top-img"><img src="/wp-content/themes/ifbbpro/img/rejestracja/wrzesien/18wrzesnia.png" alt="Rejestracja"></div>

        <div class="cognito">
            <script src="https://www.cognitoforms.com/s/hLWZOxiSs0uV_r9wMdO40A"></script>
            <script>
                Cognito.load("forms", {
                    id: "24"
                });

            </script>
        </div>
    </div>

    <?php } ?>



    <!------------------ PAŹDZIERNIK 2021 ---------------------------->

    <?php if (is_page('rejestracja-pazdziernik-2021')) { ?>

    <div class="cognito">
        <div class="top-img"><img src="/wp-content/themes/ifbbpro/img/rejestracja/pazdziernik/new_6.jpg" alt="Rejestracja"></div>
        <div class="top-img"><img src="/wp-content/themes/ifbbpro/img/rejestracja/pazdziernik/new_7.jpg" alt="Rejestracja"></div>

        <script src="https://www.cognitoforms.com/s/hLWZOxiSs0uV_r9wMdO40A"></script>
        <script>
            Cognito.load("forms", {
                id: "31"
            });

        </script>
    </div>

    <?php } else if (is_page('registration-october-2021')) { ?>

    <div class="cognito">
        <div class="top-img"><img src="/wp-content/themes/ifbbpro/img/rejestracja/pazdziernik/new_6.jpg" alt="Rejestracja"></div>
        <div class="top-img"><img src="/wp-content/themes/ifbbpro/img/rejestracja/pazdziernik/new_7.jpg" alt="Rejestracja"></div>

        <script src="https://www.cognitoforms.com/s/hLWZOxiSs0uV_r9wMdO40A"></script>
        <script>
            Cognito.load("forms", {
                id: "32"
            });

        </script>
    </div>


    <?php } ?>

</section>

</div>

</main>

<?php get_footer(); ?>
