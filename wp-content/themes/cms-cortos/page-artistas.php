<!doctype html>
<html lang="en">

<head>
  <!-- Import default project head content -->
  <?php wp_head(); ?>
</head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=THICCCBOI&display=swap">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

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

   h1.title {
    width: 100%; 
    text-align: center;
    font-family: 'THICCCBOI', sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 96px;
    line-height: 111px;
    color: #FFFFFF;
    margin: 10px;
    margin-top: 85px;
  }


   section.subtitle {
    display: block;
    margin: 0 auto;
    width: 40%;
    text-align: center;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 170%;
    font-size: 20px;
    color: rgba(255, 255, 255, 0.8);
  }


    p.bold {
      font-weight: bold;
      margin-top: 0;
    }

    .container {
      display: flex;
      justify-content: center;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      grid-gap: 25px;
      justify-content: center;
      align-items: center;
    }

    .card {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 203px;
      height: 272px;

      background: rgba(255, 255, 255, 0.05);
      border-radius: 10px;

      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      max-width: 1200px; /* ancho máximo de la cuadrícula */
    }

    .card > * {
      flex: 0 0 calc(20% - 20px); /* ancho de cada elemento */
      margin: 10px; /* margen entre elementos */
    }

    .card:hover {
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
      transform: scale(1.1);
    }

    .artist {
      width: 100%;
      height: auto;
    }


    img.artist {
      width: 120px;
      height: 120px;
      border-radius: 30px;
    }

    div.art-types {
     display: flex;
      justify-content: center;

      font-family: 'THICCCBOI', sans-serif;
      font-style: normal;
      font-weight: 600;
      font-size: 20px;
      line-height: 23px;
      color: #FFFFFF;
    }

    .menu-artistas {
      display: flex;
      justify-content: center;
      list-style: none;
      margin: 0;
      padding: 0;
      margin: 40px;
      font-family: 'THICCCBOI', sans-serif;
      font-size: 20px;
    }

    .menu-artistas li {
      margin: 0 10px;
      margin-right: 50px;
    }

    .menu-artistas a {
      color: white;
      text-decoration: none;
    }

   .menu-artistas li a:focus {
    border-bottom: 1px solid black;
    }

  .menu-artistas li a.selected {
    border-bottom: 1px solid white;
    padding: 5px;
  }
</style>

<body>

  <!-- Import header -->
  <?php get_header(); ?>


  <!-- Page content -->
  <main>
    <h1 class="title">Conoce a los Artistas</h1>
    <section class="subtitle">Ante ustedes las personas que hacen posible que exista esta proyecto. 
      Desde Animadores y diseñadores, hasta Diseñadores y Desarrolladores. 
      <p class="bold">¡Gracias a todos por ser parte de esto!<p>
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
        $registros = $wpdb->get_results( "SELECT * FROM $tabla_artistas" );
      } else {
        $registros = $wpdb->get_results( "SELECT * FROM $tabla_artistas WHERE Tipo = '$tipo'" );
      }
    } else {
      $registros = $wpdb->get_results( "SELECT * FROM $tabla_artistas" );
    }
    ?>

    <div class="container">
      <div class="grid-container">
        <?php foreach ( $registros as $registro ) : ?>
          <div class="card">
            <img class="artist" src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $registro->Imagen; ?>" alt="<?php echo $registro->Nombre; ?>"/>
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