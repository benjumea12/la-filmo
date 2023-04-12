<?php
the_post();
$post_terms = get_the_terms(get_the_ID(), "artist_type");

$instagram = get_post_meta(get_the_ID(), "artist_instagram", true);
$tiktok = get_post_meta(get_the_ID(), $prefix_artist . "tiktok", true);
$youtube = get_post_meta(get_the_ID(), $prefix_artist . "youtube", true);
$twitter = get_post_meta(get_the_ID(), $prefix_artist . "twitter", true);
$facebook = get_post_meta(get_the_ID(), $prefix_artist . "facebook", true);
$paypal = get_post_meta(get_the_ID(), $prefix_artist . "paypal", true);

/* Argumentos de consulta de para cortometraje */
$args_cortos = array(
  'post_type' => 'cortometraje',
  'post_status' => 'publish',
  'posts_per_page' => -1,
);

$the_query_cortos = new WP_Query($args_cortos);

$cortos_ids = [];
$cortos_of_artist = array();

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
        "edition" => get_post_meta($corto->ID, $prefix_cortos . "edition", true)
      ));
    endif;
  endforeach;
endif;
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
  <main class="main-artist">
    <section class="artist-header">
      <a href="<?php echo $paypal; ?>" class="artist-pay">Apoyar vía <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/paypal.svg" alt=""> </a>

      <div class="artist-header-image">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Avatar de <?php echo get_the_title(); ?>">
      </div>
      <div class="artist-header-content">
        <h2 class="artist-header-subtitle"><?php echo $post_terms[0]->name; ?></h2>
        <h1 class="artist-header-title"><?php echo get_the_title(); ?></h1>
      </div>
    </section>

    <section class="artist-detail">
      <div class="artist-content">
        <h3 class="section-title">Sobre mi</h3>

        <p><?php echo nl2br(get_the_content()); ?></p>

        <h4 class="section-title">Redes sociales</h4>
        <div class="redes">
          <a href="<?php echo $instagram; ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/instagram.svg" alt="Icono de Intagram">
          </a>
          <a href="<?php echo $youtube; ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/youtube.svg" alt="Icono de Youtube">
          </a>
          <a href="<?php echo $twitter; ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/twitter.svg" alt="Icono de Twitter">
          </a>
          <a href="<?php echo $tiktok; ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/tiktok.svg" alt="Icono de TikTok">
          </a>
          <a href="<?php echo $facebook; ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook.svg" alt="Icono de Facebook">
          </a>
        </div>
      </div>
      <div class="artist-cortos">

        <h3 class="section-title">Mis trabajos</h3>
        <div class="list-cortos">
          <?php
          if ($cortos_of_artist) :
            foreach ($cortos_of_artist as $corto_artist) :
          ?>
              <a href="<?php echo $corto_artist["permalink"]; ?>" class="card-popular">
                <div class="swiper-slide-image">
                  <img src="<?php echo $corto_artist["thumbnail_url"]; ?>" alt="Ilustración del corto_artist '<?php echo $corto_artist["title"]; ?>'">
                </div>
                <div class="swiper-slide-content">
                  <h4 class="swiper-slide-title"><?php echo $corto_artist["title"]; ?></h4>
                  <p class="swiper-slide-text"><?php echo $corto_artist["edition"]; ?><span class="separator"></span></p>
                </div>
              </a>
          <?php
            endforeach;
          endif;
          ?>
        </div>

      </div>
    </section>
  </main>
  <!-- End page content -->


  <!-- Import footer -->
  <?php get_footer(); ?>

</body>

</html>