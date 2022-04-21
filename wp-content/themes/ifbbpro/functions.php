<?php

add_theme_support('woocommerce');

function shape_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('min-styles', get_template_directory_uri() . '/style.min.css');
}
add_action('wp_enqueue_scripts', 'shape_styles');

function shape_scripts()
{
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/min/main.min.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'shape_scripts');

/*------------------ REMOVE ASSETS -----------------------*/

function smartwp_remove_wp_block_library_css()
{
    if (is_front_page()) {

        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('wp-block-library-theme');
        wp_dequeue_style('wc-block-style');
        wp_dequeue_style('woocommerce-layout');
        wp_dequeue_style('woocommerce-smallscreen');
        wp_dequeue_style('woocommerce-general');
    }
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);


remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);

/*------------------ PRODUCT THUMBNAIL -----------------------*/
function wpse207895_featured_image()
{
    //Execute if singular
    if (is_singular()) {

        $id = get_queried_object_id();

        // Check if the post/page has featured image
        if (has_post_thumbnail($id)) {

            // Change thumbnail size, but I guess full is what you'll need
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'full');

            $url = $image[0];
        } else {

            //Set a default image if Featured Image isn't set
            $url = '';
        }
    }

    return $url;
}




/*------------------ PRODUCT EXCERPT -----------------------*/
function cloudways_short_des_product()
{
    the_excerpt();
}




/*------------------ CHANGE SUBJECT IN CONFIRMATION EMAIL -----------------------*/
function change_admin_email_subject($subject, $order)
{
    global $woocommerce;

    $blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);

    foreach ($order->get_items() as $item_id => $item) {
        $getname = $item->get_name();
        $name = strtolower($getname);

        if (strpos($name, 'Bilet') !== false) {
            $subject = 'Potwierdzenie zakupu biletu';
        } else if (strpos($name, 'ticket') !== false) {
            $subject = 'Ticket purchase confirmation';
        } else if (strpos($name, 'pakiet') !== false) {
            $subject = 'Potwierdzenie zakupu pakietu multimedialnego';
        } else if (strpos($name, 'multimedia') !== false) {
            $subject = 'Multimedia package purchase confirmation';
        } else if (strpos($name, 'relacja') !== false) {
            $subject = 'Potwierdzenie zakupu relacji live';
        } else if (strpos($name, 'stream') !== false) {
            $subject = 'Live stream purchase confirmation';
        }
    }

    return $subject;
}
add_filter('woocommerce_email_subject_customer_processing_order', 'change_admin_email_subject', 1, 2);


/*------------------------------ CUSTOM "NEW ORDER" EMAIL ----------------------------------*/

add_filter('woocommerce_email_recipient_new_order', 'diff_recipients_email_notifications', 10, 2);
function diff_recipients_email_notifications($recipient, $order)
{
    if (!is_a($order, 'WC_Order')) return $recipient;

    $email_media = 'media@ifbbpro.pl';
    $email_live = 'live@ifbbpro.pl';
    $email_bilety = 'bilety1@ifbbpro.pl';
    $email_retransmisja = "relacja@ifbbpro.pl";

    $recipient = 'cholewski185@gmail.com';

    global $woocommerce;

    $blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);

    foreach ($order->get_items() as $item_id => $item) {
        $name = strtolower($item->get_name());


        if (strpos($name, 'pakiet') !== false) {
            $recipient = $email_media;
        } else if (strpos($name, 'multimedia') !== false) {
            $recipient = $email_media;
        } else if (strpos($name, 'DOSTĘP DO RELACJI LIVE') !== false) {
            $recipient = $email_live;
        } else if (strpos($name, 'live streaming') !== false) {
            $recipient = $email_live;
        } else if (strpos($name, 'ticket') !== false) {
            $recipient = $email_bilety;
        } else if (strpos($name, 'bilet') !== false) {
            $recipient = $email_bilety;
        } else if (strpos($name, 'access to live stream') !== false) {
            $recipient = $email_retransmisja;
        } else if (strpos($name, 'dostęp do relacji live') !== false) {
            $recipient = $email_retransmisja;
        }
    }

    return $recipient;
}

/*------------------ "RETURN TO SHOP" BUTTON REDIRECT -------------------------*/

function store_mall_wc_empty_cart_redirect_url()
{
    if (pll_current_language() == 'pl') {
        $url = '/en/live-stream-zamowienie';
    } else {
        $url = '/live-stream-order';
    }
    return esc_url($url);
}
add_filter('woocommerce_return_to_shop_redirect', 'store_mall_wc_empty_cart_redirect_url');





/*----------------------------- LIVE PRODUCT REDIRECTION ------------------------------*/


function LiveProductRedirect()
{
    if (is_product() == 'true') {

        if (pll_current_language() == 'pl') {
            wp_redirect('https://ifbbpro.com.pl/cart');
        } else {
            wp_redirect('https://ifbbpro.com.pl/cart');
        }
    }
}
add_action('woocommerce_before_single_product', 'LiveProductRedirect');
