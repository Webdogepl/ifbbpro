<?php
/**
 * Template Name: RELACJA LIVE
 * 
 */
  ?>

<?php get_header(); ?>



<?php get_template_part('template-parts/top-template') ?>





<div class="page-container live-video-page">

    <h1><?php echo wp_title('') ?></h1>

    <?php
    echo apply_filters('the_content', $post->post_content); 
 ?>

    <div class="vote-sponsors">
        <h3><?php pll_e('RELACJA JEST MOŻLIWA DZIĘKI NASZYM SPONSOROM:')?></h3>


        <figure>
            <img src="<?php echo get_template_directory_uri() . '/img/logo/sklepzawodnika.png'?>" alt="sklep zawodnika">
            <figcaption><?php pll_e('ZŁOTY SPONSOR')?></figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() . '/img/logo/22.png'?>" alt="FA">
            <figcaption><?php pll_e('ZŁOTY SPONSOR')?></figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() . '/img/panatta.png'?>" alt="panatta">
            <figcaption><?php pll_e('PLATYNOWY SPONSOR')?></figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() . '/img/logo/extreme-fitness-gyms.png'?>" alt="xtreme fitness gyms">
            <figcaption><?php pll_e('PARTNER STRATEGICZNY')?></figcaption>
        </figure>

    </div>

</div>

<h3><?php pll_e('PARTNERZY I SPONSORZY FEDERACJI NPC WORLDWIDE POLSKA ORAZ FESTIWALU NPC:')?></h3>

<img class="scianka" src="<?php echo get_template_directory_uri() . '/img/scianka-relacja-live.png'?>" alt="sponsorzy">


</div>

<?php
    
    get_template_part('template-parts/bottom-template');
        
        get_footer(); ?>
