<?php
the_post();
$post_terms = get_the_terms(get_the_ID(), "artist_type");

$instagram = get_post_meta(get_the_ID(), $prefix_artist . "instagram", true);
$tiktok = get_post_meta(get_the_ID(), $prefix_artist . "tiktok", true);
$youtube = get_post_meta(get_the_ID(), $prefix_artist . "youtube", true);
$twitter = get_post_meta(get_the_ID(), $prefix_artist . "twitter", true);
$facebook = get_post_meta(get_the_ID(), $prefix_artist . "facebook", true);
$linkedin = get_post_meta(get_the_ID(), $prefix_artist . "linkedin", true);
$artstation = get_post_meta(get_the_ID(), $prefix_artist . "artstation", true);
$behance = get_post_meta(get_the_ID(), $prefix_artist . "behance", true);

$paylink = get_post_meta(get_the_ID(), $prefix_artist . "paypal", true);
$pay_opcion = get_post_meta(get_the_ID(), $prefix_artist . "pay_opcion", true);

$others_works = get_post_meta(get_the_ID(), $prefix_artist . "others_works", true);

$others = get_post_meta(get_the_ID(), $prefix_artist . "others", true);
$description_others = get_post_meta(get_the_ID(), $prefix_artist . "description_others", true);

$others_title = "Trabajos";

/* Argumentos de consulta de para cortometraje */
$args_cortos = array(
  'post_type' => 'cortometraje',
  'post_status' => 'publish',
  'posts_per_page' => -1,
);

$cortos_of_artist = array();

$the_query_cortos = new WP_Query($args_cortos);

$cortos_ids = [];

// Confirmar que existan cortos creados
if ($the_query_cortos->have_posts()) :
  $cortos = $the_query_cortos->posts;
  // Mapear todos los cortos existentes
  foreach ($cortos as $corto) :
    $include_corto = false;
    // Verificar que el corto no se haya incluido en "cortos_of_artist"
    if (!in_array($corto->ID, $cortos_ids)) :
      $illustrator = get_post_meta($corto->ID, $prefix_cortos . "illustrator", true);
      // Verificar si artista actual es ilustrador del corto
      if ($illustrator == get_the_ID()) :
        $include_corto = true;
        array_push($cortos_ids, get_the_ID());
      else :
        // Verificar si artista actual es creador del corto
        $artists = get_post_meta($corto->ID, $prefix_cortos . "created_at", true);
        if ($artists) :
          // Mapear todos los artistas
          foreach ($artists as $artist) :
            // Verificar si artista actual es creador del corto
            if ($artist["shortfilm_author"] == get_the_ID()) :
              $include_corto = true;
              array_push($cortos_ids, get_the_ID());
            endif;
          endforeach;
        endif;
      endif;
    endif;

    if ($include_corto) :
      // Crear array de cortos en los que participó el artista actual
      array_push($cortos_of_artist, array(
        "title" => $corto->post_title,
        "thumbnail_url" => get_the_post_thumbnail_url($corto->ID),
        "permalink" => get_permalink($corto->ID),
        "edition" => get_post_meta($corto->ID, $prefix_cortos . "edition", true),
        "duration" => get_post_meta($corto->ID, $prefix_cortos . "duration", true)
      ));
    endif;
  endforeach;
endif;

?>

<!doctype html>
<html lang="es">

<head>
  <title>GMA | <?php echo get_the_title(); ?></title>
  <!-- Import default project head content -->
  <?php wp_head(); ?>

  <meta property="og:title" content="<?php echo get_the_title(); ?>" />
  <meta property="og:description" content="<?php echo get_the_excerpt(); ?>" />
  <meta property="og:url" content="<?php echo get_the_permalink(); ?>" />
  <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>" />
  <meta property="og:type" content="article" />
</head>

