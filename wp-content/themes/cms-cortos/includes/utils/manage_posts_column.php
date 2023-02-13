<?php
add_filter('manage_posts_columns', 'add_img_column');
add_filter('manage_posts_custom_column', 'manage_img_column', 10, 2);

function add_img_column($columns)
{
  $columns['img'] = 'Imagen Destacada';
  return $columns;
}

function manage_img_column($column_name, $post_id)
{
  if ($column_name == 'img') {
    echo get_the_post_thumbnail($post_id, 'thumbnail');
    return true;
  }
}
