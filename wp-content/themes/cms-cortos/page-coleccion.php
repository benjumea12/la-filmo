<?php
$selected_corto_collection;

$coleccion = $_GET["coleccion"];
$corto_collections = get_terms("corto_collection");

if ($corto_collections) :
  foreach ($corto_collections as $corto_collection) :
    if ($corto_collection->slug === $coleccion) {
      $selected_corto_collection = $corto_collection;
    }
  endforeach;
endif;

$args_cortos = array(
  'post_type' => 'cortometraje',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'tax_query' => array(
    array(
      'taxonomy' => 'corto_collection',
      'field' => 'slug',
      'terms' => $selected_corto_collection->slug,
    )
  )
);



$selected_corto_collection_data = get_term_meta($selected_corto_collection->term_id);
?>

<!-- Codigo html -->
<!doctype html>
<html lang="es">

<head>
  <title>GMA | <?php echo $selected_corto_collection->name; ?></title>

  <!-- Import default project head content -->
  <?php wp_head(); ?>

  <meta property="og:title" content="<?php echo $selected_corto_collection->name; ?>" />
  <meta property="og:description" content="..." />
  <meta property="og:url" content="<?php echo get_site_url(); ?>/coleccion/?coleccion=<?php echo $selected_corto_collection->slug; ?>" />
  <meta property="og:image" content="<?php echo z_taxonomy_image_url($selected_corto_collection->term_id); ?>" />
  <meta property="og:type" content="article" />
</head>

<body>

  <!-- Import header -->
  <?php get_header(); ?>

  <!-- Page content -->
  <main class="main-page-collection">
    <header class="header-collection">
      <img class="image-collection" src="<?php echo z_taxonomy_image_url($selected_corto_collection->term_id); ?>" alt="">

      <div class="header-content">
        <h1 class="title">Cortos de <span><?php echo $selected_corto_collection->name; ?></span></h1>

        <div class="illustrator">
          <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/brush.svg" alt="">
          <p>
            Ilustración por
            <a href="<?php echo $selected_corto_collection_data["collection_red"][0]; ?>" target="_blank">
              <?php echo $selected_corto_collection_data["collection_artist"][0]; ?>
            </a>
          </p>
        </div>
      </div>
    </header>

    <div class="list-cortos">
      <!-- Swiper slide -->
      <?php
      /* Consultar y mapear los cortos Home */
      $the_query_cortos = new WP_Query($args_cortos);

      if ($the_query_cortos->have_posts()) :
        while ($the_query_cortos->have_posts()) :
          $the_query_cortos->the_post();
          $edition = get_post_meta(get_the_ID(), $prefix_cortos . "edition", true);
          $duration = get_post_meta(get_the_ID(), $prefix_cortos . "duration", true);
      ?>
          <a href="<?php echo get_the_permalink(); ?>" class="card-popular">
            <div class="swiper-slide-image">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Ilustración del corto '<?php echo get_the_title(); ?>'">
            </div>
            <div class="swiper-slide-content">
              <h4 class="swiper-slide-title"><?php echo get_the_title(); ?></h4>
              <p class="swiper-slide-text"><?php echo $edition; ?><span class="separator"></span><?php echo $duration; ?> minutos</p>
            </div>
          </a>
      <?php
        endwhile;
      endif;
      /* Fin Consultar y mapear los cortos Home */
      ?>
    </div>

  </main>
  <!-- End page content -->

  <!-- Import footer -->
  <?php get_footer(); ?>
</body>

</html>