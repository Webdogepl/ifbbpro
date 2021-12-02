<?php

/**
 * The template for displaying all single posts
 *
 */

get_header();
?>

<?php get_template_part('template-parts/top-template'); ?>

<div class="page-container">

    <section id="primary" class="content-area">
        <main id="main" class="site-main">

            <div class="post-top">
                <div class="post-top-image">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    } ?>
                    <div class="overlay"></div>
                </div>
                <div class="post-top-title">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>

            <div class="single">
                <?php while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile;
                ?>
            </div>
        </main>
    </section>

</div>

<?php
get_footer();
