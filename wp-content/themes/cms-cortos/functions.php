<?php
// Layout specific
require get_template_directory() . '/includes/head_config.php';
require get_template_directory() . '/includes/scripts_config.php';
// Manage posts column
require get_template_directory() . '/includes/custom-functions/manage_posts_column.php';
// Custom ollections taxonomy
require get_template_directory() . '/includes/custom-functions/custom_collections_taxonomy.php';
require get_template_directory() . '/includes/custom-functions/custom_prizes_taxonomy.php';
// Post view
require get_template_directory() . '/includes/custom-functions/post_views.php';

// Prefix models
$prefix = 'shortfilm_';
$prefix_artist = 'artist_';
$prefix_cortos = 'shortfilm_';
$prefix_sliders = 'slider_home_';
$prefix_places = 'places_';
