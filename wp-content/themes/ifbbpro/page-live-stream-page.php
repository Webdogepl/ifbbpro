<?php
/*
* Template Name: Live stream page
*/


get_header();

?>


<?php

$stream_on = false;

$day = 1;

/* FIRST */
$first_day_id =  array('8028', '8040');

/* SECOND */
$second_day_id = array('8032', '8043');

/* OLIMPIA */
$third_day_id = array();


?>

<section class="live-stream-page">

    <?php

    if (pll_current_language() == 'pl') {
        get_template_part(
            'template-parts/PL/relacja/relacja-pl',
            'Relacja PL',
            array(
                'day' => $day,
                'first_day_id' => $first_day_id,
                'second_day_id' => $second_day_id,
                '$third_day_id' => $third_day_id,
                'stream_on' => $stream_on
            )
        );
    } else {
        get_template_part(
            'template-parts/ENG/relacja/relacja-en',
            'Relacja EN',
            array(
                'day' => $day,
                'first_day_id' => $first_day_id,
                'second_day_id' => $second_day_id,
                '$third_day_id' => $third_day_id,
                'stream_on' => $stream_on
            )
        );
    }

    ?>
</section>


<?php get_footer();   ?>