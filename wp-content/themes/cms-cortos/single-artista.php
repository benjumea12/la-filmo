<?php
the_post();
$post_terms = get_the_terms(get_the_ID(), "artist_type");

$instagram = get_post_meta(get_the_ID(), "artist_instagram", true);
$tiktok = get_post_meta(get_the_ID(), $prefix_artist . "tiktok", true);
$youtube = get_post_meta(get_the_ID(), $prefix_artist . "youtube", true);
$twitter = get_post_meta(get_the_ID(), $prefix_artist . "twitter", true);
$facebook = get_post_meta(get_the_ID(), $prefix_artist . "facebook", true);
$paypal = get_post_meta(get_the_ID(), $prefix_artist . "paypal", true);

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

        <h3 class="section-title">Mis tabajos</h3>
        <div class="list-cortos">
          <a href="<?php echo get_site_url(); ?>/cortometrajes" class="card-popular">
            <div class="swiper-slide-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/popular-1.png" alt="Imagen de corto 'Nombre del corto'">
            </div>
            <div class="swiper-slide-content">
              <h4 class="swiper-slide-title">El extraño mundo de Gumball</h4>
              <p class="swiper-slide-text">2022 <span class="separator"></span> 5 minutos</p>
            </div>
          </a>
          <a href="<?php echo get_site_url(); ?>/cortometrajes" class="card-popular">
            <div class="swiper-slide-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/popular-2.png" alt="Imagen de corto 'Nombre del corto'">
            </div>
            <div class="swiper-slide-content">
              <h4 class="swiper-slide-title">El extraño mundo de Gumball</h4>
              <p class="swiper-slide-text">2022 <span class="separator"></span> 5 minutos</p>
            </div>
          </a>
        </div>

      </div>
    </section>
  </main>
  <!-- End page content -->


  <!-- Import footer -->
  <?php get_footer(); ?>

</body>

</html>