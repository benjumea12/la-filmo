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
  <main class="main-page-collections">
    <h1 class="title">Ver cortos por categoria</h1>

    <div class="collections-list">
      <!-- Swiper slide -->
      <a href="#" class="card-collection">
        <img class="swiper-slide-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/collection-4.png" alt="Imagen de corto 'Nombre del corto'">
        <div class="swiper-slide-content">
          <h4 class="swiper-slide-title">TOP</h4>
          <p class="swiper-slide-text">18 CORTOS</p>
        </div>
      </a>
      <!-- End swiper slide -->
      <!-- Swiper slide -->
      <a href="#" class="card-collection">
        <img class="swiper-slide-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/collection-3.png" alt="Imagen de corto 'Nombre del corto'">
        <div class="swiper-slide-content">
          <h4 class="swiper-slide-title">+18</h4>
          <p class="swiper-slide-text">7 CORTOS</p>
        </div>
      </a>
      <!-- End swiper slide -->
      <!-- Swiper slide -->
      <a href="#" class="card-collection">
        <img class="swiper-slide-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/collection-1.png" alt="Imagen de corto 'Nombre del corto'">
        <div class="swiper-slide-content">
          <h4 class="swiper-slide-title">Stop Motion</h4>
          <p class="swiper-slide-text">8 CORTOS</p>
        </div>
      </a>
      <!-- End swiper slide -->
      <!-- Swiper slide -->
      <a href="#" class="card-collection">
        <img class="swiper-slide-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/collection-2.png" alt="Imagen de corto 'Nombre del corto'">
        <div class="swiper-slide-content">
          <h4 class="swiper-slide-title">A MANO ALZADA</h4>
          <p class="swiper-slide-text">16 CORTOS</p>
        </div>
      </a>
      <!-- End swiper slide -->
    </div>

  </main>
  <!-- End page content -->

  <!-- Import footer -->
  <?php get_footer(); ?>
</body>

</html>