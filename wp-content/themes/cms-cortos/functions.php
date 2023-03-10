<?php
// Layout specific
require get_template_directory() . '/includes/head_config.php';
require get_template_directory() . '/includes/ajaxurl.php';
require get_template_directory() . '/includes/scripts_config.php';
// Manage posts column
require get_template_directory() . '/includes/manage_posts_column.php';

// Prefix models
$prefix = 'shortfilm_';
$prefix_artist = 'artist_';


// Añadir metabox para relacionar lecciones con el curso padre

function cpt_parent_meta_box()
{
  add_meta_box('artist', 'Artista', 'cpt_lesson_parent_meta_box', 'cortometraje', 'side', 'high');
}
add_action('add_meta_boxes', 'cpt_parent_meta_box');
function cpt_lesson_parent_meta_box($post)
{
  $post_type_object = get_post_type_object($post->post_type);
  $pages = wp_dropdown_pages(array(
    'post_type' => 'artista', 'selected' => $post->post_parent, 'name' => 'parent_id',
    'show_option_none' => __('(no parent)'), 'sort_column' => 'menu_order, post_title', 'echo' => 0
  ));
  if (!empty($pages)) {
    echo $pages;
  }
}
