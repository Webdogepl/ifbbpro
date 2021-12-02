<?php 

/*
*
*   Template Name: Aktualnosci
*/

get_header(); ?>


<main>

    <?php get_template_part('template-parts/top-template'); ?>

    <section class="news-page">

        <h1><?php pll_e('Aktualności'); ?></h1>

        <?php
		if($lang!='en'){
		?>

        <img src="<?php bloginfo('template_directory'); ?>/img/zaproszenie2a.png" alt="Zaproszenie" style="display:block;margin:0 auto;width:auto;max-width:100%">
        <img src="<?php bloginfo('template_directory'); ?>/img/zaproszenie2b.png" alt="Zaproszenie" style="display:block;margin:0 auto 40px;width:auto;max-width:100%">
        <?php } ?>
        <div id="news">

            <?php $the_query = new WP_Query( 'posts_per_page=10' ); ?>


            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <div class="news-item">
                <a href="<?php the_permalink() ?>">
                    <div class="news-thumb"> <?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} 
?>
                    </div>

                    <p class="news-category"><?php the_category() ?></p>

                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

                    <p class="read-more"><a href="<?php the_permalink() ?>"><?php pll_e('Czytaj dalej'); ?></a></p>

            </div>

            <?php 
endwhile; 
wp_reset_postdata();
?>

        </div>


    </section>




</main>


<?php get_footer(); 
