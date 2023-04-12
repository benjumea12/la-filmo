<?php

$corto_collections = get_terms("corto_collection");

/* Argumentos de consulta de Sliders Home */
$args_sliders = array(
  'post_type' => 'slider-home',
  'post_status' => 'publish',
  'posts_per_page' => -1,
);

/* Argumentos de consulta de Sliders Home */
$args_cortos = array(
  'post_type' => 'cortometraje',
  'post_status' => 'publish',
  'posts_per_page' => -1,
);
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
          <?php
          /* Consultar y mapear los Sliders Home */
          $the_query_sliders = new WP_Query($args_sliders);
          $prefix_sliders = 'slider_home_';

          if ($the_query_sliders->have_posts()) :
            while ($the_query_sliders->have_posts()) :
              $the_query_sliders->the_post();
              $action = get_post_meta(get_the_ID(), $prefix_sliders . "action", true);
          ?>
              <section class="swiper-slide">
                <img class="swiper-slide-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/swiper-image.png" alt="Imagen de corto 'Nombre del corto'">
                <div class="swiper-slide-content">
                  <h2 class="swiper-slide-title"><?php echo get_the_title(); ?></h2>
                  <p class="swiper-slide-text"><?php echo get_the_excerpt(); ?></p>
                  <a href="<?php echo $action; ?>" class="btn btn-lg btn-primary swiper-slide-button" type="button">Ver ahora</a>
                </div>
              </section>
          <?php
            endwhile;
          endif;
          /* Fin Consultar y mapear los Sliders Home */
          ?>
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
          <?php
          /* Consultar y mapear los cortos Home */
          $the_query_cortos = new WP_Query($args_cortos);

          if ($the_query_cortos->have_posts()) :
            while ($the_query_cortos->have_posts()) :
              $the_query_cortos->the_post();
              $edition = get_post_meta(get_the_ID(), $prefix_cortos . "edition", true);

          ?>
              <a href="<?php echo get_the_permalink(); ?>" class="swiper-slide card-popular">
                <div class="swiper-slide-image">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Ilustración del corto '<?php echo get_the_title(); ?>'">
                </div>
                <div class="swiper-slide-content">
                  <h4 class="swiper-slide-title"><?php echo get_the_title(); ?></h4>
                  <p class="swiper-slide-text"><?php echo $edition; ?><span class="separator"></span></p>
                </div>
              </a>
          <?php
            endwhile;
          endif;
          /* Fin Consultar y mapear los cortos Home */
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
    <!-- End section popular -->

    <!-- Section popular -->
    <section class="section-basic explore-stories-contain">
      <header class="section-basic-header">
        <h3 class="section-basic-title title-2"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/explore.svg" alt="Flecha de item anterior del slide">Explora más historias</h3>
      </header>

      <div class="explore-stories">
        <?php
        /* Consultar y mapear los cortos Home */
        $the_query_cortos = new WP_Query($args_cortos);

        if ($the_query_cortos->have_posts()) :
          while ($the_query_cortos->have_posts()) :
            $the_query_cortos->the_post();
        ?>
            <a href="<?php echo get_the_permalink(); ?>" class="explore-card">
              <img class="explore-image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Ilustración del corto '<?php echo get_the_title(); ?>'">
            </a>
        <?php
          endwhile;
        endif;
        /* Fin Consultar y mapear los cortos Home */
        ?>
      </div>

      <footer class="section-basic-footer">
        <a href="<?php echo get_site_url(); ?>/cortometrajes" class="btn btn-lg btn-more">Ver más</a>
      </footer>
    </section>
    <!-- End section popular -->

  </main>
  <!-- End page content -->


  <!-- Import footer -->
  <?php get_footer(); ?>

</body>

</html>