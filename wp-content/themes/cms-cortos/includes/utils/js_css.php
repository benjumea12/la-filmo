<?php
function loads_scripts()
{
    wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', array(), '5.3.0');
    wp_enqueue_script('jquery_js', 'https://code.jquery.com/jquery-3.6.3.min.js', array(), '3.6.3');
}
add_action('wp_enqueue_scripts', 'loads_scripts');
