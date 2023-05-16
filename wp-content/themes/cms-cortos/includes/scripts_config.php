<?php
function loads_scripts()
{
    // JavaScript libraries
    wp_enqueue_script('jquery_js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array(), '3.6.4');
    wp_enqueue_script('swiper_js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), '9.2.3');

    // App scripts
    wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.22');
    wp_enqueue_script('swipers_js', get_template_directory_uri() . '/assets/js/swipers.js', array(), '1.0.6');
    wp_enqueue_script('magnific_popup_js', get_template_directory_uri() . '/assets/magnific-popup/jquery.magnific-popup.min.js', array(), '1.1.0');
}
add_action('wp_enqueue_scripts', 'loads_scripts');
