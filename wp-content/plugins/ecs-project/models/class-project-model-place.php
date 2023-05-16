<?php

class Project_Model_Place
{

  private $post_type_name;
  private $post_type_singular;
  private $post_type_plural;
  public $template_parser;
  private $menu_icon;
  private $request_type_taxonomy_country;
  private $request_type_taxonomy_country_singular;
  private $request_type_taxonomy_country_plural;

  function __construct($template_parser)
  {
    $this->template_parser = $template_parser;
    $this->post_type_name = 'place';
    $this->post_type_singular = __('Espacio', 'enigmind');
    $this->post_type_plural = __('Espacios', 'enigmind');
    $this->menu_icon = 'dashicons-editor-video';

    $this->request_type_taxonomy_country = 'place_country';
    $this->request_type_taxonomy_country_singular = __('País', 'enigmind');
    $this->request_type_taxonomy_country_plural = __('Paises', 'enigmind');

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
      'description'         => __('Slider Home', 'enigmind'),
      'supports'            => array('title', 'excerpt', 'thumbnail'),
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

  function artist_type_taxonomy()
  {
    $labels = array(
      'name'              => $this->request_type_taxonomy_country_singular,
      'singular_name'     => $this->request_type_taxonomy_country_singular,
      'search_items'      => sprintf(__('Buscar %s', 'enigmind'), $this->request_type_taxonomy_country_plural),
      'all_items'         => sprintf(__('Todos los %s', 'enigmind'), $this->request_type_taxonomy_country_plural),
      'parent_item'       => __('Parent Genre', 'textdomain'),
      'parent_item_colon' => __('Parent Genre:', 'textdomain'),
      'edit_item'         => sprintf(__('Editar %s', 'enigmind'), $this->request_type_taxonomy_country_singular),
      'update_item'       => sprintf(__('Actualizar %s', 'enigmind'), $this->request_type_taxonomy_country_singular),
      'add_new_item'      => sprintf(__('Agregar nuevo %s', 'enigmind'), $this->request_type_taxonomy_country_singular),
      'new_item_name'     => sprintf(__('Nuevo %s', 'enigmind'), $this->request_type_taxonomy_country_singular),
      'menu_name'         => $this->request_type_taxonomy_country_plural,
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
        'slug' => $this->request_type_taxonomy_country
      ),
      'hierarchical'  => true
    );

    register_taxonomy($this->request_type_taxonomy_country, array($this->post_type_name), $args);
  }

  function create_taxonomies()
  {
    $this->artist_type_taxonomy();
  }

  function metabox_general()
  {
    $prefix = 'places_';

    $cmb = new_cmb2_box(array(
      'id'           => $prefix . 'general',
      'title'        => __('Información extra', 'enigmind'),
      'object_types' => array($this->post_type_name,), // Post type
      'context'      => 'normal',
      'priority'     => 'high',
      'show_names'   => true, // Show field names on the left
    ));

    $cmb->add_field(array(
      'name'    => 'Ciudad',
      'desc'    => '',
      'id'      => $prefix . 'city',
      'type'    => 'text'
    ));

    $cmb->add_field(array(
      'name'    => 'Dirección',
      'desc'    => '',
      'id'      => $prefix . 'address',
      'type'    => 'text'
    ));

    // $cmb->add_field(array(
    //   'name'        => 'Hora',
    //   'desc'        => 'Ejemplo "6:00"',
    //   'placeholder' => '',
    //   'id'          => $prefix . 'hour',
    //   'type'        => 'text'
    // ));

    $cmb->add_field(array(
      'name' => 'Hora',
      'id'          => $prefix . 'hour',
      'type' => 'text_time'
    ));

    $cmb->add_field(array(
      'name' => 'Fehca',
      'id'          => $prefix . 'date',
      'type' => 'text_date',
    ));

    $cmb->add_field(array(
      'name'    => 'Link de más información',
      'desc'    => '',
      'id'      => $prefix . 'more',
      'type'    => 'text'
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
