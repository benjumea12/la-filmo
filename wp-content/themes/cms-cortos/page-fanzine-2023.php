<?php
$url_fanzine = of_get_option("url_fanzine");
$description_fanzine = of_get_option("description_fanzine");
$image_fanzine = of_get_option("image_fanzine");

$og_title = of_get_option("og_title");
?>

<!-- Codigo html -->
<!doctype html>
<html lang="es">

<head>
  <title><?php echo $og_title; ?> | El Fanzine Maldito</title>

  <!-- Import default project head content -->
  <?php wp_head(); ?>

  <meta property="og:title" content="El Fanzine Maldito" />
  <meta property="og:description" content="<?php echo $description_fanzine; ?>" />
  <meta property="og:url" content="<?php echo get_site_url(); ?>/fanzine" />
  <meta property="og:image" content="<?php echo $image_fanzine; ?>" />
  <meta property="og:type" content="article" />

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib//flipbook/css/flipbook.style.css">
  <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/flipbook/js/flipbook.min.js"></script>

</head>

<body>

  <!-- Import header -->
  <?php get_header(); ?>

  <!-- Page content -->
  <main class="main-page-fanzine-item">
    <div id="container-book"></div>
  </main>
  <!-- End page content -->

  <!-- Import footer -->
  <?php get_footer(); ?>

  <script type="text/javascript">
    jQuery(document).ready(function() {
      jQuery("#container-book").flipBook({
        pdfUrl: "<?php echo $url_fanzine; ?>"
      });
    })
  </script>

</body>

</html>