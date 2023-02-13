<?php

$prefix = 'products_';
$arrayOptions = array();

$args = array(
  'post_type' => 'authors',
  'post_status' => 'publish',
  'posts_per_page' => -1,
);

$the_query = new WP_Query($args);
$items_authors = json_encode($the_query->have_posts());
?>


<!doctype html>
<html lang="en">

<head>
  <?php wp_head(); ?>

  <!-- Load Vue -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
</head>

<body>
  <?php get_header(); ?>

  <div class="container py-5" id="app">
    <h1>Content</h1>

    <div class="text-center">
      <div class="d-flex">
        <div v-for="todo in todos" class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ todo.post_title }}</h5>
            <p class="card-text">{{ todo.post_content }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>

  <script>
    const items_authors = <?php echo json_encode($the_query->get_posts()); ?>

    console.log(items_authors);

    var app4 = new Vue({
      el: '#app',
      data: {
        todos: items_authors
      }
    })
  </script>
</body>

</html>