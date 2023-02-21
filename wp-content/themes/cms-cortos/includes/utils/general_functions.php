<?php
add_action('wp_head', 'add_meta_tags');
function add_meta_tags()
{
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Filmoteca</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
    <!-- CSS libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
<?php
}

add_theme_support('post-thumbnails');

add_action('wp_head', 'pluginname_ajaxurl');
function pluginname_ajaxurl()
{
?>
    <script type="text/javascript">
        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
        var baseurl = '<?php echo site_url(); ?>';
    </script>
<?php
}
