<?php
$description_fanzine = of_get_option("description_fanzine");
$image_fanzine = of_get_option("image_fanzine");

$og_title = of_get_option("og_title");
?>

<!-- Codigo html -->
<!doctype html>
<html lang="es">

<head>
  <title><?php echo $og_title; ?> | El Fanzine Maldito</title>

  <!-- Import default project head content -->
  <?php wp_head(); ?>

  <meta property="og:title" content="El Fanzine Maldito" />
  <meta property="og:description" content="<?php echo $description_fanzine; ?>" />
  <meta property="og:url" content="<?php echo get_site_url(); ?>/fanzine" />
  <meta property="og:image" content="<?php echo $image_fanzine; ?>" />
  <meta property="og:type" content="article" />

</head>

<body>

  <!-- Import header -->
  <?php get_header(); ?>

  <!-- Page content -->
  <main class="main-page-publicaciones">
    <img class="image-page-publicaciones" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-archivo.png" alt="">

    <section class="new-publication">
      <div class="publication-content">
        <span class="publication-beagle">
          Nuevo
        </span>
        <h1>FANZINE MALDITO 2</h1>
        <p>Sumérgete en el universo del fanzines a través de historias únicas donde la creatividad y la pasión se encuentran en cada página.</p>
      </div>
      <div class="pubication-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fanzine-2.png" alt="">
      </div>
    </section>
  </main>
  <!-- End page content -->

  <!-- Import footer -->
  <?php get_footer(); ?>

</body>

</html>