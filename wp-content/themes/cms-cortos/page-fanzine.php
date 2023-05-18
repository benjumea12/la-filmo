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
  <main class="main-page-fanzine">
    <a href="<?php echo get_site_url(); ?>/fanzine-2023" target="_blank" class="portada">
      <img src="https://generacionmaldita.com/wp-content/uploads/2020/04/Captura-de-pantalla-2023-05-01-124411.png" alt="Portada Fanzine">
      <!-- <img src="<?php echo $image_fanzine; ?>" alt="Portada Fanzine"> -->
    </a>

    <a href="<?php echo get_site_url(); ?>/fanzine-2023" target="_blank" class="btn btn-primary" role="button">Ver Fanzine</a>
  </main>
  <!-- End page content -->

  <!-- Import footer -->
  <?php get_footer(); ?>

</body>

</html>