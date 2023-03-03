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

    <!-- Swiper -->
    <section class="swiper-contain">
      <div class="swiper swiper-home">
        <div class="swiper-wrapper">
          <!-- Swiper slide -->
          <section class="swiper-slide">
            <img class="swiper-slide-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/swiper-image.png" alt="Imagen de corto 'Nombre del corto'">
            <div class="swiper-slide-content">
              <h2 class="swiper-slide-title">Higiene del sueño</h2>
              <p class="swiper-slide-text">"Higiene del sueño" es un corto animado divertido y educativo que explora la importancia de tener una buena rutina de sueño para nuestra salud y bienestar. Síguelo en su aventura y descubre cómo mejorar tu propia higiene del sueño. ¡No te lo pierdas!</p>
              <a href="#" class="btn btn-lg btn-primary swiper-slide-button" type="button">Ver ahora</a>
            </div>
          </section>
          <!-- End swiper slide -->

          <!-- Swiper slide -->
          <section class="swiper-slide">
            <img class="swiper-slide-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/swiper-image.png" alt="Imagen de corto 'Nombre del corto'">
            <div class="swiper-slide-content">
              <h2 class="swiper-slide-title">Higiene del sueño</h2>
              <p class="swiper-slide-text">"Higiene del sueño" es un corto animado divertido y educativo que explora la importancia de tener una buena rutina de sueño para nuestra salud y bienestar. Síguelo en su aventura y descubre cómo mejorar tu propia higiene del sueño. ¡No te lo pierdas!</p>
              <a href="#" class="btn btn-lg btn-primary swiper-slide-button" type="button">Ver ahora</a>
            </div>
          </section>
          <!-- End swiper slide -->
        </div>
        <div class="swiper-action-basic swiper-next">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-light-right.svg" alt="Flecha de item siguiente del slide">
        </div>
        <div class="swiper-action-basic swiper-prev">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-light-left.svg" alt="Flecha de item anterior del slide">
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </section>
    <!-- End swiper -->

    <section class="section-basic swiper-collections-contain">
      <header class="section-basic-header">
        <h3 class="section-basic-title title-2">Explorar por <span class="text-underline">Colecciones</span></h3>
        <a href="" class="section-basic-action">VER TODAS</a>
      </header>

      <div class="section-home-content swiper swiper-collections">
        <div class="swiper-wrapper">
          <!-- Swiper slide -->
          <a href="#" class="swiper-slide">
            <img class="swiper-slide-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/collection-4.png" alt="Imagen de corto 'Nombre del corto'">
            <div class="swiper-slide-content">
              <h4 class="swiper-slide-title">TOP</h4>
              <p class="swiper-slide-text">18 CORTOS</p>
            </div>
          </a>
          <!-- End swiper slide -->
          <!-- Swiper slide -->
          <a href="#" class="swiper-slide">
            <img class="swiper-slide-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/collection-3.png" alt="Imagen de corto 'Nombre del corto'">
            <div class="swiper-slide-content">
              <h4 class="swiper-slide-title">+18</h4>
              <p class="swiper-slide-text">7 CORTOS</p>
            </div>
          </a>
          <!-- End swiper slide -->
          <!-- Swiper slide -->
          <a href="#" class="swiper-slide">
            <img class="swiper-slide-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/collection-1.png" alt="Imagen de corto 'Nombre del corto'">
            <div class="swiper-slide-content">
              <h4 class="swiper-slide-title">Stop Motion</h4>
              <p class="swiper-slide-text">8 CORTOS</p>
            </div>
          </a>
          <!-- End swiper slide -->
          <!-- Swiper slide -->
          <a href="#" class="swiper-slide">
            <img class="swiper-slide-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/collection-2.png" alt="Imagen de corto 'Nombre del corto'">
            <div class="swiper-slide-content">
              <h4 class="swiper-slide-title">A MANO ALZADA</h4>
              <p class="swiper-slide-text">16 CORTOS</p>
            </div>
          </a>
          <!-- End swiper slide -->
        </div>
        <div class="swiper-action-basic swiper-next">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-light-right.svg" alt="Flecha de item siguiente del slide">
        </div>
        <div class="swiper-action-basic swiper-prev">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-light-left.svg" alt="Flecha de item anterior del slide">
        </div>
      </div>
    </section>
  </main>
  <!-- End page content -->


  <!-- Import footer -->
  <?php get_footer(); ?>

</body>

</html>