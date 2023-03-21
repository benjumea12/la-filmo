<!-- Codigo html -->
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
  <main class="main-page-collection">
    <header class="header-collection">
      <img class="image-collection" src="<?php echo get_template_directory_uri(); ?>/assets/images/artists/category.png" alt="">

      <div class="header-content">
        <h1 class="title">Cortos de <span>Stop Motion</span></h1>

        <div class="illustrator">
          <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/brush.svg" alt="">
          <p>Ilustración por @dulcezavala7</p>

        </div>
      </div>
    </header>

    <div class="list-cortos">
      <a href="<?php echo get_site_url(); ?>/cortometrajes" class="card-popular">
        <div class="swiper-slide-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/popular-1.png" alt="Imagen de corto 'Nombre del corto'">
        </div>
        <div class="swiper-slide-content">
          <h4 class="swiper-slide-title">El extraño mundo de Gumball</h4>
          <p class="swiper-slide-text">2022 <span class="separator"></span> 5 minutos</p>
        </div>
      </a>
      <a href="<?php echo get_site_url(); ?>/cortometrajes" class="card-popular">
        <div class="swiper-slide-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/popular-2.png" alt="Imagen de corto 'Nombre del corto'">
        </div>
        <div class="swiper-slide-content">
          <h4 class="swiper-slide-title">El extraño mundo de Gumball</h4>
          <p class="swiper-slide-text">2022 <span class="separator"></span> 5 minutos</p>
        </div>
      </a>
      <a href="<?php echo get_site_url(); ?>/cortometrajes" class="card-popular">
        <div class="swiper-slide-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/popular-3.png" alt="Imagen de corto 'Nombre del corto'">
        </div>
        <div class="swiper-slide-content">
          <h4 class="swiper-slide-title">El extraño mundo de Gumball</h4>
          <p class="swiper-slide-text">2022 <span class="separator"></span> 5 minutos</p>
        </div>
      </a>
    </div>

  </main>
  <!-- End page content -->

  <!-- Import footer -->
  <?php get_footer(); ?>
</body>

</html>