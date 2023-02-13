<?php
the_post();

$youtube = get_post_meta(get_the_ID(), $prefix . 'youtube');
$author = get_post_meta(get_the_ID(), $prefix . 'author');

$prefix_authors = 'author_';

$args_authors = array(
  'post_type' => 'autor',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'post__in' => array($author[0])
);

$the_query_authors = new WP_Query($args_authors);
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Import default project head content -->
  <?php wp_head(); ?>
</head>

<body>

  <!-- Import header -->
  <?php get_header(); ?>


  <!-- Page content -->
  <div class="container py-5">
    <h1><?php echo get_the_title(); ?></h1>
    <p><?php echo get_the_content(); ?></p>

    <div>
      <?php echo $youtube[0]; ?>
    </div>

    <hr class="my-5" />
    <?php
    if ($the_query_authors->have_posts()) :
      while ($the_query_authors->have_posts()) :
        $the_query_authors->the_post();

    ?>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width: 100px;" class="" alt="..."><br />
        <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
        <p><?php echo get_the_excerpt(); ?></p>
    <?php
      endwhile;
    endif;
    ?>
  </div>
  <!-- End page content -->

  <!-- Import footer -->
  <?php get_footer(); ?>

</body>

</html>