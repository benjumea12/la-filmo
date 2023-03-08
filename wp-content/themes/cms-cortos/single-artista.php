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
  <main class="main-artist">
    <section class="artist-header">
      <a href="#" class="artist-pay">Apoyar vía <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/paypal.svg" alt=""> </a>

      <div class="artist-header-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/artists/artist.png" alt="">
      </div>
      <div class="artist-header-content">
        <h2 class="artist-header-subtitle">Animador/a</h2>
        <h1 class="artist-header-title">Camilo Gonzales</h1>
      </div>
    </section>

    <section class="artist-detail">
      <div class="artist-content">
        <h3 class="section-title">Sobre mi</h3>

        <p>Soy el creador de "Higiene del sueño", un corto animado que explora la importancia de tener una buena rutina de sueño para nuestra salud y bienestar. Desde joven, siempre he estado interesado en el arte de la animación y en la capacidad de esta forma de arte para transmitir mensajes importantes de una manera accesible y entretenida.
          <br>
          <br>
          Con "Higiene del sueño", quería crear algo que fuera a la vez divertido y educativo, y que ayudara a las personas a entender la importancia de la higiene del sueño.
        </p>
        <h4 class="section-title">Redes sociales</h4>
        <div class="redes">
          <a href="https://www.instagram.com/lafilmomaldita/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/instagram.svg" alt="Icono de Intagram">
          </a>
          <a href="https://www.youtube.com/channel/UCvt0OljLuvQW017ppgmSVog" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/youtube.svg" alt="Icono de Youtube">
          </a>
          <a href="https://twitter.com/LaFilmoMaldita?s=20" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/twitter.svg" alt="Icono de Twitter">
          </a>
        </div>
      </div>
      <div class="artist-cortos">

        <h3 class="section-title">Mis tabajos</h3>
        <div class="list-cortos">
          <a href="#" class="card-popular">
            <div class="swiper-slide-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/popular-1.png" alt="Imagen de corto 'Nombre del corto'">
            </div>
            <div class="swiper-slide-content">
              <h4 class="swiper-slide-title">El extraño mundo de Gumball</h4>
              <p class="swiper-slide-text">2022 <span class="separator"></span> 5 minutos</p>
            </div>
          </a>
          <a href="#" class="card-popular">
            <div class="swiper-slide-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/popular-1.png" alt="Imagen de corto 'Nombre del corto'">
            </div>
            <div class="swiper-slide-content">
              <h4 class="swiper-slide-title">El extraño mundo de Gumball</h4>
              <p class="swiper-slide-text">2022 <span class="separator"></span> 5 minutos</p>
            </div>
          </a>
        </div>

      </div>
    </section>
  </main>
  <!-- End page content -->


  <!-- Import footer -->
  <?php get_footer(); ?>

</body>

</html>