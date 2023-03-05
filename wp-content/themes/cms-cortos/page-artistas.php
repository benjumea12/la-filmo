<?php
// Get authors
$args_authors = array(
  'post_type' => 'artist',
  'post_status' => 'publish',
  'posts_per_page' => -1,
);

$the_query_authors = new WP_Query($args_authors);
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

  <img class="image-page-artists" src="<?php echo get_template_directory_uri(); ?>/assets/images/artistas-background.svg" alt="">

  <!-- Page content -->
  <main class="main-page-artists">
    <h1 class="title">Conoce a los Artistas</h1>
    <section class="subtitle">Ante ustedes las personas que hacen posible que exista esta proyecto.
      Desde Animadores y diseñadores, hasta Diseñadores y Desarrolladores.
      <p class="bold">¡Gracias a todos por ser parte de esto!
      <p>
    </section>

    <nav class="art-types">
      <ul class="menu-artistas">
        <li><a href="?tipo=todos" <?php if (!isset($_GET['tipo']) || $_GET['tipo'] == 'todos') echo 'class="selected"'; ?>>TODOS</a></li>
        <li><a href="?tipo=ANIMADORES" <?php if (isset($_GET['tipo']) && $_GET['tipo'] == 'ANIMADORES') echo 'class="selected"'; ?>>ANIMADORES</a></li>
        <li><a href="?tipo=DISEÑADORES" <?php if (isset($_GET['tipo']) && $_GET['tipo'] == 'DISEÑADORES') echo 'class="selected"'; ?>>DISEÑADORES</a></li>
        <li><a href="?tipo=DESARROLLADORES" <?php if (isset($_GET['tipo']) && $_GET['tipo'] == 'DESARROLLADORES') echo 'class="selected"'; ?>>DESARROLLADORES</a></li>
      </ul>
    </nav>

    <div id="contenido-cargado"></div>


    <div class="container">
      <div class="grid-container">
        <?php
        if ($the_query_authors->have_posts()) :
          while ($the_query_authors->have_posts()) :
            $the_query_authors->the_post();
        ?>
            <a class="card" href="#">
              <img class="artist" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" />
              <h2><?php echo get_the_title(); ?></h2>
              <p>Animadores</p>
            </a>
        <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>

  </main>
  <!-- End page content -->

  <!-- Import footer -->
  <?php get_footer(); ?>
</body>

</html>