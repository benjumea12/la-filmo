<?php
// Get all collections of shorts
$corto_collections = get_terms("corto_collection");

// "View Shorter" Pager Indicators
$posts_per_page = 12; // 12 shorts are shown per page
$next = 1; // Variable that carries the number of the next page

// Check if the parameter "page" exists
if (isset($_GET["pagina"])) {
  // In case it exists, 12 more shorts are added to the previous query
  $pagina = intval($_GET["pagina"]);
  $next = $pagina + 1;
  $posts_per_page = $next * 12;
}

// Home Slider Query Arguments
$args_sliders = array(
  'post_type' => 'slider-home',
  'post_status' => 'publish',
  'posts_per_page' => -1,
);

// Short Film Query Arguments
$args_cortos = array(
  'post_type' => 'cortometraje',
  'post_status' => 'publish',
  'order' => 'DESC',
  'posts_per_page' => $posts_per_page,
);

// Consult information for Open Graph labels
$og_title = of_get_option("og_title");
$og_description = of_get_option("og_description");
$og_image = of_get_option("og_image");
?>

<!doctype html>
<html lang="es">

<head>
  <title><?php echo $og_title; ?> | Inicio</title>

  <!-- Import default project head content -->
  <?php wp_head(); ?>

  <!-- Open Graph labels -->
  <meta property="og:title" content="<?php echo $og_title; ?> Inicio" />
  <meta property="og:description" content="<?php echo $og_description; ?>" />
  <meta property="og:url" content="<?php echo get_site_url(); ?>" />
  <meta property="og:image" content="<?php echo $og_image; ?>" />
  <meta property="og:type" content="web" />
</head>

