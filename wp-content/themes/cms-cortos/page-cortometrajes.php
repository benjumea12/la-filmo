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

<style>
  body.corto-container {
    background-color: black;
    background-image: url("<?php echo get_template_directory_uri(); ?>/assets/images/corto-background.svg");
    background-position: center top;
    background-repeat: no-repeat;
    background-size: 100% auto;
    color: white;
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    overflow-x: hidden;
    margin-top: 0;
    margin-left: 9%;
    margin-right: 5%;
  }

  div.corto-container-title {
    display: flex;
    width: 50%;
    font-family: 'THICCCBOI';
    font-style: normal;
    font-weight: 600;
    font-size: 22px;
    text-transform: capitalize;
    color: #FFFFFF;
    margin-top: 28%;
    margin-bottom: 10px;
    margin-bottom: 3%;
    line-height: 0;
  }

  .corto-container-title h1:nth-of-type(2),
  .corto-container-title svg {
    margin-left: 30px;
  }

  .name {
    font-family: 'THICCCBOI';
    font-style: normal;
    font-weight: 700;
    font-size: 60px;
    line-height: 69px;
    color: #FFFFFF;
  }

  .btn-1 {
    width: 236px;
    height: 41.36px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 80.2887px;
    font-family: 'THICCCBOI';
    font-style: normal;
    font-weight: 600;
    font-size: 24px;
    line-height: 28px;
    text-transform: capitalize;
    color: #FFFFFF;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .corto-title {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 170%;
    color: rgba(255, 255, 255, 0.8);
    width: 50%;
    margin-top: 1%;
    margin-bottom: 2%;
  }


  .corto-container-title2 {
    display: flex;
    justify-content: space-between;
  }

  .btn-2 {
    width: 277px;
    height: 63px;
    background: #FF0000;
    border-radius: 99px;
    font-family: 'THICCCBOI';
    font-style: normal;
    font-weight: 600;
    line-height: 28px;
    text-transform: capitalize;
    color: #FFFFFF;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 34px;
  }

  .btn-2:hover {
    background: #FF7575;
    cursor: pointer;
  }

  .btn-3 {
    width: 352px;
    height: 63px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 99px;
    font-family: 'THICCCBOI';
    font-style: normal;
    font-weight: 600;
    line-height: 28px;
    text-transform: capitalize;
    color: #FFFFFF;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 34px;
  }

  .btn-1:hover,
  .btn-3:hover {
    background: rgba(255, 255, 255, 0.2);
    cursor: pointer;
  }

  .corto-container-buttons {
    display: flex;
    justify-content: space-around;
    width: 55%;
    margin-left: -2%;
  }

  .youtube-corto {
    display: flex;
    justify-content: center;
  }

  iframe {
    width: 1142px;
    height: 642px;
    border-radius: 15px;
  }

  .alert {
    display: flex;
    flex-direction: row;
    align-items: center;
    height: 99px;
    border-radius: 10px;
    padding: 7px;
    margin-bottom: 3%;
    border: 1px solid;
  }

  .alert>*:first-child {
    flex-basis: 10%;
  }

  .alert>*:last-child {
    flex-basis: 90%;
  }

  .alert img {
    width: 100px;
    height: 1000px;
    margin-right: 20px;
    object-fit: contain;
    max-width: 100%;
    max-height: 100%;
  }

  .alert .tittle-alert {
    width: 183px;
    height: 26px;
    font-family: 'THICCCBOI';
    font-style: normal;
    font-weight: 600;
    font-size: 2.3rem;
    line-height: 26px;
  }

  .alert p {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    font-size: 1.6rem;
    line-height: 24px;
    margin: 0;
    margin-top: 5px;
  }

  .underline {
    color: #FFFFFF;
    border-bottom: 1px solid white;
  }

  .underline2 {
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
  }

  .red {
    background: rgba(255, 0, 0, 0.1);
    color: #FF1D1D;
  }

  .yellow {
    background: rgba(255, 206, 81, 0.1);
    color: #EAA410;
  }

  .purpple {
    background: rgba(159, 19, 229, 0.1);
    color: #9F13E5;
  }

  .alert-text {
    width: 395px;
    height: 50px;
    font-size: 1.9rem;
    color: #FFFFFF;
    width: 100%;
  }

  .corto-container-columns {
    display: flex;
    justify-content: space-around;
    margin-top: 3%;
    margin-bottom: 5%;
  }

  .corto-container-columns>div {
    flex-basis: 50%;
  }

  .corto-container-columns>div:first-child {
    flex-basis: 65%;
  }

  .corto-container-columns>div:last-child {
    padding-left: 20px;
    flex-basis: 35%;
    background: rgba(255, 255, 255, 0.1);
  }

  .circle-artist {
    background-image: url("<?php echo get_template_directory_uri(); ?>/assets/images/corto-background.svg");
    background-size: cover;
    border-radius: 50%;
    width: 100px;
    height: 100px;
  }

  .description-title {
    width: 299px;
    height: 37px;
    font-family: 'THICCCBOI';
    font-style: normal;
    font-weight: 600;
    font-size: 32px;
    line-height: 37px;
    color: #FFFFFF;
    margin-bottom: 3%;
  }

  .description-text {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 19px;
    line-height: 170%;
    color: #FFFFFF;
    margin-bottom: 3%;
  }

  .card-corto {
    width: 438px;
    height: 825px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    font-family: 'THICCCBOI';
    font-style: normal;
    font-size: 20px;
    line-height: 161.5%;
    color: #FFFFFF;
    padding: 14px;
    margin-left: 7%;
  }

  .card-corto>* {
    margin-bottom: 30px;
  }

  .img-artist-name {
    display: flex;
    align-items: center;
    text-align: center;
    margin: 10px;
  }

  .img-artist-name:hover {
    color: grey;
    cursor: pointer;
  }

  .img-artist-name img {
    margin-right: 10px;
  }

  .corto-container-colentions {
    display: flex;
    justify-content: space-between;
    width: 90%;
  }
