<!doctype html>
<html lang="en">

<head>
  <!-- Import default project head content -->
  <?php wp_head(); ?>
</head>

<body>
  <!-- Import header -->
  <?php get_header(); ?>

  <div class="image-page-corto">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/artists/corto.png" alt="">
    <div class="overlay"></div>
  </div>


  <!-- Page content -->
  <main class="main-page-corto">

    <div class="corto-top">
      <div class="corto-container-title">
        <h1>2022</h1>
        <svg class="line" height="4" viewBox="0 0 92 4" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line x1="1.82609" y1="2.08697" x2="89.4783" y2="2.08697" stroke="white" stroke-width="3.65217" stroke-linecap="round" />
        </svg>
        <h1>5 minutos</h1>
      </div>
      <div class="corto-container-title2">
        <h1 class="name">Nombre Del Corto Aquí</h1>
        <a class="btn-1">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/eye.svg" alt="Ver" width="24" height="24">
          Ver ilustración
        </a>
      </div>
      <section class="corto-title">
        <p>"Higiene del sueño" es un corto animado divertido y educativo que explora la importancia de tener una buena rutina de sueño para nuestra salud y bienestar. Síguelo en su aventura y descubre cómo mejorar tu propia higiene del sueño. ¡No te lo pierdas!</p>
      </section>
    </div>

    <div class="corto-container-buttons">
      <a href="#youtube-corto" class="btn btn-lg btn-primary">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/play.svg" alt="Ver">
        Ver ahora
      </a>
      <a class="btn btn-lg">
        Más información
      </a>
    </div>


    <div class="corto-container-columns">
      <div class="corto-content">
        <h4 class="description-title">Descripción general</h4>
        <div class="description-text">
          <p>
            "Higiene del sueño" es un corto animado que sigue a un personaje en su camino hacia una mejor calidad de sueño.
            Con un estilo de animación colorido y una trama entretenida, este corto explora la importancia de tener una rutina
            de sueño saludable. A lo largo de su aventura, el personaje aprende acerca de los hábitos que pueden mejorar la calidad
            del sueño, como establecer un horario regular para acostarse y levantarse, limitar la exposición a pantallas antes de dormir
            y crear un ambiente relajante en el dormitorio. <br><br>
            Este corto es una excelente herramienta para enseñar a los niños y adultos jóvenes acerca de la importancia de la higiene
            del sueño. Con un mensaje divertido y accesible, "Higiene del sueño" muestra de manera clara y concisa cómo tener una rutina
            de sueño saludable puede mejorar la vida de una persona. Además, el corto también...
          </p>
        </div>

        <div class="alerts">
          <div class="alert red">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/skull.svg" alt="Ver">
            <div>
              <p class="tittle-alert">Aviso importante</p>
              <p class="alert-text">Este corto puede contener temas que no son aptos para todo tipo de público.</p>
            </div>
          </div>
          <div class="alert yellow">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fenix.svg" alt="Ver" width="24" height="24">
            <div>
              <p class="tittle-alert">Corto premiado</p>
              <p class="alert-text"><span class="underline">Mejor Corto</span> en <span class="underline">2022</span></p>
            </div>
          </div>
          <div class="alert purpple">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/frog.svg" alt="Ver" width="24" height="24">
            <div>
              <p class="tittle-alert">Bretis Pojar</p>
              <p class="alert-text"><span class="underline">Mejor Obra Breve</span> en <span class="underline">2023</span></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card-corto">
        <h5 class="underline2">Información</h5>

        <div class="corto-container-colentions">
          <span>Colección</span>
          <p>Stop Motion</p>
        </div>

        <h6>Géneros</h6>
        <p>Corto, Animado, Higiene, Sueño, Saludable</p>

        <h6>Creado por</h6>
        <a href="<?php echo get_site_url(); ?>/artistas" class="img-artist-name">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/artists/artist.png" alt="Ver">
          Camilo Zhingre
        </a>
        <a href="<?php echo get_site_url(); ?>/artistas" class="img-artist-name">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/artists/artist.png" alt="Ver">
          Diego Cuyago
        </a>
        <a href="<?php echo get_site_url(); ?>/artistas" class="img-artist-name">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/artists/artist.png" alt="Ver">
          Jose Torres
        </a>
        <a href="<?php echo get_site_url(); ?>/artistas" class="img-artist-name">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/artists/artist.png" alt="Ver">
          Esteban Onstante
        </a>
        <a href="<?php echo get_site_url(); ?>/artistas" class="img-artist-name">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/artists/artist.png" alt="Ver">
          Andrés Cevallos
        </a>

        <h6>Ilustración por</h6>
        <a href="<?php echo get_site_url(); ?>/artistas" class="img-artist-name">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/artists/artist.png" alt="Ver">
          Arriamis
        </a>
      </div>
    </div>

    <div class="youtube-corto" id="youtube-corto">
      <iframe src="https://www.youtube.com/embed/28nZv0VXwtA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

  </main>
  <!-- End page content -->

  <!-- Import footer -->
  <?php get_footer(); ?>
</body>

</html>