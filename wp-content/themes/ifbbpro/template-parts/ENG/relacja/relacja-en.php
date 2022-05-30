<?php

$day = $args['day'];
$first_day_id = $args['first_day_id'];
$second_day_id = $args['second_day_id'];
$third_day_id = $args['third_day_id'];
$stream_on = $args['stream_on'];

global $woocommerce;


function check_is_live_bought(array $product_ids)
{
    $user_id = get_current_user_id();
    $current_user = wp_get_current_user();
    $customer_email = $current_user->email;


    foreach ($product_ids as $item) :
        if (wc_customer_bought_product($customer_email, $user_id, $item))
            return true;
    endforeach;

    return false;
}


/*--------------------------- IS LOGGED IN -----------------------*/
if (!is_user_logged_in()) { ?>

    <img src="/wp-content/themes/ifbbpro/img/relacja-live/tlo.jpeg" alt="tlo">

    <?php echo do_shortcode('[woocommerce_my_account]'); ?>

    <p class="cart-button"><a href="/live-stream-order">If you don't have access click here to buy <i class="fas fa-angle-double-right"></i></a></p>


    <?php } else {

    switch ($day) {


            /*-------------------------- DAY 1  ---------------------------*/

        case 1:
            if (check_is_live_bought($first_day_id) == false) { ?>

                <img src="/wp-content/themes/ifbbpro/img/relacja-live/tlo.jpeg" alt="tlo">

                <p class="cart-button"><a href="/live-stream-order">You don't have access to live stream NPC Debuts & International Cup of Poland NPC Regional Qualifier - click here to buy <i class="fas fa-angle-double-right"></i></a></p>

                <h3 style="text-align:center; color:black;">Live stream starts at:</h3>
                <p>NPC Debuts & International Cup of Poland NPC Regional Qualifier - 28th May 10:00 - 21:30 (10am - 9:30pm)</p>
                <p>Champions Cup NPC PRO Qualifier - 29th May 10:00 - 21:30 (10am - 9:30pm)</p>


                <p style="margin-top:20px">If you have any issues with Live Stream, please contact us on: <b>relacja@ifbbpro.pl</b> or WhatsApp: <a href="https://wa.me/+48510587327" target="_blank">+48 510 587 327</a> </p>


            <?php } else if ($stream_on == true) { ?>

                <?php /*---------------------- FRAME --------------------*/ ?>

                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/3P-jLRzpsF0?modestbranding=1" title="Video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


            <?php } else { ?>

                <img src="/wp-content/themes/ifbbpro/img/relacja-live/tlo.jpeg" alt="tlo">
                <h3 style="text-align:center; color:black;">Live stream starts at:</h3>
                <p>NPC Debuts & International Cup of Poland NPC Regional Qualifier - 28th May 10:00 - 21:30 (10am - 9:30pm)</p>
                <p>Champions Cup NPC PRO Qualifier - 29th May 10:00 - 21:30 (10am - 9:30pm)</p>


                <br><br>
                <p>Automatic refresh in:</p>
                <p id="live-stream-timer">3:00</p>

                <p class="live-issues">If you have any issues with Live Stream, please contact us on: <b>relacja@ifbbpro.pl</b> or WhatsApp: <a href="https://wa.me/+48510587327" target="_blank">+48 510 587 327</a> </p>

            <?php
            }
            break;


            /*-------------------------- DAY 2  ---------------------------*/

        case 2:
            if (check_is_live_bought($second_day_id) == false) { ?>

                <img src="/wp-content/themes/ifbbpro/img/relacja-live/tlo.jpeg" alt="tlo">

                <p class="cart-button"><a href="/live-stream-order">You don't have access to live stream from Champions Cup NPC PRO Qualifier - click here to buy <i class="fas fa-angle-double-right"></i></a></p>

                <p style="margin-top:20px">If you have any issues with Live Stream, please contact us on: <b>relacja@ifbbpro.pl</b></p>


            <?php } else if ($stream_on == true) { ?>

                <?php /*---------------------- FRAME --------------------*/ ?>

                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/68XPY14MmyU?modestbranding=1" title="Video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <?php } else { ?>

                <img src="/wp-content/themes/ifbbpro/img/relacja-live/tlo.jpeg" alt="tlo">
                <h3 style="text-align:center; color:black;">Live stream starts at:</h3>
                <p>Live ended</p>

                <p>Automatic refresh in:</p>
                <p id="live-stream-timer">3:00</p>

                <p class="live-issues">If you have any issues with Live Stream, please contact us on: <b>relacja@ifbbpro.pl</b> or WhatsApp: <a href="https://wa.me/+48510587327" target="_blank">+48 510 587 327</a></p>


            <?php }

            break;

            /*-------------------------- DAY 3  ---------------------------*/

        case 3:
            if (check_is_live_bought($third_day_id) == false) { ?>

                <img src="/wp-content/themes/ifbbpro/img/relacja-live/tlo.jpeg" alt="tlo">

                <p>Live stream from Champions Golden Cup (PRO Qualifier) will continue aprox. at 18:30 (6:30pm)</p>


                <p class="cart-button"><a href="/en/live-stream-zamowienie">You don't have access to live stream from Poland PRO SuperShow (Olympia Qualifier) - click here to buy <i class="fas fa-angle-double-right"></i></a></p>


                <p style="margin-top:20px">If you have any issues with Live Stream, please contact us on: <b>relacja@ifbbpro.pl</b></p>


            <?php } else if ($stream_on == true) { ?>


                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Lc6RTssG3FQ?modestbranding=1" title="Video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <?php } else { ?>

                <img src="/wp-content/themes/ifbbpro/img/relacja-live/tlo.jpeg" alt="tlo">
                <h3 style="text-align:center; color:black;">Live Stream starts at:</h3>
                <p>Champions Golden Cup (PRO Qualifier) - 24th October 10:00h - 15:00h & 18:15h - 22:00h (10am - 3pm & 6:15pm - 10pm)</p>
                <p>Poland PRO SuperShow (Olympia Qualifier) - 24th October 15:30 - 18:00 (3:30pm - 6pm)</p>

                <p>Automatic refresh in:</p>
                <p id="live-stream-timer">3:00</p>

                <p class="live-issues">If you have any issues with Live Stream, please contact us on: <b>relacja@ifbbpro.pl</b> or WhatsApp: <a href="https://wa.me/+48510587327" target="_blank">+48 510 587 327</a></p>


<?php }

            break;
    }
} ?>