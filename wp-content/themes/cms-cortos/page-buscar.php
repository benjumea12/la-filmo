<?php

$args_authors = array(
  'post_type' => 'artista',
  'post_status' => 'publish',
  'posts_per_page' => -1,
);

$args_cortos = array(
  'post_type' => 'cortometraje',
  'post_status' => 'publish',
  'posts_per_page' => -1,
);

$the_query_authors = new WP_Query($args_authors);
$the_query_cortos = new WP_Query($args_cortos);

$authors = [];
$cortos = [];

if ($the_query_authors->have_posts()) :
  while ($the_query_authors->have_posts()) :
    $the_query_authors->the_post();
    array_push($authors, array(
      "title" => get_the_title(),
      "image" => get_the_post_thumbnail_url(),
      "link" => get_permalink(),
      "type" => get_the_terms(get_the_ID(), "artist_type")[0]->name,
      "description" => get_the_excerpt() . get_the_content()
    ));
  endwhile;
endif;

if ($the_query_cortos->have_posts()) :
  while ($the_query_cortos->have_posts()) :
    $the_query_cortos->the_post();
    array_push($cortos, array(
      "title" => get_the_title(),
      "image" => get_the_post_thumbnail_url(),
      "link" => get_permalink(),
      "edition" => get_post_meta(get_the_ID(), $prefix_cortos . "edition", true),
      "duration" => get_post_meta(get_the_ID(), $prefix_cortos . "duration", true),
      "description" => get_the_excerpt() . get_the_content()
    ));
  endwhile;
endif;

$og_title = of_get_option("og_title");
$og_description = of_get_option("og_description");
$og_image = of_get_option("og_image");
?>

<!-- Codigo html -->
<!doctype html>
<html lang="es">

<head>
  <title>GMA | Buscar</title>

  <!-- Import default project head content -->
  <?php wp_head(); ?>

  <meta property="og:title" content="<?php echo $og_title; ?>" />
  <meta property="og:description" content="<?php echo $og_description; ?>" />
  <meta property="og:url" content="<?php echo get_site_url(); ?>" />
  <meta property="og:image" content="<?php echo $og_image; ?>" />
  <meta property="og:type" content="web" />
</head>

<body>
  <!-- Import header -->
  <?php get_header(); ?>

  <!-- Page content -->
  <main class="main-page-buscar main-page-artists" id="app">
    <div class="background-page">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/buscar.png" alt="Fondo de buscar">
      <div class="overlay"></div>
    </div>

    <section class="input-buscar input-buscar-active">
      <form action="">
        <h1>Buscar en GMA</h1>
        <input type="text" placeholder="Buscar por título, artista, categoría, descripción, año..." v-model="searchInput">
      </form>
    </section>

    <section class="search-results">
      <div class="search-results-list" v-if="searchAuthors.length > 0">
        <h3>Artistas encontrados</h3>
        <a class=" search-results-item" v-for="author in searchAuthors" :href="author.link">
          <img class="item-image" :src="author.image" alt="">
          <div>
            <h1 class="item-title">{{author.title}}</h1>
            <p class="item-subtitle">{{author.type}}</p>
          </div>
        </a>
      </div>
      <div class="search-results-list" v-if="searchCortos.length > 0">
        <h3>Cortos encontrados</h3>
        <a class="search-results-item" v-for="corto in searchCortos" :href="corto.link">
          <img class="item-image-corto" :src="corto.image" alt="">
          <div>
            <h1 class="item-title">{{corto.title}}</h1>
            <p class="item-subtitle">{{corto.edition}} - {{corto.duration}} minutos</p>
          </div>
        </a>
      </div>
    </section>
  </main>
  <!-- End page content -->

  <!-- Import footer -->
  <?php get_footer(); ?>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>

  <script>
    const authors = <?php echo json_encode($authors); ?>;
    const cortos = <?php echo json_encode($cortos); ?>;

    var vm = new Vue({
      el: '#app',
      data: {
        searchInput: "",
        searchAuthors: [],
        searchCortos: []
      }
    })

    vm.$watch('searchInput', function(value) {
      if (value !== "") {
        vm.$data.searchAuthors = authors.filter(author => queryAuthor(author, value))
        vm.$data.searchCortos = cortos.filter(corto => queryCorto(corto, value))
      } else {
        vm.$data.searchAuthors = []
        vm.$data.searchCortos = []
      }
    })

    function queryAuthor(author, value) {
      if (author.title && removeAccents(author.title).includes(removeAccents(value))) {
        return true
      }
      if (author.description && removeAccents(author.description).includes(removeAccents(value))) {
        return true
      }
      if (author.type && removeAccents(author.type).includes(removeAccents(value))) {
        return true
      }
      return false
    }

    function queryCorto(corto, value) {
      if (corto.title && removeAccents(corto.title).includes(removeAccents(value))) {
        return true
      }
      if (corto.description && removeAccents(corto.description).includes(removeAccents(value))) {
        return true
      }
      if (corto.edition && removeAccents(corto.edition).includes(removeAccents(value))) {
        return true
      }
      return false
    }


    function removeAccents(chain) {
      const accents = {
        'á': 'a',
        'é': 'e',
        'í': 'i',
        'ó': 'o',
        'ú': 'u',
        'Á': 'A',
        'É': 'E',
        'Í': 'I',
        'Ó': 'O',
        'Ú': 'U'
      };
      return chain.split('').map(letra => accents[letra] || letra).join('').toString().toLowerCase();
    }
  </script>

</body>

</html>