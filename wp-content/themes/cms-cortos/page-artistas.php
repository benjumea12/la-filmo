<?php

// Consultar los tipos de artistas
$terms = get_terms("artist_type");

// Verificar si el filtro de tipo de artista existe
if (isset($_GET["tipo_artista"])) :
  $args_authors = array(
    'post_type' => 'artista',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'tax_query' => array(
      array(
        'taxonomy' => 'artist_type',
        'field' => 'slug',
        'terms' => $_GET["tipo_artista"]
      )
    )
  );
else : // En caso de que no exista consulta todos
  $args_authors = array(
    'post_type' => 'artista',
    'post_status' => 'publish',
    'posts_per_page' => -1,
  );
endif;

$the_query_authors = new WP_Query($args_authors);

$og_title = of_get_option("og_title");
$og_description = of_get_option("og_description");
$og_image = of_get_option("og_image");
?>


<!-- Codigo html -->
<!doctype html>
<html lang="es">

<head>
  <title><?php echo $og_title; ?> | Artistas</title>

  <!-- Import default project head content -->
  <?php wp_head(); ?>

  <meta property="og:title" content="<?php echo $og_title; ?> | Artistas" />
  <meta property="og:description" content="<?php echo $og_description; ?>" />
  <meta property="og:url" content="<?php echo get_site_url(); ?>" />
  <meta property="og:image" content="<?php echo $og_image; ?>" />
  <meta property="og:type" content="web" />
</head>

<body>

  <!-- Import header -->
  <?php get_header(); ?>

  <img class="image-page-artists" src="<?php echo get_template_directory_uri(); ?>/assets/images/artistas-background.svg" alt="">

  <!-- Page content -->
  <main class="main-page-artists">
    <h1 class="title">Conoce a los Artistas</h1>
    <section class="subtitle">Ante ustedes las personas que hacen posible que exista este proyecto.
      Desde Animadores e Ilustradores hasta Diseñadores y Desarrolladores.
      <p class="bold">¡Gracias a todos por ser parte de esto!
      <p>
    </section>

    <nav class="art-types">
      <ul class="menu-artistas">
        <li><a href="<?php echo get_site_url(); ?>/artistas" class="<?php echo !isset($_GET["tipo_artista"]) ? "selected" : ""; ?>">TODOS</a></li>
        <?php
        if ($terms) :
          $terms = array_reverse($terms);
          foreach ($terms as $term) :
        ?>
            <li>
              <a href="?tipo_artista=<?php echo $term->slug; ?>" class="<?php echo isset($_GET["tipo_artista"]) && $_GET["tipo_artista"] === $term->slug ? "selected" : "" ?>">
                <?php echo $term->description; ?>
              </a>
            </li>
        <?php
          endforeach;
        endif;
        ?>
      </ul>
    </nav>

    <div id="contenido-cargado"></div>


    <div class="container">
      <div class="grid-container">
        <?php
        if ($the_query_authors->have_posts()) :
          while ($the_query_authors->have_posts()) :
            $the_query_authors->the_post();
            $post_terms = get_the_terms(get_the_ID(), "artist_type");
        ?>
            <a class="card" href="<?php echo get_permalink(); ?>">
              <img class="artist" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" />
              <h2><?php echo get_the_title(); ?></h2>
              <p><?php echo $post_terms[0]->name; ?></p>
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