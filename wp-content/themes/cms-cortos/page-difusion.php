<?php
$og_title = of_get_option("og_title");
$og_description = of_get_option("og_description");
$og_image = of_get_option("og_image");

$countries = get_terms("place_country");
?>

<!-- Codigo html -->
<!doctype html>
<html lang="es">

<head>
  <title><?php echo $og_title; ?> | Espacios</title>

  <!-- Import default project head content -->
  <?php wp_head(); ?>

  <meta property="og:title" content="<?php echo $og_title; ?>  | Espacios" />
  <meta property="og:description" content="<?php echo $og_description; ?>" />
  <meta property="og:url" content="<?php echo get_site_url(); ?>" />
  <meta property="og:image" content="<?php echo $og_image; ?>" />
  <meta property="og:type" content="web" />
</head>

<body>

  <!-- Import header -->
  <?php get_header(); ?>

  <main class="main-page-difusion">
    <header class="header-page">
      <div class="header-top">
        <span>24.06.23</span>
        <span>GENERACiÓN MALDITA</span>
      </div>
      <div class="header-content">
        <figure class="figure-1">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/difusion-1.png" alt="">
        </figure>
        <div class="header-info">
          <h1>DISEÑo. Documentación. Información</h1>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/estreno.png" alt="">
          <p>Guía completa sobre el estreno internacional de la Genius Party</p>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-down.svg" alt="">
        </div>
        <figure class="figure-1">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/difusion-2.png" alt="">
        </figure>
      </div>
    </header>
  </main>

  <!-- Import footer -->
  <?php get_footer(); ?>
</body>

</html>