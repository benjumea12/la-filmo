<?php
$corto_collections = get_terms("corto_collection");
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
              <a href="<?php echo get_site_url(); ?>/cortometrajes" class="btn btn-lg btn-primary swiper-slide-button" type="button">Ver ahora</a>
            </div>
          </section>
          <!-- End swiper slide -->

          <!-- Swiper slide -->
          <section class="swiper-slide">
            <img class="swiper-slide-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/swiper-image.png" alt="Imagen de corto 'Nombre del corto'">
            <div class="swiper-slide-content">
              <h2 class="swiper-slide-title">Higiene del sueño</h2>
              <p class="swiper-slide-text">"Higiene del sueño" es un corto animado divertido y educativo que explora la importancia de tener una buena rutina de sueño para nuestra salud y bienestar. Síguelo en su aventura y descubre cómo mejorar tu propia higiene del sueño. ¡No te lo pierdas!</p>
              <a href="<?php echo get_site_url(); ?>/cortometrajes" class="btn btn-lg btn-primary swiper-slide-button" type="button">Ver ahora</a>
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

    <!-- Section collections -->
    <section class="section-basic swiper-collections-contain">
      <header class="section-basic-header">
        <h3 class="section-basic-title title-2">Explorar por <span class="text-underline">Colecciones</span></h3>
        <a href="<?php echo get_site_url(); ?>/colecciones" class="section-basic-action">VER TODAS</a>
      </header>

      <div class="section-home-content swiper swiper-collections">
        <div class="swiper-wrapper">
          <?php
          if ($corto_collections) :
            foreach ($corto_collections as $corto_collection) :
          ?>
              <!-- Swiper slide -->
              <a href="<?php echo get_site_url(); ?>/coleccion/?coleccion=<?php echo $corto_collection->slug; ?>" class="swiper-slide card-collection">
                <img class="swiper-slide-image" src="<?php echo z_taxonomy_image_url($corto_collection->term_id); ?>" alt="Imagen de corto 'Nombre del corto'">
                <div class="swiper-slide-content">
                  <h4 class="swiper-slide-title"><?php echo $corto_collection->name; ?></h4>
                  <p class="swiper-slide-text">18 CORTOS</p>
                </div>
              </a>
              <!-- End swiper slide -->
          <?php
            endforeach;
          endif;
          ?>
        </div>
        <div class="swiper-action-basic swiper-next">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-light-right.svg" alt="Flecha de item siguiente del slide">
        </div>
        <div class="swiper-action-basic swiper-prev">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-light-left.svg" alt="Flecha de item anterior del slide">
        </div>
      </div>
    </section>
    <!-- End section collections -->

    <!-- Section popular -->
    <section class="section-basic swiper-popular-contain">
      <header class="section-basic-header">
        <h3 class="section-basic-title title-2"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.svg" alt="Flecha de item anterior del slide">Cortos Populares</h3>
      </header>

      <div class="section-home-content swiper swiper-popular">
        <div class="swiper-wrapper">
          <!-- Swiper slide -->
          <a href="<?php echo get_site_url(); ?>/cortometrajes" class="swiper-slide card-popular">
            <div class="swiper-slide-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/popular-1.png" alt="Imagen de corto 'Nombre del corto'">
            </div>
            <div class="swiper-slide-content">
              <h4 class="swiper-slide-title">El extraño mundo de Gumball</h4>
              <p class="swiper-slide-text">2022 <span class="separator"></span> 5 minutos</p>
            </div>
          </a>
          <!-- End swiper slide -->
          <!-- Swiper slide -->
          <a href="<?php echo get_site_url(); ?>/cortometrajes" class="swiper-slide card-popular">
            <div class="swiper-slide-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/popular-2.png" alt="Imagen de corto 'Nombre del corto'">
            </div>
            <div class="swiper-slide-content">
              <h4 class="swiper-slide-title">Dios Hazme Alto de GAMP</h4>
              <p class="swiper-slide-text">2022 <span class="separator"></span> 5 minutos</p>
            </div>
          </a>
          <!-- End swiper slide -->
          <!-- Swiper slide -->
          <a href="<?php echo get_site_url(); ?>/cortometrajes" class="swiper-slide card-popular">
            <div class="swiper-slide-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/popular-3.png" alt="Imagen de corto 'Nombre del corto'">
            </div>
            <div class="swiper-slide-content">
              <h4 class="swiper-slide-title">¿Qué es un Heroe?</h4>
              <p class="swiper-slide-text">2022 <span class="separator"></span> 5 minutos</p>
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
    <!-- End section popular -->

    <!-- Section popular -->
    <section class="section-basic explore-stories-contain">
      <header class="section-basic-header">
        <h3 class="section-basic-title title-2"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/explore.svg" alt="Flecha de item anterior del slide">Explora más historias</h3>
      </header>

      <div class="explore-stories">
        <a href="<?php echo get_site_url(); ?>/cortometrajes" class="explore-card">
          <img class="explore-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/explore-1.png" alt="">
        </a>
        <a href="<?php echo get_site_url(); ?>/cortometrajes" class="explore-card">
          <img class="explore-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/explore-2.png" alt="">
        </a>
        <a href="<?php echo get_site_url(); ?>/cortometrajes" class="explore-card">
          <img class="explore-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/explore-3.png" alt="">
        </a>
        <a href="<?php echo get_site_url(); ?>/cortometrajes" class="explore-card">
          <img class="explore-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/explore-4.png" alt="">
        </a>
        <a href="<?php echo get_site_url(); ?>/cortometrajes" class="explore-card">
          <img class="explore-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/explore-5.png" alt="">
        </a>
        <a href="<?php echo get_site_url(); ?>/cortometrajes" class="explore-card">
          <img class="explore-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/explore-6.png" alt="">
        </a>
        <a href="<?php echo get_site_url(); ?>/cortometrajes" class="explore-card">
          <img class="explore-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/explore-7.png" alt="">
        </a>
        <a href="<?php echo get_site_url(); ?>/cortometrajes" class="explore-card">
          <img class="explore-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/explore-8.png" alt="">
        </a>
        <a href="<?php echo get_site_url(); ?>/cortometrajes" class="explore-card">
          <img class="explore-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/explore-9.png" alt="">
        </a>
        <a href="<?php echo get_site_url(); ?>/cortometrajes" class="explore-card">
          <img class="explore-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/explore-10.png" alt="">
        </a>
        <a href="<?php echo get_site_url(); ?>/cortometrajes" class="explore-card">
          <img class="explore-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/explore-11.png" alt="">
        </a>
        <a href="<?php echo get_site_url(); ?>/cortometrajes" class="explore-card">
          <img class="explore-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/explore-12.png" alt="">
        </a>
        <a href="<?php echo get_site_url(); ?>/cortometrajes" class="explore-card">
          <img class="explore-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/explore-13.png" alt="">
        </a>
        <a href="<?php echo get_site_url(); ?>/cortometrajes" class="explore-card">
          <img class="explore-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/explore-14.png" alt="">
        </a>
        <a href="<?php echo get_site_url(); ?>/cortometrajes" class="explore-card">
          <img class="explore-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/explore-15.png" alt="">
        </a>
        <a href="<?php echo get_site_url(); ?>/cortometrajes" class="explore-card">
          <img class="explore-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/explore-16.png" alt="">
        </a>
      </div>

      <footer class="section-basic-footer">
        <button class="btn btn-lg btn-more">Ver más</button>
      </footer>
    </section>
    <!-- End section popular -->

  </main>
  <!-- End page content -->


  <!-- Import footer -->
  <?php get_footer(); ?>

</body>

</html>