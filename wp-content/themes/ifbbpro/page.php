<?php

/**
 * The template for displaying pages
 *
 */

get_header(); ?>




<?php get_template_part('template-parts/top-template'); ?>

<main>

    <div id="slide_down" class="page-container">


        <h1><?php wp_title(''); ?></h1>

        <section class="content">

            <?php
            wp_reset_query();
            while (have_posts()) : the_post();
                the_content();
            endwhile;
            ?>

        </section>
    </div>

</main>

<?php get_template_part('template-parts/bottom-template') ?>