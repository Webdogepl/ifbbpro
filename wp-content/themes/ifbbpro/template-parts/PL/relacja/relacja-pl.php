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

    <p class="cart-button"><a href="/en/live-stream-zamowienie">Jeśli nie masz jeszcze wykupionego dostępu kliknij tutaj <i class="fas fa-angle-double-right"></i></a></p>


    <?php } else {

    switch ($day) {


            /*-------------------------- REGIONAL QUALIFIER  ---------------------------*/

        case 1:
            if (check_is_live_bought($first_day_id) == false) { ?>

                <img src="/wp-content/themes/ifbbpro/img/relacja-live/tlo.jpeg" alt="tlo">

                <p class="cart-button"><a href="/en/live-stream-zamowienie">Nie masz wykupionego dostępu do relacji - aby zakupić przejdź tutaj <i class="fas fa-angle-double-right"></i></a></p>

                <h3 style="text-align:center; color:black;">Relacja rozpocznie się:</h3>
                <p>„Debiuty NPC” & „Poland Championships” - 23 kwietnia od 10:00 do 21:00</p>


                <p style="margin-top:20px">W przypadku problemów z odtwarzaniem prosimy o kontakt na adres: <b>relacja@ifbbpro.pl</b> lub WhatsApp: <a href="https://wa.me/+48510587327" target="_blank">+48 510 587 327</a> </p>


            <?php } else if ($stream_on == true) { ?>


                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/bXOxjdmtSBk?modestbranding=1" title="Video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


            <?php } else { ?>

                <img src="/wp-content/themes/ifbbpro/img/relacja-live/tlo.jpeg" alt="tlo">
                <h3 style="text-align:center; color:black;">Relacja zakończona. Retransmisje z zakończonych relacji są dostępne na <a href="/live-stream-zamowienie">tutaj</a></h3>

                <br><br>
                <p>Automatyczne przeładowanie za:</p>
                <p id="live-stream-timer">3:00</p>

                <p class="live-issues">W przypadku problemów z odtwarzaniem prosimy o kontakt na adres: <b>relacja@ifbbpro.pl</b> lub WhatsApp: <a href="https://wa.me/+48510587327" target="_blank">+48 510 587 327</a></p>

            <?php
            }
            break;


            /*-------------------------- PRO QUALIFIER  ---------------------------*/

        case 2:
            if (check_is_live_bought($second_day_id) == false) { ?>

                <img src="/wp-content/themes/ifbbpro/img/relacja-live/tlo.jpeg" alt="tlo">


                <h3>Trwają jeszcze konkurencje PRO Qualifier, po ich zakończeniu będzie dostępna relacja z Olympia Qualifier</h3>

                <p class="cart-button"><a href="/en/live-stream-zamowienie">Nie masz wykupionego dostępu do relacji Champions Golden Cup (PRO Qualifier) - aby zakupić przejdź tutaj <i class="fas fa-angle-double-right"></i></a></p>


                <p style="margin-top:20px">W przypadku problemów z odtwarzaniem prosimy o kontakt na adres: <b>relacja@ifbbpro.pl</b> lub WhatsApp: <a href="https://wa.me/+48510587327" target="_blank">+48 510 587 327</a> </p>


            <?php } else if ($stream_on == true) { ?>

                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/8XR9VtaiVYo?modestbranding=1" title="Video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <?php } else { ?>

                <img src="/wp-content/themes/ifbbpro/img/relacja-live/tlo.jpeg" alt="tlo">
                <h3 style="text-align:center; color:black;">Relacja rozpocznie się:</h3>
                <p>„Debiuty NPC” & „Poland Championships” - 23 kwietnia od 10:00 do 21:00</p>

                <p>Automatyczne przeładowanie za:</p>
                <p id="live-stream-timer">3:00</p>

                <p class="live-issues">W przypadku problemów z odtwarzaniem prosimy o kontakt na adres: <b>relacja@ifbbpro.pl</b> lub WhatsApp: <a href="https://wa.me/+48510587327" target="_blank">+48 510 587 327</a> </p>


            <?php }

            break;



            /*--------------------------------- OLYMPIA QUALIFIER --------------------------*/


        case 3:
            if (check_is_live_bought($third_day_id) == false) { ?>

                <img src="/wp-content/themes/ifbbpro/img/relacja-live/tlo.jpeg" alt="tlo">


                <h3>Dalszy ciąg relacji z Champions Golden Cup rozpocznie się około 18:15 - 19:00</h3>

                <p class="cart-button"><a href="/en/live-stream-zamowienie">Nie masz wykupionego dostępu do relacji Poland PRO SuperShow (Olympia Qualifier) - aby zakupić przejdź tutaj <i class="fas fa-angle-double-right"></i></a></p>



                <p style="margin-top:20px">W przypadku problemów z odtwarzaniem prosimy o kontakt na adres: <b>relacja@ifbbpro.pl</b> lub WhatsApp: <a href="https://wa.me/+48510587327" target="_blank">+48 510 587 327</a> </p>


            <?php } else if ($stream_on == true) { ?>

                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/bXOxjdmtSBk?modestbranding=1" title="Video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <?php } else { ?>

                <img src="/wp-content/themes/ifbbpro/img/relacja-live/tlo.jpeg" alt="tlo">
                <h3 style="text-align:center; color:black;">Relacja rozpocznie się:</h3>
                <p>Champions Golden Cup (PRO Qualifier) - 24 października 10:00 - 15:00 oraz 18:15 - 22:00</p>
                <p>Poland PRO SuperShow (Olympia Qualifier) - 24 października 15:30 - 18:00</p>

                <p>Automatyczne przeładowanie za:</p>
                <p id="live-stream-timer">3:00</p>

                <p class="live-issues">W przypadku problemów z odtwarzaniem prosimy o kontakt na adres: <b>relacja@ifbbpro.pl</b> lub WhatsApp: <a href="https://wa.me/+48510587327" target="_blank">+48 510 587 327</a> </p>


<?php }

            break;
    }
} ?>