<?php
$corto_collections = get_terms("corto_collection");

$og_title = of_get_option("og_title");
$og_description = of_get_option("og_description");
$og_image = of_get_option("og_image");
?>

<!-- Codigo html -->
<!doctype html>
<html lang="es">

<head>
  <title><?php echo $og_title; ?> | Colecciónes</title>

  <!-- Import default project head content -->
  <?php wp_head(); ?>

  <meta property="og:title" content="<?php echo $og_title; ?> | Colecciónes" />
  <meta property="og:description" content="<?php echo $og_description; ?>" />
  <meta property="og:url" content="<?php echo get_site_url(); ?>" />
  <meta property="og:image" content="<?php echo $og_image; ?>" />
  <meta property="og:type" content="web" />
</head>

<body>

  <!-- Import header -->
  <?php get_header(); ?>

  <!-- Page content -->
  <main class="main-page-collections">
    <h1 class="title">Conoce nuestras colecciónes</h1>

    <div class="collections-list">
      <?php
      if ($corto_collections) :
        $corto_collections = array_reverse($corto_collections);
        foreach ($corto_collections as $corto_collection) :
      ?>
          <!-- Swiper slide -->
          <a href="<?php echo get_site_url(); ?>/coleccion/?coleccion=<?php echo $corto_collection->slug; ?>" class="card-collection">
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

  </main>
  <!-- End page content -->

  <!-- Import footer -->
  <?php get_footer(); ?>
</body>

</html>