<body>

  <!-- Import header -->
  <?php get_header(); ?>


  <!-- Page content -->
  <main class="main-artist">
    <section class="artist-header">
      <?php
      if ($pay_opcion && $paylink) :
        switch ($pay_opcion) {
          case 'paypal':
      ?>
            <a href="<?php echo $paylink; ?>" class="artist-pay">Apoyar vía <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/paypal.svg" alt=""></a>
          <?php
            break;
          case 'kofi':
          ?>
            <a href="<?php echo $paylink; ?>" class="artist-pay kofi">Apoyar vía <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/kofi.svg" alt=""></a>
          <?php
            break;
          case 'cafecito':
          ?>
            <a href="<?php echo $paylink; ?>" class="artist-pay cafecito">Apoyar vía <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cafecito.svg" alt=""></a>
          <?php
            break;
          case 'matecito':
          ?>
            <a href="<?php echo $paylink; ?>" class="artist-pay matecito">Apoyar vía <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/matecito.svg" alt=""></a>
      <?php
            break;
        }

      endif;
      ?>
      <div class="artist-header-image">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Avatar de '<?php echo get_the_title(); ?>'">
      </div>
      <div class="artist-header-content">
        <?php
        if ($post_terms && count($post_terms) > 0) :
          foreach ($post_terms as $term) :
        ?>
            <h2 class="artist-header-subtitle"><?php echo $term->name; ?></h2>
        <?php
          endforeach;
        endif;
        ?>
        <h1 class="artist-header-title"><?php echo get_the_title(); ?></h1>
      </div>
    </section>

    <section class="artist-detail">
      <div class="artist-content">
        <h3 class="section-title">Sobre mi</h3>

        <p><?php echo nl2br(get_the_content()); ?></p>

        <h4 class="section-title">Redes sociales</h4>
        <div class="redes">
          <?php
          if ($instagram) :
          ?>
            <a href="<?php echo $instagram; ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/instagram.svg" alt="Icono de Intagram">
            </a>
          <?php
          endif;

          if ($youtube) :
          ?>
            <a href="<?php echo $youtube; ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/youtube.svg" alt="Icono de Youtube">
            </a>
          <?php
          endif;

          if ($twitter) :
          ?>
            <a href="<?php echo $twitter; ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/twitter.svg" alt="Icono de Twitter">
            </a>
          <?php
          endif;

          if ($tiktok) :
          ?>
            <a href="<?php echo $tiktok; ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/tiktok.svg" alt="Icono de TikTok">
            </a>
          <?php
          endif;

          if ($facebook) :
          ?>
            <a href="<?php echo $facebook; ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook.svg" alt="Icono de Facebook">
            </a>
          <?php
          endif;

          if ($artstation) :
          ?>
            <a href="<?php echo $artstation; ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/artstation.svg" alt="Icono de Artstation">
            </a>
          <?php
          endif;

          if ($behance) :
          ?>
            <a href="<?php echo $behance; ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/behance.svg" alt="Icono de Artstation">
            </a>
          <?php
          endif;

          if ($linkedin) :
          ?>
            <a href="<?php echo $linkedin; ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/linkedin.svg" alt="Icono de LinkedIn">
            </a>
          <?php
          endif;
          ?>

        </div>
      </div>
      <div class="artist-cortos">

        <?php
        if ($cortos_of_artist) :
          if (count($cortos_of_artist) > 0) :
            $others_title = "Otros trabajos";
        ?>
            <h3 class="section-title">Mis trabajos</h3>
            <div class="list-cortos">
              <?php
              foreach ($cortos_of_artist as $corto_artist) :
              ?>
                <a href="<?php echo $corto_artist["permalink"]; ?>" class="card-popular">
                  <div class="swiper-slide-image">
                    <img src="<?php echo $corto_artist["thumbnail_url"]; ?>" alt="Ilustración del corto_artist '<?php echo $corto_artist["title"]; ?>'">
                  </div>
                  <div class="swiper-slide-content">
                    <h4 class="swiper-slide-title"><?php echo $corto_artist["title"]; ?></h4>
                    <p class="swiper-slide-text"><?php echo $corto_artist["edition"]; ?><span class="separator"></span><?php echo $corto_artist["duration"]; ?> minutos</p>
                  </div>
                </a>
              <?php
              endforeach;
              ?>
            </div>
          <?php
          endif;
        endif;

        // SECCION OTROS FANZINE Y OTROS TRABAJOS
        if ($others_works && count($others_works) > 0) :
          ?>
          <h3 class="section-title"><?php echo $others_title; ?></h3>

          <div class="list-cortos">
            <?php
            foreach ($others_works as $other_works) :
              $link = $other_works[$prefix_artist . "image_other_work"];

              if (array_key_exists($prefix_artist . "link_other_work", $other_works) && $other_works[$prefix_artist . "link_other_work"] !== "") {
                $link = $other_works[$prefix_artist . "link_other_work"];
              }
            ?>
              <a href="<?php echo $link; ?>" class="card-popular card-popular-work">
                <div class="swiper-slide-image">
                  <img src="<?php echo $other_works[$prefix_artist . "image_other_work"]; ?>" alt="Imagen de '<?php echo $other_works[$prefix_artist . "title_other_work"]; ?>'">
                </div>
                <div class="swiper-slide-content">
                  <h4 class="swiper-slide-title"><?php echo $other_works[$prefix_artist . "title_other_work"]; ?></h4>
                  <p class="swiper-slide-text"><?php echo $other_works[$prefix_artist . "year_other_work"]; ?></p>
                </div>
              </a>
            <?php
            endforeach;
            ?>
          </div>
        <?php
        endif;


        // SECCION OTROS CONTENIDOS
        if ($others && count($others) > 0) :
        ?>
          <h3 class="section-title">Participaciones</h3>
          <?php

          if ($description_others) :
          ?>
            <p class="other-decription"><?php echo $description_others; ?></p>
          <?php
          endif;
          ?>
          <div class="list-cortos">
            <?php
            foreach ($others as $other) :
            ?>
              <a href="<?php echo $other; ?>" class="card-popular">
                <div class="swiper-slide-image">
                  <img src="<?php echo $other; ?>" alt="Ilustración del corto_artist '">
                </div>
              </a>
            <?php
            endforeach;
            ?>
          </div>
        <?php
        endif;
        ?>

      </div>
    </section>
  </main>
  <!-- End page content -->


  <!-- Import footer -->
  <?php get_footer(); ?>

</body>

</html>