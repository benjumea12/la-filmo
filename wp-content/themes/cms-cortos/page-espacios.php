<?php
$og_title = of_get_option("og_title");
$og_description = of_get_option("og_description");
$og_image = of_get_option("og_image");

$countries = get_terms("place_country");

if (isset($_GET["pais"])) :
  $args_places = array(
    'post_type' => 'place',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'tax_query' => array(
      array(
        'taxonomy' => 'place_country',
        'field' => 'slug',
        'terms' => $_GET["pais"]
      )
    )
  );
else : // En caso de que no exista consulta todos
  $args_places = array(
    'post_type' => 'place',
    'post_status' => 'publish',
    'posts_per_page' => -1,
  );
endif;

$args_questions = array(
  'post_type' => 'question',
  'post_status' => 'publish',
  'order' => 'ASC',
  'posts_per_page' => -1,
);
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


  <!-- Page content -->
  <main class="main-page-espacios">

    <section class="background-espacios">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/espacios.png" alt="Fondo de header de pagina">

      <div class="content">
        <h1>Estreno Mundial</h1>
        <p>Encuentra los horarios y lugares de proyección más cercanos a ti y no te <br />pierdas la oportunidad de vivir la Genius Party.</p>
        <div class="btn-contain">
          <a href="#frequent-questions" class="btn btn-lg btn-light" type="button">Preguntas frecuentes</a>
        </div>
      </div>
    </section>

    <header class="countries-list">
      <a href="<?php echo get_site_url(); ?>/espacios" class="<?php echo !isset($_GET["pais"]) ? "selected" : ""; ?>">TODOS</a>
      <?php
      if ($countries) :
        //$countries = array_reverse($terms);
        foreach ($countries as $country) :
      ?>
          <a href="?pais=<?php echo $country->slug; ?>" class="<?php echo isset($_GET["pais"]) && $_GET["pais"] === $country->slug ? "selected" : "" ?>">
            <?php echo $country->name; ?>
          </a>
          <a href="?pais=<?php echo $country->slug; ?>" class="<?php echo isset($_GET["pais"]) && $_GET["pais"] === $country->slug ? "selected" : "" ?>">
            <?php echo $country->name; ?>
          </a>
          <a href="?pais=<?php echo $country->slug; ?>" class="<?php echo isset($_GET["pais"]) && $_GET["pais"] === $country->slug ? "selected" : "" ?>">
            <?php echo $country->name; ?>
          </a>
          <a href="?pais=<?php echo $country->slug; ?>" class="<?php echo isset($_GET["pais"]) && $_GET["pais"] === $country->slug ? "selected" : "" ?>">
            <?php echo $country->name; ?>
          </a>
          <a href="?pais=<?php echo $country->slug; ?>" class="<?php echo isset($_GET["pais"]) && $_GET["pais"] === $country->slug ? "selected" : "" ?>">
            <?php echo $country->name; ?>
          </a>
          <a href="?pais=<?php echo $country->slug; ?>" class="<?php echo isset($_GET["pais"]) && $_GET["pais"] === $country->slug ? "selected" : "" ?>">
            <?php echo $country->name; ?>
          </a>
      <?php
        endforeach;
      endif;
      ?>
    </header>

    <section class="places-list">
      <?php
      /* Consult Sliders Home¨*/
      $the_query_places = new WP_Query($args_places);

      // Map Sliders Home
      if ($the_query_places->have_posts()) :
        while ($the_query_places->have_posts()) :
          $the_query_places->the_post();
          // Extract custom meta data
          $address = get_post_meta(get_the_ID(), $prefix_places . "address", true);
          $hour = get_post_meta(get_the_ID(), $prefix_places . "hour", true);
          $time = get_post_meta(get_the_ID(), $prefix_places . "time", true);
          $more = get_post_meta(get_the_ID(), $prefix_places . "more", true);
          $city = get_post_meta(get_the_ID(), $prefix_places . "city", true);
      ?>
          <section class="place-item">
            <div class="place-image">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>
            <span class="beagle"><?php echo $city; ?></span>
            <div class="content">
              <h2><?php echo get_the_title(); ?></h2>
              <p><?php echo get_the_excerpt(); ?></p>

              <div class="content-show">
                <h3>Dirección:</h3>
                <p><?php echo $address; ?></p>

                <h3>Hora:</h3>
                <p><?php echo $hour; ?> <?php echo $time; ?></p>
                <a href="<?php echo $more; ?>" target="_blank">Mas información</a>
              </div>

              <span class="place-more">Ver más</span>
            </div>
          </section>
      <?php
        endwhile;
      endif;
      /* End consult and map Sliders Home */
      ?>

    </section>

    <section class="frequent-questions" id="frequent-questions">
      <h2>Preguntas frecuentes</h2>

      <div class="questions-list">
        <?php
        /* Consult Sliders Home¨*/
        $the_query_questions = new WP_Query($args_questions);

        // Map Sliders Home
        if ($the_query_questions->have_posts()) :
          while ($the_query_questions->have_posts()) :
            $the_query_questions->the_post();
        ?>
            <section class="questions-item">
              <header>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/more.svg" alt="Icono de mas">
                <h3><?php echo get_the_title(); ?></h3>
              </header>
              <div class="questions-content">
                <p>

                  <?php echo nl2br(get_the_content()); ?>
                </p>
              </div>
            </section>
        <?php
          endwhile;
        endif;
        /* End consult and map Sliders Home */
        ?>
      </div>
    </section>

  </main>
  <!-- End page content -->

  <!-- Import footer -->
  <?php get_footer(); ?>

  <script>
    $(".questions-item").click(function() {
      if ($(this).hasClass("open")) {
        $(this).removeClass("open")
      } else {
        $(".questions-item").removeClass("open")
        $(this).addClass("open")
      }
    })

    $(".place-more").click(function() {
      if ($(this).prev('.content-show').hasClass("open")) {
        $(this).prev('.content-show').removeClass("open")
        $(this).html("ver más")
      } else {
        $('.content-show').removeClass("open")
        $(this).prev('.content-show').addClass("open")
        $(this).html("ver menos")
      }
    })
  </script>

</body>

</html>