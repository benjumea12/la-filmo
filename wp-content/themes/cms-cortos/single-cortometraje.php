<?php
the_post();

$corto_collection = get_the_terms(get_the_ID(), "corto_collection");
$corto_prizes = get_the_terms(get_the_ID(), "corto_prize");

$danger = get_post_meta(get_the_ID(), $prefix_cortos . "danger", true);
$youtube = get_post_meta(get_the_ID(), $prefix_cortos . "youtube", true);
$edition = get_post_meta(get_the_ID(), $prefix_cortos . "edition", true);
$illustrator = get_post_meta(get_the_ID(), $prefix_cortos . "illustrator", true);
$created_at = get_post_meta(get_the_ID(), $prefix_cortos . "created_at", true);
$duration = get_post_meta(get_the_ID(), $prefix_cortos . "duration", true);


/* Argumentos de consulta de para cortometraje */
$args_artist = array(
  'post_type' => 'artista',
  'post_status' => 'publish',
  'posts_per_page' => -1,
);

$the_query_artist = new WP_Query($args_artist);

$artist_ids = [];
$illustrator_of_corto = null;
$artists_of_corto = array();

if ($the_query_artist->have_posts()) :
  $artists = $the_query_artist->posts;
  // Mapear todos los cortos existentes
  foreach ($artists as $artist) :
    $include_artist = false;
    // Verificar que el corto no se haya incluido en "artists_of_corto"
    // Verificar si artista actual es ilustrador del corto
    if ($illustrator == $artist->ID) :
      $illustrator_of_corto = array(
        "name" => $artist->post_title,
        "thumbnail_url" => get_the_post_thumbnail_url($artist->ID),
        "permalink" => get_permalink($artist->ID),
      );
    endif;
    // Verificar si artista actual es creador del corto
    if (!in_array($artist->ID, $artist_ids)) :
      if ($created_at) :
        // Mapear todos los artistas
        foreach ($created_at as $created) :
          // Verificar si artista actual es creador del corto
          if ($created["shortfilm_author"] == $artist->ID) :
            array_push($artist_ids, $artist->ID);
            array_push($artists_of_corto, array(
              "name" => $artist->post_title,
              "thumbnail_url" => get_the_post_thumbnail_url($artist->ID),
              "permalink" => get_permalink($artist->ID),
            ));
          endif;
        endforeach;
      endif;
    endif;
  endforeach;
endif;


?>

<!doctype html>
<html lang="es">

<head>
  <title>GMA | <?php echo get_the_title(); ?></title>

  <!-- Import default project head content -->
  <?php wp_head(); ?>

  <meta property="og:title" content="<?php echo get_the_title(); ?>" />
  <meta property="og:description" content="<?php echo get_the_excerpt(); ?>" />
  <meta property="og:url" content="<?php echo get_the_permalink(); ?>" />
  <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>" />
  <meta property="og:type" content="article" />
  <meta property="article:author" content="<?php echo get_the_title(); ?>" />

</head>

