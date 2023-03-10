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
    <div class="container text-center">
        <div class="row align-items-center" >
          <div class="col">
            <img class="circular--square" src="<?php echo get_template_directory_uri(); ?>/assets/images/autor/art_prot_2.png" width="250" />
          </div>
          <div class="col">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p style="color: #FFDC60; text-align: left;font-size: 1.875em;font-family: THICCCBOI; font-weight: 600;" >Animador/a</p>
                    </div>           
                </div>
                <div class="row">
                    <div class="col">
                        <p style="text-align:left ;font-size: 3em;font-family: THICCCBOI; font-weight: 700;">
                            Camilo gonzales
                        </p>
                    </div>
                </div>
            </div>
          </div>
          
        </div>
    </div>
    <br>
    <br>
        <div class="row">
            <div class="col-5">
                <h4 class="thi" style="font-weight: 600;">Sobre mi</h4>

                <p class="sobre-mi">Soy el creador de "Higiene del sueño", un corto animado que explora la importancia de tener una buena rutina de sueño para nuestra salud y bienestar. Desde joven, siempre he estado interesado en el arte de la animación y en la capacidad de esta forma de arte para transmitir mensajes importantes de una manera accesible y entretenida.</p>
                <p class="sobre-mi"> 
                    Con "Higiene del sueño", quería crear algo que fuera a la vez divertido y educativo, y que ayudara a las personas a entender la importancia de la higiene del sueño.
                </p >
                <h4 class="thi" style="font-weight: 600;">Redes sociales</h4>
                <span>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-google"></a>
                    <a href="#" class="fa fa-youtube"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </span>
            </div>
            <div class="col offset-md-1">
                <div class="container">
                    <h4 class="thi" style="font-weight: 600;">Mis trabajos</h4>
                  
                    <div class="row">
                        <div class="col">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/autor/stop.jpeg" alt="nose" height="100" width="200">
                            <h5 class="thi" style="font-weight: 600;">El extraño mundo de gumbal</h5>
                            <p class="thi">2022 <img class="rotate_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/autor/w_line.png" alt="linea" height="10" width="30"> minutos</p>
                        </div>
                        <div class="col">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/autor/diosalto.png" alt="s" height="100" width="200">
                            <h5 class="thi" style="font-weight: 600;">El extraño mundo de gumbal</h5>
                            <p class="thi">2022 <img class="rotate_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/autor/w_line.png" alt="linea" height="10" width="30"> 5 minutos</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/autor/stop.jpeg" alt="nose" height="100" width="200">
                            <h5 class="thi" style="font-weight: 600;">Dios hazme alto</h5>
                            <p class="thi">2022 <img class="rotate_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/autor/w_line.png" alt="linea" height="10" width="30"> 5 minutos</p>
                        </div>
                        <div class="col">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/autor/cuco.jpeg" alt="s" height="100" width="200">
                            <h5 class="thi" style="font-weight: 600;">Cuco</h5>
                            <p class="thi">2022 <img class="rotate_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/autor/w_line.png" alt="linea" height="10" width="30"> 5 minutos</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
  </main>
  <!-- End page content -->


  <!-- Import footer -->
  <?php get_footer(); ?>
  <style>
        .rotate_image {
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg);
        }
        .circular--square { border-radius: 50%; }
        a.nav-link{
            color: white;
        }
        .fa {
            
          padding: 20px;
          font-size: 30px;
          width: 30px;
          text-align: center;
          text-decoration: none;
          border-radius: 50%;
          color: white;
        }
        .thi{
            font-family: 'THICCCBOI'; 
        }
        p.sobre-mi{
            font-family: "Poppins";
            text-align: justify;
            font-weight: 300;
        }
  </style>
</body>

</html>