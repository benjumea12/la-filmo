<!doctype html>
<html lang="en">

<head>
  <!-- Import default project head content -->
  <?php wp_head(); ?>

  <!-- Styles just for this page -->
  <style>
    body {
      background-color: black;
      background-image: url("<?php echo get_template_directory_uri(); ?>/assets/images/artistas-background.svg");
      background-position: center top;
      background-repeat: no-repeat;
      background-size: 100% auto;
      color: white;
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden;
    }
  </style>
  <!-- Styles just for this page -->
  
</head>


<body>

  <!-- Import header -->
  <?php get_header(); ?>


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

    <?php
    global $wpdb;
    $tabla_artistas = $wpdb->prefix . 'artistas';

    if (isset($_GET['tipo'])) {
      $tipo = $_GET['tipo'];
      if ($tipo == 'todos') {
        $registros = $wpdb->get_results("SELECT * FROM $tabla_artistas");
      } else {
        $registros = $wpdb->get_results("SELECT * FROM $tabla_artistas WHERE Tipo = '$tipo'");
      }
    } else {
      $registros = $wpdb->get_results("SELECT * FROM $tabla_artistas");
    }
    ?>

    <div class="container">
      <div class="grid-container">
        <?php foreach ($registros as $registro) : ?>
          <div class="card">
            <img class="artist" src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $registro->Imagen; ?>" alt="<?php echo $registro->Nombre; ?>" />
            <h2><?php echo $registro->Nombre; ?></h2>
            <p><?php echo $registro->Tipo; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>


  </main>
  <!-- End page content -->

  <!-- Import footer -->
  <?php get_footer(); ?>

</body>

</html>