<body>
  <!-- Import header -->
  <?php get_header(); ?>

  <div class="image-page-corto">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    <div class="overlay"></div>
  </div>

  <!-- Page content -->
  <main class="main-page-corto">

    <div class="corto-top">
      <div class="corto-container-title">
        <h1>2022</h1>
        <svg class="line" height="4" viewBox="0 0 92 4" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line x1="1.82609" y1="2.08697" x2="89.4783" y2="2.08697" stroke="white" stroke-width="3.65217" stroke-linecap="round" />
        </svg>
        <h1><?php echo $duration; ?> minutos</h1>
      </div>
      <div class="corto-container-title2">
        <h1 class="name"><?php echo get_the_title(); ?></h1>
        <a class="btn-1" href="<?php echo get_the_post_thumbnail_url(); ?>" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/eye.svg" alt="Ver" width="24" height="24">
          Ver ilustración
        </a>
      </div>
      <section class="corto-title">
        <p><?php echo get_the_excerpt(); ?></p>
      </section>
    </div>

    <div class="corto-container-buttons">
      <a href="#ver-ahora" class="btn btn-lg btn-primary">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/play.svg" alt="Ver">
        Ver ahora
      </a>
      <a href="#mas-informacion" class="btn btn-lg">
        Más información
      </a>
    </div>


    <div class="corto-container-columns" id="mas-informacion">
      <div class="corto-content">
        <h4 class="description-title">Descripción general</h4>
        <div class="description-text">
          <p><?php echo nl2br(get_the_content()); ?></p>
        </div>

        <div class="alerts">
          <?php
          if ($danger == "on") :
          ?>
            <div class="alert red">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/skull.svg" alt="Ver">
              <div>
                <p class="tittle-alert">Aviso importante</p>
                <p class="alert-text">Este corto puede contener temas que no son aptos para todo tipo de público.</p>
              </div>
            </div>
          <?php
          endif;
          ?>

          <?php
          if ($corto_prizes) :
            foreach ($corto_prizes as $corto_prize) :

              if ($edition === "2022") :
          ?>
                <div class="alert yellow">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fenix.svg" alt="Ver" width="24" height="24">
                  <div>
                    <p class="tittle-alert"><?php echo $corto_prize->name; ?></p>
                    <p class="alert-text"><span class="underline">Edición</span> <span class="underline">2022</span></p>
                  </div>
                </div>
              <?php
              endif;

              if ($edition === "2023") :
              ?>
                <div class="alert purpple">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/frog.svg" alt="Ver" width="24" height="24">
                  <div>
                    <p class="tittle-alert"><?php echo $corto_prize->name; ?></p>
                    <p class="alert-text"><span class="underline">Corto premiado en</span> en <span class="underline">2023</span></p>
                  </div>
                </div>
          <?php
              endif;

            endforeach;
          endif;
          ?>
        </div>
      </div>

      <div class="card-corto">
        <h5 class="underline2">Información</h5>

        <div class="corto-container-colentions">
          <span>Colección</span>
          <p style="text-align: right;"><a href="<?php echo get_site_url(); ?>/coleccion/?coleccion=<?php echo $corto_collection[0]->slug; ?>"><?php echo $corto_collection[0]->name; ?></a></p>

        </div>

        <!-- <h6>Géneros</h6>
        <p>Corto, Animado, Higiene, Sueño, Saludable</p> -->

        <h6>Creado por</h6>
        <?php
        if ($artists_of_corto) :
          foreach ($artists_of_corto as $artist_of_corto) :
        ?>
            <a href="<?php echo $artist_of_corto["permalink"]; ?>" class="img-artist-name">
              <img src="<?php echo $artist_of_corto["thumbnail_url"]; ?>" alt="Ver">
              <?php echo $artist_of_corto["name"]; ?>
            </a>
        <?php
          endforeach;
        endif;
        ?>

        <h6>Ilustración por</h6>
        <?php
        if ($illustrator_of_corto) :
        ?>
          <a href="<?php echo $illustrator_of_corto["permalink"]; ?>" class="img-artist-name">
            <img src="<?php echo $illustrator_of_corto["thumbnail_url"]; ?>" alt="Ver">
            <?php echo $illustrator_of_corto["name"]; ?>
          </a>
        <?php
        endif;
        ?>
      </div>
    </div>

    <div class="youtube-corto" id="ver-ahora">
      <?php echo $youtube; ?>
    </div>

    <div class="flex-comments">

      <?php
      $args = array();

      if (count(get_comments()) > 0) :
      ?>
        <section class="comments-section">
          <h4 class="description-title">Valoraciones</h4>

          <ul class="comments-corto">
            <?php
            foreach (get_comments() as $comment) :
              if ($comment->comment_parent === "0") :
                $args_child = array(
                  'parent' => $comment->comment_ID,
                  'hierarchical' => true,
                );
                $child_comments = get_comments($args_child);
            ?>
                <li class="comment-item <?php echo count($child_comments) === 0 ? "individual" : "" ?>">
                  <h6><span><?php echo $comment->comment_author; ?></span> - <?php echo date("Y/m/d", strtotime($comment->comment_date)); ?></h6>
                  <p><?php echo $comment->comment_content; ?></p>
                </li>

                <?php
                foreach ($child_comments as $child) :
                ?>
                  <li class="comment-item comment-item-child">
                    <h6><span><?php echo $child->comment_author; ?></span> - <?php echo date("Y/m/d", strtotime($child->comment_date)); ?></h6>
                    <p><?php echo $child->comment_content; ?></p>
                  </li>
            <?php
                endforeach;
              endif;
            endforeach;
            ?>
          </ul>
        </section>
      <?php
      endif;

      comment_form($args, get_the_ID());
      ?>
    </div>


  </main>
  <!-- End page content -->

  <!-- Import footer -->
  <?php get_footer(); ?>

  <script>
    $(function() {
      $("#reply-title").html("Agregar una valoración")
      $("#submit").attr("value", "Publicar valoración")
      $(".comment-form-url").hide()
    });
  </script>
</body>

</html>