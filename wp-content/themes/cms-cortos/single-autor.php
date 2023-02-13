<?php
the_post();
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
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width: 600px;" class="" alt="...">
    <p><?php echo get_the_content(); ?></p>
  </div>
  <!-- End page content -->


  <!-- Import footer -->
  <?php get_footer(); ?>

</body>

</html>