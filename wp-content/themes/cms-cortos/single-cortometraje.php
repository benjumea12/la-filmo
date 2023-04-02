<?php
the_post();

$prefix_corto = 'shortfilm_';

$corto_collection = get_the_terms(get_the_ID(), "corto_collection");
$corto_prizes = get_the_terms(get_the_ID(), "corto_prize");

$danger = get_post_meta(get_the_ID(), $prefix_corto . "danger", true);
$youtube = get_post_meta(get_the_ID(), $prefix_corto . "youtube", true);
$edition = get_post_meta(get_the_ID(), $prefix_corto . "edition", true);

echo $edition;
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

  <div class="image-page-corto">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
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
        <h1 class="name"><?php echo get_the_title(); ?></h1>
        <a class="btn-1" href="<?php echo get_the_post_thumbnail_url(); ?>" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/eye.svg" alt="Ver" width="24" height="24">
          Ver ilustración
        </a>
      </div>
      <section class="corto-title">
        <p><?php echo get_the_excerpt(); ?></p>
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
          <p><?php echo nl2br(get_the_content()); ?></p>
        </div>

        <div class="alerts">
          <?php
          if ($danger == "on") :
          ?>
            <div class="alert red">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/skull.svg" alt="Ver">
              <div>
                <p class="tittle-alert">Aviso importante</p>
                <p class="alert-text">Este corto puede contener temas que no son aptos para todo tipo de público.</p>
              </div>
            </div>
          <?php
          endif;
          ?>

          <?php
          if ($corto_prizes) :
            foreach ($corto_prizes as $corto_prize) :

              if ($edition === "2022") :
          ?>
                <div class="alert yellow">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fenix.svg" alt="Ver" width="24" height="24">
                  <div>
                    <p class="tittle-alert"><?php echo $corto_prize->name; ?></p>
                    <p class="alert-text"><span class="underline">Edición</span> <span class="underline">2022</span></p>
                  </div>
                </div>
              <?php
              endif;

              if ($edition === "2023") :
              ?>
                <div class="alert purpple">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/frog.svg" alt="Ver" width="24" height="24">
                  <div>
                    <p class="tittle-alert"><?php echo $corto_prize->name; ?></p>
                    <p class="alert-text"><span class="underline">Corto premiado en</span> en <span class="underline">2023</span></p>
                  </div>
                </div>
          <?php
              endif;

            endforeach;
          endif;
          ?>
        </div>
      </div>

      <div class="card-corto">
        <h5 class="underline2">Información</h5>

        <div class="corto-container-colentions">
          <span>Colección</span>
          <p style="text-align: right;"><?php echo $corto_collection[0]->name; ?></p>
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
      <?php echo $youtube; ?>
    </div>

  </main>
  <!-- End page content -->

  <!-- Import footer -->
  <?php get_footer(); ?>
</body>

</html>