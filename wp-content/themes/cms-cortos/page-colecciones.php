<?php
$corto_collections = get_terms("corto_collection");
?>

<!-- Codigo html -->
<!doctype html>
<html lang="es">

<head>
  <title>GMA | Colecciónes</title>

  <!-- Import default project head content -->
  <?php wp_head(); ?>
</head>

<body>

  <!-- Import header -->
  <?php get_header(); ?>

  <!-- Page content -->
  <main class="main-page-collections">
    <h1 class="title">Ver cortos por colección</h1>

    <div class="collections-list">
      <?php
      if ($corto_collections) :
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