<?php
add_action('wp_ajax_nopriv_get_autores', 'get_autores');
add_action('wp_ajax_get_autores', 'get_autores');

function get_autores()
{
  // Params
  $nombre = $_REQUEST['nombre'];

  // Get authors
  $args_authors = array(
    'post_type' => 'autor',
    'post_status' => 'publish',
    'posts_per_page' => -1,
  );

  $the_query_authors = new WP_Query($args_authors);

  wp_send_json($the_query_authors->get_posts());

  die();
}
