<?php
/*
* Template Name: Zamówienia biletów
*/

?>

<h2>Zamówienia biletów na 19 Września 2021</h2>


<table class="shop_table shop_table_responsive my_account_orders">


    <?php


    $count = count_users();
    $usersNumber = $count['total_users'];

    $dateFrom = '210801';
    $tickets_id = ['5646', '5644', '5643', '5641'];



    $my_orders_columns = apply_filters(
        'woocommerce_my_account_my_orders_columns',
        array(
            'order-number'  => esc_html__('Order', 'woocommerce'),
            'order-name'  => esc_html__('Imię i nazwisko', 'woocommerce'),
            'order-date'    => esc_html__('Date', 'woocommerce'),
            'order-total'   => esc_html__('Total', 'woocommerce'),
            'order-actions' => '&nbsp;',
        )
    ); ?>


    <thead>
        <tr>
            <?php foreach ($my_orders_columns as $column_id => $column_name) : ?>
                <th class="<?php echo esc_attr($column_id); ?>"><span class="nobr"><?php echo esc_html($column_name); ?></span></th>
            <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>








        <?php for ($i = 0; $i <= $usersNumber; $i++) {

            $customer_orders = get_posts(
                apply_filters(
                    'woocommerce_my_account_my_orders_query',
                    array(
                        'numberposts' => $order_count,
                        'meta_key'    => '_customer_user',
                        'meta_value'  => $i,
                        'post_type'   => wc_get_order_types('view-orders'),
                        'post_status' => array_keys(wc_get_order_statuses()),
                    )
                )
            );

            foreach ($customer_orders as $customer_order) {
                $order = wc_get_order($customer_order);
                $item_count = $order->get_item_count();


                foreach ($order->get_items() as $item_id => $item) {

                    if ($item_id == '5641') {
                        $bilety = true;
                    }
                }



                if ($order->get_status() != 'processing') {
                    continue;
                }
                if ($order->get_date_created()->date('ymd') < $dataOd) {
                    continue;
                }
                if ($bilety != true) {
                    continue;
                }



        ?>
                <tr class="order">
                    <?php foreach ($my_orders_columns as $column_id => $column_name) : ?>
                        <td class="<?php echo esc_attr($column_id); ?>" data-title="<?php echo esc_attr($column_name); ?>">
                            <?php if (has_action('woocommerce_my_account_my_orders_column_' . $column_id)) : ?>
                                <?php do_action('woocommerce_my_account_my_orders_column_' . $column_id, $order); ?>

                            <?php elseif ('order-number' === $column_id) : ?>
                                <a href="<?php echo esc_url($order->get_view_order_url()); ?>">
                                    <?php echo _x('#', 'hash before order number', 'woocommerce') . $order->get_order_number(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                    ?>
                                </a>

                            <?php elseif ('order-name' === $column_id) : ?>
                                <?php echo esc_html(wc_get_order_status_name($order->get_billing_first_name() . ' ' . $order->get_billing_last_name())); ?>

                            <?php elseif ('order-date' === $column_id) : ?>
                                <time datetime="<?php echo esc_attr($order->get_date_created()->date('d.m.y')); ?>"><?php echo esc_html(wc_format_datetime($order->get_date_created())); ?></time>

                            <?php elseif ('order-total' === $column_id) : ?>
                                <?php

                                printf(_n('%1$s za %2$s bilet', '%1$s for %2$s bilety', $item_count, 'woocommerce'), $order->get_formatted_order_total(), $item_count); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                ?>

                            <?php elseif ('order-actions' === $column_id) : ?>
                                <?php
                                $actions = wc_get_account_orders_actions($order);

                                if (!empty($actions)) {
                                    foreach ($actions as $key => $action) {
                                        echo '<a href="' . esc_url($action['url']) . '" class="button ' . sanitize_html_class($key) . '">' . esc_html($action['name']) . '</a>';
                                    }
                                }
                                ?>
                            <?php endif; ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php } ?>


        <?php
        } ?>
    </tbody>
</table>

<?php get_footer(); ?>