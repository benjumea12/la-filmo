<?php

class Project_Model_Shortfilm
{

  private $post_type_name;
  private $post_type_singular;
  private $post_type_plural;
  public $template_parser;
  private $menu_icon;
  private $request_type_taxonomy_category;
  private $request_type_taxonomy_category_singular;
  private $request_type_taxonomy_category_plural;

  function __construct($template_parser)
  {
    $this->template_parser = $template_parser;
    $this->post_type_name = 'cortometraje';
    $this->post_type_singular = __('Cortometraje', 'enigmind');
    $this->post_type_plural = __('Cortometrajes', 'enigmind');

    $this->request_type_taxonomy_category = 'category';
    $this->request_type_taxonomy_category_singular = __('Categoría', 'enigmind');
    $this->request_type_taxonomy_category_plural = __('Categorías', 'enigmind');

    $this->menu_icon = 'dashicons-format-video';

    add_action('init', array($this, 'create_post_type'));
    add_action('init', array($this, 'create_taxonomies'));
    add_action('cmb2_admin_init', array($this, 'add_meta_boxes'));

    add_action('wp_enqueue_scripts', array($this, 'load_frontend_scripts'));
    add_action('wp_enqueue_scripts', array($this, 'load_frontend_styles'));

    add_action('admin_print_styles-post.php', array($this, 'load_admin_styles'), 1000);
    add_action('admin_print_styles-post-new.php', array($this, 'load_admin_styles'), 1000);

    add_action('admin_print_scripts-post.php', array($this, 'load_admin_scripts'), 1000);
    add_action('admin_print_scripts-post-new.php', array($this, 'load_admin_scripts'), 1000);
  }

  function create_post_type()
  {

    $labels = array(
      'name' => sprintf(_x('%s', 'post type general name', 'enigmind'), $this->post_type_plural),
      'singular_name' => sprintf(_x('%s', 'post type singular name', 'enigmind'), $this->post_type_singular),
      'add_new' => _x('Agregar Nueva', $this->post_type_singular, 'enigmind'),
      'add_new_item' => sprintf(__('Nuevo %s', 'enigmind'), $this->post_type_singular),
      'edit_item' => sprintf(__('Editar %s', 'enigmind'), $this->post_type_singular),
      'new_item' => sprintf(__('Agregar %s', 'enigmind'), $this->post_type_singular),
      'all_items' => sprintf(__('%s', 'enigmind'), $this->post_type_plural),
      'view_item' => sprintf(__('Ver %s', 'enigmind'), $this->post_type_singular),
      'search_items' => sprintf(__('Buscar', 'enigmind'), $this->post_type_plural),
      'not_found' => sprintf(__('No %s Encontrados', 'enigmind'), $this->post_type_plural),
      'not_found_in_trash' => sprintf(__('No %s Encontrados en la Papelera', 'enigmind'), $this->post_type_plural),
      'parent_item_colon' => '',
      'menu_name' => $this->post_type_plural,
    );

    $args = array(
      'labels' => $labels,
      'description'         => __('Productos', 'enigmind'),
      'supports'            => array('title', 'editor', 'excerpt', 'thumbnail'),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 4,
      'menu_icon'           =>  $this->menu_icon,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
    );

    register_post_type($this->post_type_name, $args);
  }


  function category_taxonomy()
  {
    $labels = array(
      'name'              => $this->request_type_taxonomy_category_singular,
      'singular_name'     => $this->request_type_taxonomy_category_singular,
      'search_items'      => sprintf(__('Buscar %s', 'enigmind'), $this->request_type_taxonomy_category_plural),
      'all_items'         => sprintf(__('Todos los %s', 'enigmind'), $this->request_type_taxonomy_category_plural),
      'parent_item'       => __('Parent Genre', 'textdomain'),
      'parent_item_colon' => __('Parent Genre:', 'textdomain'),
      'edit_item'         => sprintf(__('Editar %s', 'enigmind'), $this->request_type_taxonomy_category_singular),
      'update_item'       => sprintf(__('Actualizar %s', 'enigmind'), $this->request_type_taxonomy_category_singular),
      'add_new_item'      => sprintf(__('Agregar nuevo %s', 'enigmind'), $this->request_type_taxonomy_category_singular),
      'new_item_name'     => sprintf(__('Nuevo %s', 'enigmind'), $this->request_type_taxonomy_category_singular),
      'menu_name'         => $this->request_type_taxonomy_category_plural,
    );

    $args = array(
      'hierarchical'      => true,
      'labels'            => $labels,
      'show_ui'           => true,
      'show_admin_column' => true,
      'show_in_menu'          => true,
      'show_in_nav_menus'     => true,
      'query_var'         => true,
      'rewrite'       => array(
        'slug' => $this->request_type_taxonomy_category
      ),
      'hierarchical'  => true
    );

    register_taxonomy($this->request_type_taxonomy_category, array($this->post_type_name), $args);
  }


  function create_taxonomies()
  {
    $this->category_taxonomy();
  }

  function getAuthors()
  {
    $arrayOptions = array();

    $args = array(
      'post_type' => 'autor',
      'post_status' => 'publish',
      'posts_per_page' => -1,
    );

    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) :
      while ($the_query->have_posts()) :
        $the_query->the_post();
        $arrayOptions[get_the_ID()] = __(get_the_title(), 'author');
      endwhile;
    endif;

    return $arrayOptions;
  }

  function metabox_general()
  {
    $prefix = 'shortfilm_';

    $cmb = new_cmb2_box(array(
      'id'           => $prefix . 'general',
      'title'        => __('Información extra', 'enigmind'),
      'object_types' => array($this->post_type_name,), // Post type
      'context'      => 'normal',
      'priority'     => 'high',
      'show_names'   => true, // Show field names on the left
    ));

    $cmb->add_field(array(
      'name'    => 'Insertar IFRAME del video (Youtube)',
      'desc'    => '',
      'id'      => $prefix . 'youtube',
      'type'    => 'textarea_code'
    ));

    $cmb->add_field(array(
      'name'             => 'Autor del corto',
      'desc'             => '',
      'id'               => $prefix . 'author',
      'type'             => 'select',
      'show_option_none' => true,
      'default'          => 'custom',
      'options'          => $this->getAuthors(),
    ));
  }

  function add_meta_boxes()
  {
    $this->metabox_general();
  }

  function load_admin_styles()
  {
    global $post_type;

    if ($this->post_type_name != $post_type) {
      return;
    }
  }

  function load_frontend_styles()
  {

    global $post_type;

    if ($this->post_type_name != $post_type) {
      return;
    }
  }

  function load_admin_scripts()
  {
    global $post_type;

    if ($this->post_type_name != $post_type) {
      return;
    }
  }

  function load_frontend_scripts()
  {

    global $post_type;

    if ($this->post_type_name != $post_type) {
      return;
    }
  }
}
