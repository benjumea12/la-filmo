<?php
$og_title = of_get_option("og_title");
$og_description = of_get_option("og_description");
$og_image = of_get_option("og_image");



$image_1 = of_get_option("image_1");
$artist_1 = of_get_option("artist_1");
$link_1 = of_get_option("link_1");

$image_2 = of_get_option("image_2");
$artist_2 = of_get_option("artist_2");
$link_2 = of_get_option("link_2");

$image_3 = of_get_option("image_3");
$artist_3 = of_get_option("artist_3");
$link_3 = of_get_option("link_3");

$image_4 = of_get_option("image_4");
$artist_4 = of_get_option("artist_4");
$link_4 = of_get_option("link_4");

$image_5 = of_get_option("image_5");
$artist_5 = of_get_option("artist_5");
$link_5 = of_get_option("link_5");

$image_6 = of_get_option("image_6");
$artist_6 = of_get_option("artist_6");
$link_6 = of_get_option("link_6");


$about_us = of_get_option("about_us");
$history = of_get_option("history");
$vision_mission = of_get_option("vision_mission");
$about_us_2 = of_get_option("about_us_2");
$our_pillars = of_get_option("our_pillars");
$contact = of_get_option("contact");

?>

<!-- Codigo html -->
<!doctype html>
<html lang="es">

<head>
  <title><?php echo $og_title; ?> | Sobre el Proyecto</title>

  <!-- Import default project head content -->
  <?php wp_head(); ?>

  <meta property="og:title" content="<?php echo $og_title; ?>  | Sobre el Proyecto" />
  <meta property="og:description" content="<?php echo $og_description; ?>" />
  <meta property="og:url" content="<?php echo get_site_url(); ?>" />
  <meta property="og:image" content="<?php echo $og_image; ?>" />
  <meta property="og:type" content="web" />
</head>

<body>
  <!-- Import header -->
  <?php get_header(); ?>

  <!-- Page content -->
  <main class="main-page-about">

    <img class="icon-gema" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-lg.svg" alt="Logo de GMA">

    <div class="reverse-md">
      <section class="section-images">
        <div class="image-item image-item-size-1">
          <img src="<?php echo $image_1; ?>" alt="Imagen de GMA">
          <p>Ilustración por <a href="<?php echo $link_1; ?>"><?php echo $artist_1; ?></a></p>
        </div>
        <div class="image-item image-item-size-2">
          <img src="<?php echo $image_2; ?>" alt="Imagen de GMA">
          <p>Ilustración por <a href="<?php echo $link_2; ?>"><?php echo $artist_2; ?></a></p>
        </div>
      </section>

      <section class="section-content">
        <h2 class="section-title">sobre GMA</h2>
        <p class="section-text"><?php echo nl2br($about_us); ?></p>
      </section>
    </div>

    <section class="section-content">
      <h2 class="section-title">historia</h2>
      <p class="section-text"><?php echo nl2br($history); ?></p>
    </section>

    <section class="section-images">
      <div class="image-item image-item-size-1">
        <img src="<?php echo $image_3; ?>" alt="Imagen de GMA">
        <p>Ilustración por <a href="<?php echo $link_3; ?>"><?php echo $artist_3; ?></a></p>
      </div>
      <div class="image-item image-item-size-1">
        <img src="<?php echo $image_4; ?>" alt="Imagen de GMA">
        <p>Ilustración por <a href="<?php echo $link_4; ?>"><?php echo $artist_4; ?></a></p>
      </div>
    </section>

    <section class="section-content">
      <h2 class="section-title">Misión y Visión</h2>
      <p class="section-text"><?php echo nl2br($vision_mission); ?></p>
    </section>

    <section class="section-content">
      <h2 class="section-title">Quiénes somos </h2>
      <p class="section-text"><?php echo nl2br($about_us_2); ?> </p>

      <div class="actions">
        <a href="<?php echo get_site_url(); ?>/artistas" class="btn btn-lg btn-light swiper-slide-button" type="button">Ver artistas</a>
        <a href="<?php echo get_site_url(); ?>/artistas" class="link"><?php echo get_site_url(); ?>/artistas</a>
      </div>
    </section>

    <section class="section-images">
      <div class="image-item image-item-size-3">
        <img src="<?php echo $image_5; ?>" alt="Imagen de GMA">
        <p>Ilustración por <a href="<?php echo $link_5; ?>"><?php echo $artist_5; ?></a></p>
      </div>
      <div class="image-item image-item-size-4">
        <img src="<?php echo $image_6; ?>" alt="Imagen de GMA">
        <p>Ilustración por <a href="<?php echo $link_6; ?>"><?php echo $artist_6; ?></a></p>
      </div>
    </section>

    <section class="section-content">
      <h2 class="section-title">Nuestros pilares</h2>
      <p class="section-text"><?php echo nl2br($our_pillars); ?></p>
    </section>

    <section class="section-content">
      <h2 class="section-title">contacto</h2>
      <p class="section-text"><?php echo nl2br($contact); ?></p>

      <div class="actions">
        <a href="https://discord.gg/G8wdXx3tUm" class="btn btn-lg btn-light swiper-slide-button" type="button">Ir a discord</a>
        <a href="https://discord.gg/G8wdXx3tUm" class="link">https://discord.gg/G8wdXx3tUm</a>
      </div>
    </section>

  </main>
  <!-- End page content -->

  <!-- Import footer -->
  <?php get_footer(); ?>

</body>

</html>