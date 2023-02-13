<?php
// Get authors
$args_authors = array(
  'post_type' => 'autor',
  'post_status' => 'publish',
  'posts_per_page' => -1,
);

$the_query_authors = new WP_Query($args_authors);
?>


<!doctype html>
<html lang="en">

<head>
  <?php wp_head(); ?>
</head>

<body>
  <?php get_header(); ?>

  <div class="container py-5">
    <h1>Autores</h1>

    <div class="text-center">
      <div class="d-flex">
        <?php
        if ($the_query_authors->have_posts()) :
          while ($the_query_authors->have_posts()) :
            $the_query_authors->the_post();
        ?>
            <a class="card" style="width: 18rem;" href="<?php echo get_the_permalink(); ?>">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                <p class="card-text"><?php echo get_the_excerpt(); ?></p>
              </div>
            </a>
        <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>

</body>

</html>