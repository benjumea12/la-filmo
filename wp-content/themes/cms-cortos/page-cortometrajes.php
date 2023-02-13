<?php
// Get shortfilms
$args_shortfilms = array(
  'post_type' => 'cortometraje',
  'post_status' => 'publish',
  'posts_per_page' => -1,
);

$the_query_shortfilms = new WP_Query($args_shortfilms);
?>


<!doctype html>
<html lang="en">

<head>
  <?php wp_head(); ?>
</head>

<body>
  <?php get_header(); ?>

  <div class="container py-5">
    <h1>Cortos</h1>

    <div class="text-center mb-4">
      <div class="d-flex">
        <?php
        if ($the_query_shortfilms->have_posts()) :
          while ($the_query_shortfilms->have_posts()) :
            $the_query_shortfilms->the_post();

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

    <a href="<?php echo get_site_url(); ?>/cortometrajes">Ver todos</a>
  </div>

  <?php get_footer(); ?>

</body>

</html>