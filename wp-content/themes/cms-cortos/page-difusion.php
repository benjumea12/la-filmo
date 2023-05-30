<?php
$og_title = of_get_option("og_title");
$og_description = of_get_option("og_description");
$og_image = of_get_option("og_image");

$countries = get_terms("place_country");
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

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/izitoast/css/iziToast.min.css">
</head>

<body>

  <!-- Import header -->
  <?php get_header(); ?>

  <main class="main-page-difusion">

    <header class="header-page">

      <div class="header-top">
        <span>24.06.23</span>
        <span>GENERACiÓN MALDITA</span>
      </div>

      <div class="header-content">
        <figure class="figure">
          <a href="<?php echo get_site_url(); ?>/fanzine" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/difusion-1.svg" alt="">
          </a>
        </figure>
        <div class="header-info">
          <h1>DISEÑo. Documentación. Información</h1>

          <div class="header-info-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/estreno.png" alt="">
          </div>

          <p>Guía completa sobre el <br> estreno internacional de la <br> Genius Party</p>
          <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-down.png" alt="">

          <a href=" https://drive.google.com/drive/folders/1y5KQhCPtYh3lfiZnuHjQVxX9rGMwZwVg?usp=sharing" target="_blank" class="manual">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/difusion-3.svg" alt="">
          </a>
        </div>
        <figure class="figure">
          <a href="<?php echo get_site_url(); ?>/sobre-el-proyecto" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/difusion-2.svg" alt="">
          </a>
        </figure>
      </div>
      <div class="nav-link-container">
        <nav class="nav-link">
          <div>
            <a href="#difusion">DIFUSIÓN</a>
            <a href="#promocion">PROMO</a>

          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon.svg" alt="">
          <div>

            <a href="#documentos">DOCS</a>
            <a href="<?php echo get_site_url(); ?>/espacios/#preguntas-frecuentes" target="_blank">DUDAS</a>
          </div>
        </nav>
      </div>
    </header>

    <div class="content-paddin" id="difusion">
      <section class="section-basic section-difusion">
        <h2>DIFUSIÓN</h2>

        <div class="section-flex section-flex-difusion">
          <div class="section-col">
            <p>Si deseas apoyar a la realización del próximo estreno internacional de la película que hemos creado con la colección TOP de cortos, este es el lugar ideal para tí.
              <br><br>
              Para comenzar es importante que conozcas cual es nuestro objetivo.
            </p>
          </div>

          <article class="section-col section-meta">
            <p>“Lograr proyectar la <a href="https://drive.google.com/file/d/14jy1MF1nHVpqDt6cAohZI_JmP-ON4Ihq/view" target="_blank">Película (click para verla)</a> en al menos 20 <a href="<?php echo get_site_url(); ?>/espacios" target="_blank">espacios</a> en diferentes partes del mundo para aumentar la exposición y el alcance del proyecto”</p>
          </article>
        </div>
      </section>

      <article class="section-basic">
        <h3>¿De qué se trata?</h3>
        <p>
          Este proyecto tiene como objetivo dar a conocer el talento de más de 160 artitas mediante la creación de una película colaborativa, al estilo de Genius Party, que incluirá una selección de los mejores cortos animados de las cuatro ediciones del Festival de Cortometrajes organizado por el canal de YouTube; <a href="https://www.youtube.com/@Lafilmotecamaldita" target="_blank">La Filmoteca Maldita</a> .
          <br><br>
          La película estará compuesta de una colección consecutiva de cortos, cada uno acompañado de su portada y respectivos créditos. El estreno de la película será a nivel mundial el <a href="#">24 de junio</a> y contará con la participación de diversos movimientos culturales de todas partes del mundo hispanohablante, quienes han aceptado ser parte de esta propuesta cinematográfica ofrecida por el colectivo artístico GMA.
        </p>
      </article>

      <section class="section-basic section-help">
        <h4>¿DE qué forma puedes ayudar?</h4>

        <div class="section-flex">
          <article class="section-col">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/pencil.svg" alt="">
            <div>
              <h5>Artistas & Colaboradores</h5>
              <p>Si te apasiona la creación de portadas, ilustraciones, piezas publicitarias y más. Todavía tenemos una gran cantidad de contenidos por crear.</p>
              <a href="https://discord.gg/p8hdu2PcHp" target="_blank" class="link-go">
                Unirme al servidor
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/go.svg" alt="">
              </a>
            </div>
          </article>
          <article class="section-col">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/people.svg" alt="">
            <div>
              <h5>Anfitriones & Gestores</h5>
              <p>Si tienes un espacio para proyectar películas o estás interesado en formar parte del circuito de distribución independiente, tenemos una guía especialmente diseñada para ti.</p>
              <a href="#postular" class="link-go">
                Cómo empezar
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/go.svg" alt="">
              </a>
            </div>
          </article>
        </div>
      </section>

      <section class="section-basic section-steps" id="promocion">
        <h3>paso a paso</h3>

        <div class="section-flex">
          <article class="section-col">
            <div>
              <span>1</span>
              <h5>Contactar con lugares</h5>
              <p>El primer paso es conseguir un espacio adecuado, como teatros, cines, restaurantes, salas de proyección independientes, cineclubs, entre otros y contactar con las personas que se encargan de estos lugares.
                <br><br>
                Para ello, te recomendamos que les envíes un mensaje o que hables con ellos directamente.
                <br><br>
                Mira este listado de mensajes que puedes usar como referencia:
              </p>
            </div>
            <a href="#mensajes" class="link-go">
              Ver mensajes
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/go.svg" alt="">
            </a>
          </article>
          <article class="section-col">
            <div>
              <span>2</span>
              <h5>Explicar el proyecto</h5>
              <p>Es muy probable que te soliciten algún tipo de documento o información. Para ayudarte con este asunto, hemos creado una sección en la que encontrarás todos los documentos e información relacionados con el proyecto.
                <br><br>
                Desde descripciones, quienes somos, hasta ejemplos de como enviar documentos.
                <br><br>
                Aquí puedes encontrar los documentos necesarios:
              </p>
            </div>
            <a href="#" class="link-go">
              Ver documentos
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/go.svg" alt="">
            </a>
          </article>

          <article class="section-col">
            <div>
              <span>3</span>
              <h5>Rellenar formulario</h5>
              <p>Una vez que hayas confirmado el espacio y la hora con los encargados (esta puede ser en cualquier hora del 24 de junio) , es importante que llenes el siguiente formulario con los datos.
                <br><br>
                De esta manera, podremos incluir el lugar del evento en la cartelera del sitio web y hacerlo visible para las personas de ese país.
              </p>
            </div>
            <a href="https://forms.gle/fysrfD9f8ZsVuwK5A" target="_blank" class="link-go">
              Formulario
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/go.svg" alt="">
            </a>
          </article>
        </div>
      </section>


      <section class="section-basic section-space" id="postular">
        <h3>postular un espacio</h3>
        <div class="section-flex">
          <div class="section-content">
            <h2>Quiero ser anfitrión de la pelicula </h2>
            <p>Si cuentas con un espacio de proyección, o ya te confirmaron uno, es importante que rellenes el siguiente formulario en el cual encontrarás la información que necesitamos para añadir el lugar a nuestra cartelera. </p>

            <a href="https://forms.gle/fysrfD9f8ZsVuwK5A" target="_blank" class="link-go link-go-outline">
              Rellenar formulario
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/go-green.svg" alt="">
            </a>
          </div>
          <div class="section-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/frog-lg.svg" alt="">
          </div>
        </div>
      </section>

      <section class="section-basic section-what">
        <h3>postular un espacio</h3>
        <div class="section-flex">
          <div class="section-content">
            <h2>beneficios de un anfitrion</h2>
            <p>Como colectivo, nuestra principal meta es la autogestión, por lo que no ofrecemos compensaciones económicas por participar en el estreno ni cobramos entrada. Creemos firmemente en que el acceso al cine y al arte debe ser gratuito y abierto para todos.
              <br><br>
              A pesar de esto, queremos agradecer a aquellos que decidan ayudarnos en el estreno y ofrecerles algunos beneficios.
            </p>
          </div>
          <div class="section-items">
            <div class="item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/rocket.svg" alt="">
              <span>Ser parte de una red internacional de distribución independiente</span>
            </div>
            <div class="item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/diamond.svg" alt="">
              <span>Participación en futuros proyectos y colaboraciones con el colectivo</span>
            </div>
            <div class="item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/thank.svg" alt="">
              <span>Agradecimientos especiales en los créditos del estreno</span>
            </div>
          </div>
        </div>
      </section>

      <section class="section-basic section-how-start" id="mensajes">
        <h3>¿No sabes como empezar?</h3>
        <h2>Mensajes para enviar a <br> potenciales espacios</h2>

        <div class="messages-types">
          <span class="color-professional">Profesional</span>
          <span class="color-informal">Informal</span>
          <span class="color-enthusiastic">Entusiasta</span>
          <span class="color-informative">Informativo</span>
          <span class="color-fun">Alegre</span>
        </div>

        <h5>MENSAJES DIRECTOS</h5>

        <section class="message-category">
          <h6>Mensaje para enviar a Cinematecas</h6>
          <div class="messages-list">
            <div class="message-item background-professional color-professional">
              <p>Hola, mi nombre es {Nombre} y soy parte del colectivo de artistas GMA. Estamos organizando el estreno mundial de una película de cortos de animación independiente el día 24 de junio y nos gustaría saber si estarían interesados en proyectarla en su cinemateca. Creemos que sería una excelente oportunidad para sus espectadores de disfrutar de una propuesta diferente y novedosa. ¿Qué les parece?</p>
              <img class="copy-action" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/copy.svg" alt="">
            </div>

            <div class="message-item background-informative color-informative">
              <p>¡Buen día! Me presento, soy {Nombre} del colectivo artístico GMA y me pongo en contacto con ustedes para presentarles una propuesta cultural. Estamos organizando el estreno mundial de una película de cortos de animación independiente y nos encantaría contar con su cinemateca para proyectarla el día 24 de junio.
                <br><br>
                Creemos que esta sería una excelente oportunidad para que sus espectadores disfruten de una propuesta diferente y novedosa, que además es el resultado del trabajo de un grupo de artistas independientes. Por supuesto, podríamos llegar a un acuerdo en cuanto a la logística y las condiciones de proyección. Les agradecemos su atención y esperamos su respuesta. ¡Saludos cordiales!
              </p>
              <img class="copy-action" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/copy.svg" alt="">
            </div>
          </div>
        </section>

        <section class="message-category">
          <h6>Mensaje para enviar a Cineclubs</h6>
          <div class="messages-list">
            <div class="message-item background-professional color-professional">
              <p>Hola, soy {Nombre} del colectivo artístico GMA. Me gustaría saber si estarían interesados en participar del estreno mundial de una película de cortos de animación independiente que organizaremos el día 24 de junio. Este evento se está convirtiendo en un circuito de divulgación cultural y sería genial contar con su participación. ¿Qué les parece?</p>
              <img class="copy-action" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/copy.svg" alt="">
            </div>

            <div class="message-item background-informative color-informative">
              <p>
                ¡Hola! Soy {Nombre} del colectivo artístico GMA. ¿Qué tal están? Les escribo porque estamos organizando el estreno mundial de una peli de cortos animados independientes y me preguntaba si les interesaría participar. ¡Sería genial contar con su presencia en este evento que está siendo un bombazo cultural! ¿Qué les parece?
              </p>
              <img class="copy-action" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/copy.svg" alt="">
            </div>
          </div>
        </section>

        <section class="message-category">
          <h6>Mensaje para enviar a restaurantes</h6>
          <div class="messages-list">
            <div class="message-item background-professional color-professional">
              <p>Hola, mi nombre es {Nombre} y pertenezco al colectivo artístico GMA. Nos gustaría saber si estarían interesados en ser sede de un estreno mundial de una película de cortos de animación independiente que estamos organizando el día 24 de junio. Creemos que sería una experiencia diferente y única para sus clientes, y una excelente forma de atraer nuevas visitas. ¿Les interesaría?</p>
              <img class="copy-action" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/copy.svg" alt="">
            </div>
          </div>
        </section>

        <section class="message-category">
          <h6>Mensaje para enviar a restaurantes</h6>
          <div class="messages-list">
            <div class="message-item background-professional color-professional">
              <p>Hola, mi nombre es {Nombre} y formo parte del colectivo artístico GMA. Estamos organizando el estreno mundial de una película de cortos de animación independiente el día 24 de junio y nos gustaría saber si les interesaría ser sede de este evento en su bar. Sería una excelente oportunidad para atraer nuevos clientes y ofrecer una propuesta diferente. ¿Qué les parece?</p>
              <img class="copy-action" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/copy.svg" alt="">
            </div>
          </div>
        </section>

        <section class="message-category">
          <h6>Mensaje para enviar a Salas de proyección</h6>
          <div class="messages-list">
            <div class="message-item background-professional color-professional">
              <p>Hola, soy {Nombre} del colectivo artístico GMA. Me gustaría saber si estarían interesados en participar del estreno mundial de una película de cortos de animación independiente que organizaremos el día 24 de junio. Su sala de proyección sería una excelente locación para este evento y creemos que sería una experiencia única para sus espectadores. ¿Les interesaría participar?</p>
              <img class="copy-action" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/copy.svg" alt="">
            </div>
          </div>
        </section>

        <section class="message-category">
          <h6>Mensaje para enviar a galerias de arte</h6>
          <div class="messages-list">
            <div class="message-item background-professional color-professional">
              <p>Hola, mi nombre es {Nombre} y pertenezco al colectivo artístico GMA. Nos gustaría saber si estarían interesados en ser sede de un estreno mundial de una película de cortos de animación independiente que estamos organizando el día 24 de junio. Este evento podría complementar su oferta cultural y sería una excelente oportunidad para atraer nuevos visitantes. ¿Les interesaría participar?</p>
              <img class="copy-action" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/copy.svg" alt="">
            </div>
          </div>
        </section>

        <br><br>
        <br><br>
        <h5>CORREOS</h5>

        <section class="message-category">
          <h6>Correo para enviar a universidades</h6>
          <div class="messages-list">
            <div class="message-item background-professional color-professional">
              <p>
                Estimado/a {nombre de la autoridad},
                <br><br>
                Por medio de la presente, yo {tu nombre aquí}, {cargo/estudiante/colaborador/etc.} en {nombre de la institución/organización}, me dirijo a usted para hacer una solicitud formal de proyección de una película en {lugar y fecha}.
                <br><br>

                {Breve descripción sobre la película a proyectar y su relevancia}.
                <br><br>

                Por lo tanto, le solicito amablemente que nos otorgue el permiso necesario para llevar a cabo la proyección de esta película en las instalaciones de su institución. {Mencionar detalles sobre el lugar de proyección y el equipo necesario para la misma}.
                <br><br>

                Sin más nada que agregar, agradezco la atención prestada y quedo atento por cualquier duda o comentario generado de la misma solicitud.
                <br><br>

                Un cordial saludo.
                <br><br>

                Atentamente,
                <br><br>

                {tu nombre aquí} {Firma (opcional)}
              </p>
              <img class="copy-action" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/copy.svg" alt="">
            </div>
          </div>
        </section>

        <section class="message-category">
          <h6>Correo para enviar a universidades</h6>
          <div class="messages-list">
            <div class="message-item background-professional color-professional">
              <p>Hola, mi nombre es {Nombre} y pertenezco al colectivo artístico GMA. Nos gustaría saber si estarían interesados en ser sede de un estreno mundial de una película de cortos de animación independiente que estamos organizando el día 24 de junio. Este evento podría complementar su oferta cultural y sería una excelente oportunidad para atraer nuevos visitantes. ¿Les interesaría participar?</p>
              <img class="copy-action" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/copy.svg" alt="">
            </div>
          </div>
        </section>

        <section class="message-category">
          <h6>Correo para enviar a escuelas de arte</h6>
          <div class="messages-list">
            <div class="message-item background-professional color-professional">
              <p>Hola, mi nombre es {Nombre} y pertenezco al colectivo artístico GMA. Nos gustaría saber si estarían interesados en ser sede de un estreno mundial de una película de cortos de animación independiente que estamos organizando el día 24 de junio. Este evento podría complementar su oferta cultural y sería una excelente oportunidad para atraer nuevos visitantes. ¿Les interesaría participar?</p>
              <img class="copy-action" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/copy.svg" alt="">
            </div>
          </div>
        </section>
      </section>

      <section class="section-basic section-documentos" id="documentos">
        <h3>Documentos usados por la comunidad</h3>
        <h2>Documentos que se <br> pueden utilizar</h2>

        <div class="flex-documentos">
          <a href="#" class="document-card">
            <p>Nombre del documento</p>
          </a>
          <a href="#" class="document-card">
            <p>Nombre del documento</p>
          </a>
          <a href="#" class="document-card">
            <p>Nombre del documento</p>
          </a>
          <a href="#" class="document-card">
            <p>Nombre del documento</p>
          </a>
        </div>
      </section>
    </div>
  </main>

  <!-- Import footer -->
  <?php get_footer(); ?>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/izitoast/js/iziToast.min.js" type="text/javascript"></script>

  <script>
    $(".message-category").click(function() {
      if ($(this).hasClass("open")) {
        $(".message-category").removeClass("open")
      } else {
        $(".message-category").removeClass("open")
        $(this).addClass("open")
      }
    })

    $(".copy-action").click(function() {
      const html_copy = $(this).prev("p").html()

      navigator.clipboard.writeText(html_copy)
        .then(() => {
          iziToast.show({
            message: '¡Mensaje copiado al portapapeles!',
            timeout: 3000,
            color: "green"
          });
        })
        .catch(err => {
          console.error('Error al copiar al portapapeles:', err)
        })

    })
  </script>
</body>

</html>