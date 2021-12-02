<?php
/**
 * Customer processing order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-processing-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * @hooked WC_Emails::email_header() Output the email header
 */

foreach ( $order->get_items() as $item_id => $item ) {
    $name = $item->get_name();

        if (strpos($name, 'Bilet') !== false) {
            $lang = 'PL';
        }
            else {
                $lang == 'EN';
            }
}


if ($lang == 'PL') {
do_action( 'woocommerce_email_header', 'Potwierdzenie zakupu biletu', 'Potwierdzenie zakupu biletu' );
} else {    
do_action( 'woocommerce_email_header', 'Ticket purchase confirmation', 'Ticket purchase confirmation' );
}


       $order_subtotal = $order->get_subtotal();
       $order_subtotal = number_format( $order_subtotal, 2 );
       $order_id = $order->get_id();


 ?>

<style>
    p {
        color: black;
    }

    .im {
        color: black !important;
    }

</style>

<?php
if ($lang == 'PL') { ?>

<p><?php printf( esc_html__( 'Witaj %s,', 'woocommerce' ), esc_html( $order->get_billing_first_name() ) ); ?></p>
<p><?php printf( esc_html__( 'Dziękuję Ci za zakup biletu/biletów wejściowego na zawody CHAMPIONS CUP PRO QUALIFIER oraz Puchar Polski NPC.') ); ?></p>

<h3><?php printf( esc_html__( 'Twoje zamówienie:')); ?></h3>

<ul style="padding-left:0;"><?php foreach ( $order->get_items() as $item_id => $item ) { ?>
    <li style="color:black;"> <?php printf( esc_html__($item->get_name())); ?> </li>
    <?php } ?> </ul>

<p style="margin-bottom:0;"><b><?php printf( esc_html__($order->get_billing_first_name())) ?>
        <?php printf( esc_html__($order->get_billing_last_name())); ?></b></p>

<p style="margin-bottom:0;"><?php printf( esc_html__($order->get_billing_email())) ?></p>

<p style="margin-bottom:0;"><?php printf( esc_html__($order->get_billing_company())) ?></p>

<p style="margin-bottom:0;"><?php printf( esc_html__($order->get_billing_address_1())) ?>
    <?php printf( esc_html__($order->get_billing_address_2())) ?></p>

<p style="margin-bottom:0;"><?php printf( esc_html__($order->get_billing_postcode())) ?>
    <?php printf( esc_html__($order->get_billing_city())) ?></p>

<p style="margin-bottom:0;"><?php printf( esc_html__($order->get_billing_country())) ?></p>

<p><?php printf( esc_html__($order->get_billing_phone())) ?></p>

<p style="margin-bottom:0;"><b><?php printf( esc_html__( 'NUMER BILETU/BILETÓW: ' . $order_id)); ?></b></p>

<p><b><?php printf( esc_html__( 'O WARTOŚCI: ' . $order_subtotal . ' ZŁ')); ?> </b></p>





<?php } else { ?>




<p><?php printf( esc_html__( 'Hello %s,', 'woocommerce' ), esc_html( $order->get_billing_first_name() ) ); ?></p>
<p><?php printf( esc_html__( 'Thank you for purchasing the ticket/tickets for the CHAMPIONS CUP PRO QUALIFIER.') ); ?></p>


<h3><?php printf( esc_html__( 'Your order:')); ?></h3>

<ul style="padding-left:0;"><?php foreach ( $order->get_items() as $item_id => $item ) { ?>
    <li style="color:black;"> <?php printf( esc_html__($item->get_name())); ?> </li>
    <?php } ?> </ul>

<p style="margin-bottom:0;"><b><?php printf( esc_html__($order->get_billing_first_name())) ?>
        <?php printf( esc_html__($order->get_billing_last_name())) ?></b></p>

<p style="margin-bottom:0;"><?php printf( esc_html__($order->get_billing_email())) ?></p>

<p style="margin-bottom:0;"><?php printf( esc_html__($order->get_billing_company())) ?></p>

<p style="margin-bottom:0;"><?php printf( esc_html__($order->get_billing_address_1())) ?>
    <?php printf( esc_html__($order->get_billing_address_2())) ?></p>

<p style="margin-bottom:0;"><?php printf( esc_html__($order->get_billing_postcode())) ?>
    <?php printf( esc_html__($order->get_billing_city())) ?></p>

<p style="margin-bottom:0;"><?php printf( esc_html__($order->get_billing_country())) ?></p>

<p><?php printf( esc_html__($order->get_billing_phone())) ?></p>

<p style="margin-bottom:0;"><b><?php printf( esc_html__( 'TICKET/TICKETS NUMBER: ' . $order_id)); ?></b></p>
<p><b><?php printf( esc_html__( 'VALUE : ' . $order_subtotal . ' ZŁ')); ?> </b></p>
<?php }


/*
* @hooked WC_Emails::order_details() Shows the order details table.
* @hooked WC_Structured_Data::generate_order_data() Generates structured data.
* @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
* @since 2.5.0
*/
do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );


/**
* Show user-defined additional content - this is set in each email's settings.
*/
if ( $additional_content ) {
echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) );
}

/*
* @hooked WC_Emails::email_footer() Output the email footer
*/
do_action( 'woocommerce_email_footer', $email );
