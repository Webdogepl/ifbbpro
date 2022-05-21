<?php
    define('WP_USE_THEMES', false);
    require('./wp-load.php');
    do_action('litespeed_purge_all');


    echo 'Cache purged';
