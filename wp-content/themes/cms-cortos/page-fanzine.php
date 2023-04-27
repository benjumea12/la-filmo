<?php
$url_fanzine = of_get_option("url_fanzine");
?>

<!-- Codigo html -->
<!doctype html>
<html lang="es">

<head>
  <title>GMA | <?php echo $selected_corto_collection->name; ?></title>

  <!-- Import default project head content -->
  <?php wp_head(); ?>

  <!-- <meta property="og:title" content="<?php echo $selected_corto_collection->name; ?>" />
  <meta property="og:description" content="..." />
  <meta property="og:url" content="<?php echo get_site_url(); ?>/coleccion/?coleccion=<?php echo $selected_corto_collection->slug; ?>" />
  <meta property="og:image" content="<?php echo z_taxonomy_image_url($selected_corto_collection->term_id); ?>" />
  <meta property="og:type" content="article" /> -->
</head>

<body>

  <!-- Import header -->
  <?php get_header(); ?>

  <!-- Page content -->
  <main class="main-page-fanzine">
    <iframe class="iframe-fanzine" src="<?php echo $url_fanzine; ?>" frameborder="0"></iframe>
    <a href="<?php echo $url_fanzine; ?>" target="_blank" class="btn btn-primary" type="button">Abrir en una pestaña</a>
  </main>
  <!-- End page content -->

  <!-- Import footer -->
  <?php get_footer(); ?>
</body>

</html>