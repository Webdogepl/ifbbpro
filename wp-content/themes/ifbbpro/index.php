<?php

/**
 * The main template file
 *
 */

get_header();
?>

<section id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php get_header(); ?>
        <div id="content" class="narrowcolumn">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>


                    <div class="post">

                        <div class="post-thumbnail"> <?php if (has_post_thumbnail()) {
                                                            the_post_thumbnail();
                                                        }
                                                        ?>

                            <?php $post_id = get_the_ID();
                            $category_object = get_the_category($post_id);
                            $category_name = $category_object[0]->name;   ?>

                            <h3 class="post-category-title"><?php echo $category_name ?></h3>
                        </div>

                        <a href="<?php the_permalink() ?>">
                            <h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>

                            <small> <?php the_time('F j, Y') ?> </small>

                            <p><?php the_excerpt(); ?></p>
                        </a>

                    </div>

                <?php endwhile; ?>
                <div class="navigation">
                    <div class="alignleft">
                        <?php posts_nav_link('', '', '&laquo; Poprzednie wpisy') ?>
                    </div>
                    <div class="alignright">
                        <?php posts_nav_link('', 'Następne wpisy &raquo;', '') ?>
                    </div>
                </div>
            <?php else : ?>
                <h2 class="center">Nie znaleziono wpisów pasujących do podanych kryteriów</h2>
            <?php endif; ?>
        </div>

        <div class="floating-categories">

            <h3><a href="/blog">Wszystkie Kategorie</a></h3>
            <ul class="floating-category-list">
                <?php wp_list_categories(array(
                    'title_li' => '',
                    'hide_empty' => '0',
                )); ?>
            </ul>



        </div>

    </main>
</section>

<?php
get_footer();
