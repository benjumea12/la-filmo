<?php
add_action('wp_head', 'add_meta_tags');
function add_meta_tags()
{
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Filmoteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
