<?php
$url_fanzine = of_get_option("url_fanzine");
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
    <iframe class="iframe-fanzine" src="<?php echo $url_fanzine; ?>" frameborder="0"></iframe>
    <a href="<?php echo $url_fanzine; ?>" class="portada">
      <img src="<?php echo $image_fanzine; ?>" alt="Portada Fanzine">
    </a>
    <a href="<?php echo $url_fanzine; ?>" target="_blank" class="btn btn-primary" type="button">Abrir en una pestaña</a>
  </main>
  <!-- End page content -->

  <!-- Import footer -->
  <?php get_footer(); ?>

</body>

</html>