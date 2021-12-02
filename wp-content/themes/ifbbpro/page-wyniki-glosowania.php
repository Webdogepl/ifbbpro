<?php
/**
 * Template Name: wyniki glosowania
 *
*/
get_header(); 



global $wpdb;    


?>





<?php get_template_part('template-parts/top-template'); ?>

<main>

    <div id="slide_down" class="page-container">

        <?php 
        
        $first_day_man = $wpdb->get_var("SELECT number FROM votes WHERE day = 1 && sex = 'm' GROUP BY number ORDER BY COUNT(*) DESC");
        $secound_day_man = $wpdb->get_var("SELECT number FROM votes WHERE day = 2 && sex = 'm' GROUP BY number ORDER BY COUNT(*) DESC");
        $third_day_man = $wpdb->get_var("SELECT number FROM votes WHERE day = 3 && sex = 'm' GROUP BY number ORDER BY COUNT(*) DESC");
        
        $first_day_woman = $wpdb->get_var("SELECT number FROM votes WHERE day = 1 && sex = 'k' GROUP BY number ORDER BY COUNT(*) DESC");
        $secound_day_woman = $wpdb->get_var("SELECT number FROM votes WHERE day = 2 && sex = 'k' GROUP BY number ORDER BY COUNT(*) DESC");
        $third_day_woman = $wpdb->get_var("SELECT number FROM votes WHERE day = 3 && sex = 'k' GROUP BY number ORDER BY COUNT(*) DESC");
        
        
        ?>

        <h3>Dzień pierwszy</h3>
        <p><b>Numer zawodnika z największą liczbą głosów:</b> <?php echo $first_day_man ?></p>
        <p><b>Numer zawodniczki z największą liczbą głosów: </b><?php echo $first_day_woman ?></p>
        <br>
        <h3>Dzień drugi</h3>
        <p><b>Numer zawodnika z największą liczbą głosów:</b> <?php echo $secound_day_man ?></p>
        <p><b>Numer zawodniczki z największą liczbą głosów: </b><?php echo $secound_day_woman ?></p>
        <br>
        <h3>Dzień trzeci</h3>
        <p><b>Numer zawodnika z największą liczbą głosów:</b> <?php echo $third_day_man ?></p>
        <p><b>Numer zawodniczki z największą liczbą głosów:</b> <?php echo $third_day_woman ?></p>

    </div>


</main>

<?php get_template_part('template-parts/bottom-template') ?>