</style>

<head>
  <!-- Import default project head content -->
  <?php wp_head(); ?>
</head>

<body class="corto-container">
  <!-- Import header -->
  <?php get_header(); ?>

  <!-- Page content -->
  <main class="main-page-artists">
    <div class="corto-container-title">
      <h1>2022</h1>
      <svg class="line" width="92" height="4" viewBox="0 0 92 4" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line x1="1.82609" y1="2.08697" x2="89.4783" y2="2.08697" stroke="white" stroke-width="3.65217" stroke-linecap="round" />
      </svg>
      <h1>5 minutos</h1>
    </div>
    <div class="corto-container-title2">
      <h1 class="name">Nombre Del Corto Aquí</h1>
      <div class="btn-1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/eye.svg" alt="Ver" width="24" height="24">
        Ver ilustración
      </div>
    </div>
    <section class="corto-title">
      "Higiene del sueño" es un corto animado divertido y educativo que explora la importancia de tener una buena rutina de sueño para nuestra salud y bienestar. Síguelo en su aventura y descubre cómo mejorar tu propia higiene del sueño. ¡No te lo pierdas!
    </section>
    <div class="corto-container-buttons">
      <div class="btn-2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/triangle.svg" alt="Ver" width="24" height="24">
        Ver ahora
      </div>
      <div class="btn-3">
        Más información
      </div>
    </div>
    <div class="corto-container-columns">
      <div>
        <h4 class="description-title">Descripción general</h4>
        <div class="description-text">
          "Higiene del sueño" es un corto animado que sigue a un personaje en su camino hacia una mejor calidad de sueño.
          Con un estilo de animación colorido y una trama entretenida, este corto explora la importancia de tener una rutina
          de sueño saludable. A lo largo de su aventura, el personaje aprende acerca de los hábitos que pueden mejorar la calidad
          del sueño, como establecer un horario regular para acostarse y levantarse, limitar la exposición a pantallas antes de dormir
          y crear un ambiente relajante en el dormitorio.
        </div>
        <div class="description-text">
          Este corto es una excelente herramienta para enseñar a los niños y adultos jóvenes acerca de la importancia de la higiene
          del sueño. Con un mensaje divertido y accesible, "Higiene del sueño" muestra de manera clara y concisa cómo tener una rutina
          de sueño saludable puede mejorar la vida de una persona. Además, el corto también...
        </div>
        <div class="alert red">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/skull.svg" alt="Ver">
          <div>
            <p class="tittle-alert">Aviso importante</p>
            <p class="alert-text">Este corto puede contener temas que no son aptos para todo tipo de público.</p>
          </div>
        </div>
        <div class="alert yellow">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fenix.svg" alt="Ver" width="24" height="24">
          <div>
            <p class="tittle-alert">Corto premiado</p>
            <p class="alert-text"><span class="underline">Mejor Corto</span> en <span class="underline">2022</span></p>
          </div>
        </div>
        <div class="alert purpple">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/frog.svg" alt="Ver" width="24" height="24">
          <div>
            <p class="tittle-alert">Bretis Pojar</p>
            <p class="alert-text"><span class="underline">Mejor Obra Breve</span> en <span class="underline">2023</span></p>
          </div>
        </div>
      </div>
      <div class="card-corto">
        <p class="underline2 bold">Información</p>
        <div class="corto-container-colentions">
          <span class="bold">Colección</span> <span>Stop Motion</span>
        </div>
        <p class="bold">Géneros</p>
        <p>Corto, Animado, Higiene, Sueño, Saludable</p>
        <p class="bold">Creado por</p>
        <div class="img-artist-name">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/artist-circle1.svg" alt="Ver">
          Camilo Zhingre
        </div>
        <div class="img-artist-name">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/artist-circle2.svg" alt="Ver">
          Diego Cuyago
        </div>
        <div class="img-artist-name">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/artist-circle3.svg" alt="Ver">
          Jose Torres
        </div>
        <div class="img-artist-name">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/artist-circle4.svg" alt="Ver">
          Esteban Onstante
        </div>
        <div class="img-artist-name">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/artist-circle5.svg" alt="Ver">
          Andrés Cevallos
        </div>
        <p class="bold">Ilustración por</p>
        <div class="img-artist-name">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/artist-circle6.svg" alt="Ver">
          Arriamis
        </div>
      </div>
    </div>
    <div class="youtube-corto">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/28nZv0VXwtA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

  </main>
  <!-- End page content -->

  <!-- Import footer -->
  <?php get_footer(); ?>
</body>

</html>