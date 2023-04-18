<?php
function loads_scripts()
{
    // JavaScript libraries
    wp_enqueue_script('jquery_js', 'https://code.jquery.com/jquery-3.6.3.min.js', array(), '3.6.3');
    wp_enqueue_script('swiper_js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '8.4.7');

    // App scripts
    wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.1');
    wp_enqueue_script('header_js', get_template_directory_uri() . '/assets/js/header.js', array(), '1.0.0');
    wp_enqueue_script('swipers_js', get_template_directory_uri() . '/assets/js/swipers.js', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'loads_scripts');
