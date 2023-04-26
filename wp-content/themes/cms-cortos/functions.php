<?php
// Layout specific
require get_template_directory() . '/includes/head_config.php';
require get_template_directory() . '/includes/ajaxurl.php';
require get_template_directory() . '/includes/scripts_config.php';
// Manage posts column
require get_template_directory() . '/includes/manage_posts_column.php';
// Custom ollections taxonomy
require get_template_directory() . '/includes/custom_collections_taxonomy.php';

// Prefix models
$prefix = 'shortfilm_';
$prefix_artist = 'artist_';
$prefix_cortos = 'shortfilm_';
$prefix_sliders = 'slider_home_';
