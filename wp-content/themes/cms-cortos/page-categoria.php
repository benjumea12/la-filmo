<!doctype html>
<html lang="en">

<head>
  <!-- Import default project head content -->
  <?php wp_head(); ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>

<body style="background-color: black;color: #FFF;">

  <!-- Import header -->
  <?php get_header(); ?>


  <!-- Page content -->
  <main>
  <div class="container">
        <div class="row">
            <div class="col">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/categoria/stopmot.jpeg" alt="stop">
            </div>
        </div>
  </div>
  <div class="container-fluid" style="margin:0%">
        <div class="row">
            <div class="col">
                <h3 class="thi">Cortos stop motio</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/categoria/cobravida.png" alt="nose" height="250" width="500">
                <h5 class="thi" style="font-weight: 600;">El extraño mundo de gumbal</h5>
                <p class="thi">2022 <img class="rotate_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/categoria/w_line.png" alt="linea" height="10" width="30"> minutos</p>
            </div>
            <div class="col">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/categoria/cuco.jpeg" alt="nose" height="250" width="500">
                <h5 class="thi" style="font-weight: 600;">El extraño mundo de gumbal</h5>
                <p class="thi">2022 <img class="rotate_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/categoria/w_line.png" alt="linea" height="10" width="30"> minutos</p>
            </div>
            <div class="col">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/categoria/cobravida.png" alt="nose" height="250" width="500">
                <h5 class="thi" style="font-weight: 600;">El extraño mundo de gumbal</h5>
                <p class="thi">2022 <img class="rotate_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/categoria/w_line.png" alt="linea" height="10" width="30"> minutos</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/categoria/gumbal.png" alt="nose" height="250" width="500">
                <h5 class="thi" style="font-weight: 600;">El extraño mundo de gumbal</h5>
                <p class="thi">2022 <img class="rotate_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/categoria/w_line.png" alt="linea" height="10" width="30"> minutos</p>
            </div>
            <div class="col">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/categoria/cobravida.png" alt="nose" height="250" width="500">
                <h5 class="thi" style="font-weight: 600;">El extraño mundo de gumbal</h5>
                <p class="thi">2022 <img class="rotate_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/categoria/w_line.png" alt="linea" height="10" width="30"> minutos</p>
            </div>
            <div class="col">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/categoria/diosalto.png" alt="nose" height="250" width="500">
                <h5 class="thi" style="font-weight: 600;">El extraño mundo de gumbal</h5>
                <p class="thi">2022 <img class="rotate_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/categoria/w_line.png" alt="linea" height="10" width="30"> minutos</p>
            </div>
        </div>
  </div>
  </main>
  <!-- End page content -->


  <!-- Import footer -->
  <?php get_footer(); ?>

</body>

</html>