<body>

  <!-- Import header from "header.php" -->
  <?php get_header(); ?>

  <!-- Page content -->
  <main>

    <!-- Swiper Home -->
    <section class="swiper-contain">
      <div class="swiper swiper-home">
        <div class="swiper-wrapper">
          <?php
          /* Consult Sliders Home¨*/
          $the_query_sliders = new WP_Query($args_sliders);

          // Map Sliders Home
          if ($the_query_sliders->have_posts()) :
            while ($the_query_sliders->have_posts()) :
              $the_query_sliders->the_post();
              // Extract custom meta data
              $text_action = get_post_meta(get_the_ID(), $prefix_sliders . "text_action", true);
              $action = get_post_meta(get_the_ID(), $prefix_sliders . "action", true);
          ?>
              <!-- Swiper slide -->
              <section class="swiper-slide">
                <img class="swiper-slide-image" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), [1080, 462]); ?>" alt="Imagen de corto '<?php echo get_the_title(); ?>'">
                <div class="swiper-slide-content">
                  <h2 class="swiper-slide-title"><?php echo get_the_title(); ?></h2>
                  <p class="swiper-slide-text"><?php echo get_the_excerpt(); ?></p>
                  <a href="<?php echo $action; ?>" class="btn btn-lg btn-primary swiper-slide-button" role="button"><?php echo $text_action; ?></a>
                </div>
              </section>
              <!-- End swiper slide -->
          <?php
            endwhile;
          endif;
          /* End consult and map Sliders Home */
          ?>
        </div>
        <div class="swiper-action-basic swiper-next swiper-next-home">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-light-right.svg" alt="Flecha de siguiente del slide">
        </div>
        <div class="swiper-action-basic swiper-prev swiper-prev-home">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-light-left.svg" alt="Flecha de anterior del slide">
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </section>
    <!-- End Swiper Home -->

    <!-- Section collections -->
    <section class="section-basic swiper-collections-contain">
      <header class="section-basic-header">
        <h3 class="section-basic-title title-2">Explorar por <span class="text-underline">Colecciones</span></h3>
        <a href="<?php echo get_site_url(); ?>/colecciones" class="section-basic-action">VER TODAS</a>
      </header>

      <div class="section-home-content swiper swiper-collections swiper-collections-home">
        <div class="swiper-wrapper">
          <?php
          if ($corto_collections) :
            // Map short collections
            $corto_collections = array_reverse($corto_collections);
            foreach ($corto_collections as $corto_collection) :
          ?>
              <!-- Swiper slide -->
              <a href="<?php echo get_site_url(); ?>/coleccion/?coleccion=<?php echo $corto_collection->slug; ?>" class="swiper-slide card-collection">
                <img class="swiper-slide-image" src="<?php echo z_taxonomy_image_url($corto_collection->term_id, [400, 225]); ?>" alt="Imagen de l  coleccion '<?php echo $corto_collection->name; ?>'">
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
        <div class="swiper-action-basic swiper-next swiper-next-collections">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-light-right.svg" alt="Flecha de siguiente del slide">
        </div>
        <div class="swiper-action-basic swiper-prev swiper-prev-collections">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-light-left.svg" alt="Flecha de anterior del slide">
        </div>
      </div>
    </section>
    <!-- End section collections -->

    <!-- Section popular -->
    <section class="section-basic swiper-popular-contain">
      <header class="section-basic-header">
        <h3 class="section-basic-title title-2"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.svg" alt="Icono de 'estrella'">Cortos Populares</h3>
      </header>

      <div class="section-home-content swiper swiper-popular">
        <div class="swiper-wrapper">
          <!-- Swiper slide -->
          <?php
          /* Consult and map the shorts Home */
          $the_query_cortos = new WP_Query(array(
            'post_type' => 'cortometraje',
            'post_status' => 'publish',
            'posts_per_page' => 10,
            'meta_key' => 'post_views',
            'orderby' => 'meta_value_num',
            'order' => 'DESC'
          ));

          if ($the_query_cortos->have_posts()) :
            while ($the_query_cortos->have_posts()) :
              $the_query_cortos->the_post();
              // Extract custom meta data
              $edition = get_post_meta(get_the_ID(), $prefix_cortos . "edition", true);
              $duration = get_post_meta(get_the_ID(), $prefix_cortos . "duration", true);
          ?>
              <!-- Swiper slide -->
              <a href="<?php echo get_the_permalink(); ?>" class="swiper-slide card-popular">
                <div class="swiper-slide-image">
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), [350, 196]); ?>; ?>" alt="Ilustración del corto '<?php echo get_the_title(); ?>'">
                </div>
                <div class="swiper-slide-content">
                  <h4 class="swiper-slide-title"><?php echo get_the_title(); ?></h4>
                  <p class="swiper-slide-text"><?php echo $edition; ?><span class="separator"></span><?php echo $duration; ?> minutos</p>
                </div>
              </a>
              <!-- End swiper slide -->
          <?php
            endwhile;
          endif;
          /* End consult and map the shorts Home */
          ?>
        </div>
        <div class="swiper-action-basic swiper-next swiper-next-popular swiper-action-popular">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-light-right.svg" alt="Flecha de siguiente del slide">
        </div>
        <div class="swiper-action-basic swiper-prev swiper-prev-popular swiper-action-popular">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-light-left.svg" alt="Flecha de anterior del slide">
        </div>
      </div>
    </section>
    <!-- End section popular -->

    <!-- Section popular -->
    <section class="section-basic explore-stories-contain">
      <header class="section-basic-header">
        <h3 class="section-basic-title title-2"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/explore.svg" alt="icono de 'explorar">Explora más historias</h3>
      </header>

      <div class="explore-stories">
        <?php
        /* Consult and map the shorts Home */
        $the_query_cortos = new WP_Query($args_cortos);

        if ($the_query_cortos->have_posts()) :
          while ($the_query_cortos->have_posts()) :
            $the_query_cortos->the_post();
        ?>
            <a href="<?php echo get_the_permalink(); ?>" class="explore-card">
              <img class="explore-image" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), [350, 196]); ?>" alt="Ilustración del corto '<?php echo get_the_title(); ?>'">
            </a>
        <?php
          endwhile;
        endif;
        /* End consult and map the shorts Home */
        ?>
      </div>

      <footer class="section-basic-footer">
        <a href="?pagina=<?php echo $next; ?>" class="btn btn-lg btn-more">Ver más</a>
      </footer>
    </section>
    <!-- End section popular -->

  </main>
  <!-- End page content -->


  <!-- Import footer -->
  <?php get_footer(); ?>

  <?php
  if (isset($_GET["pagina"])) :
  ?>
    <script>
      /* Event that is executed when the user clicks on "see more" and takes the scroll to continue with the shorts he was seeing */
      $(document).ready(function() {
        if ($(window).width() < 768) {
          $("html, body").animate({
            scrollTop: `${$(document).height()-3600}px`
          }, 0);
        } else {
          $("html, body").animate({
            scrollTop: `${$(document).height()-1100}px`
          }, 0);
        }
      });
    </script>
  <?php
  endif;
  ?>

</body>

</html>