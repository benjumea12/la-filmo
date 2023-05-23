<?php
add_action('wp_head', 'add_meta_tags');
function add_meta_tags()
{
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/magnific-popup/magnific-popup.css">

    <!-- App styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css?ver=1.2.29">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon">
<?php
}
