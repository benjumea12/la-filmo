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
  <main>
    <h1 class="title-1">Página Home</h1>

    <p class="text-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

    <button class="btn">Botón</button>
    <a href="#" class="btn btn-primary" type="button">Botón</a>
    <button class="btn btn-lg">Botón</button>

    <!-- Swiper -->
    <div class="swiper example-swiper" style="width: 900px; margin: 2em 0;">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img style="width: 100%;" src="<?php echo get_template_directory_uri(); ?>/assets/images/swiper-image.png" alt=""></div>
        <div class="swiper-slide"><img style="width: 100%;" src="<?php echo get_template_directory_uri(); ?>/assets/images/swiper-image.png" alt=""></div>
        <div class="swiper-slide"><img style="width: 100%;" src="<?php echo get_template_directory_uri(); ?>/assets/images/swiper-image.png" alt=""></div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

  </main>
  <!-- End page content -->


  <!-- Import footer -->
  <?php get_footer(); ?>

</body>

</html>