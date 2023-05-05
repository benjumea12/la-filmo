<?php

/**
 * The theme option name is set as 'options-theme-customizer' here.
 * In your own project, you should use a different option name.
 * I'd recommend using the name of your theme.
 *
 * This option name will be used later when we set up the options
 * for the front end theme customizer.
 */

function optionsframework_option_name()
{

  $optionsframework_settings = get_option('optionsframework');

  // Edit 'options-theme-customizer' and set your own theme name instead
  $optionsframework_settings['id'] = 'options_theme_customizer';
  update_option('optionsframework', $optionsframework_settings);
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 */

function getAuthors()
{
  $arrayOptions = array();

  $args = array(
    'post_type' => 'artista',
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

function optionsframework_options()
{

  // Test data
  $test_array = array(
    "First" => "First Option",
    "Second" => "Second Option",
    "Third" => "Third Option"
  );

  $options = array();

  $options[] = array(
    "name" => "Fanzine",
    "type" => "heading"
  );

  $options['url_fanzine'] = array(
    "name" => "Url del fanzine",
    "id" => "url_fanzine",
    "type" => "upload",
  );

  $options['description_fanzine'] = array(
    "name" => "Descripción del fanzine",
    "id" => "description_fanzine",
    "type" => "textarea",
  );

  $options['image_fanzine'] = array(
    "name" => "Portada del fanzine",
    "id" => "image_fanzine",
    "type" => "upload",
  );

  $options[] = array(
    "name" => "Etiquetas Open Graph",
    "type" => "heading"
  );

  $options['og_title'] = array(
    "name" => "Titulo",
    "id" => "og_title",
    "type" => "text",
  );

  $options['og_description'] = array(
    "name" => "Descripción",
    "id" => "og_description",
    "type" => "textarea",
  );

  $options['og_image'] = array(
    "name" => "Imagen",
    "id" => "og_image",
    "type" => "upload",
  );



  $options[] = array(
    "name" => "Sobre el proyecto",
    "type" => "heading"
  );

  $options['image_1'] = array(
    "name" => "Imagen 1",
    "id" => "image_1",
    "type" => "upload",
  );

  $options['artist_1'] = array(
    "name" => "Artista imagen 1",
    "id" => "artist_1",
    "type" => "text",
  );

  $options['link_1'] = array(
    "name" => "Link artista 1",
    "id" => "link_1",
    "type" => "text",
  );

  $options['image_2'] = array(
    "name" => "Imagen 2",
    "id" => "image_2",
    "type" => "upload",
  );

  $options['artist_2'] = array(
    "name" => "Artista imagen 2",
    "id" => "artist_2",
    "type" => "text",
  );

  $options['link_2'] = array(
    "name" => "Link artista 2",
    "id" => "link_2",
    "type" => "text",
  );

  $options['about_us'] = array(
    "name" => "Sobre nosotros",
    "id" => "about_us",
    "type" => "textarea",
  );

  $options['history'] = array(
    "name" => "Historia",
    "id" => "history",
    "type" => "textarea",
  );

  $options['image_3'] = array(
    "name" => "Imagen 3",
    "id" => "image_3",
    "type" => "upload",
  );

  $options['artist_3'] = array(
    "name" => "Artista imagen 3",
    "id" => "artist_3",
    "type" => "text",
  );

  $options['link_3'] = array(
    "name" => "Link artista 3",
    "id" => "link_3",
    "type" => "text",
  );

  $options['image_4'] = array(
    "name" => "Imagen 4",
    "id" => "image_4",
    "type" => "upload",
  );

  $options['artist_4'] = array(
    "name" => "Artista imagen 4",
    "id" => "artist_4",
    "type" => "text",
  );

  $options['link_4'] = array(
    "name" => "Link artista 4",
    "id" => "link_4",
    "type" => "text",
  );

  $options['vision_mission'] = array(
    "name" => "Misión y Visión",
    "id" => "vision_mission",
    "type" => "textarea",
  );

  $options['about_us_2'] = array(
    "name" => "Quiénes somos",
    "id" => "about_us_2",
    "type" => "textarea",
  );

  $options['image_5'] = array(
    "name" => "Imagen 5",
    "id" => "image_5",
    "type" => "upload",
  );

  $options['artist_5'] = array(
    "name" => "Artista imagen 5",
    "id" => "artist_5",
    "type" => "text",
  );

  $options['link_5'] = array(
    "name" => "Link artista 5",
    "id" => "link_5",
    "type" => "text",
  );

  $options['image_6'] = array(
    "name" => "Imagen 6",
    "id" => "image_6",
    "type" => "upload",
  );

  $options['artist_6'] = array(
    "name" => "Artista imagen 6",
    "id" => "artist_6",
    "type" => "text",
  );

  $options['link_6'] = array(
    "name" => "Link artista 6",
    "id" => "link_6",
    "type" => "text",
  );

  $options['our_pillars'] = array(
    "name" => "Nuestros pilares",
    "id" => "our_pillars",
    "type" => "textarea",
  );

  $options['contact'] = array(
    "name" => "Contacto",
    "id" => "contact",
    "type" => "textarea",
  );


  return $options;
}

/**
 * Front End Customizer
 *
 * WordPress 3.4 Required
 */

add_action('customize_register', 'options_theme_customizer_register');

function options_theme_customizer_register($wp_customize)
{

  /**
   * This is optional, but if you want to reuse some of the defaults
   * or values you already have built in the options panel, you
   * can load them into $options for easy reference
   */

  $options = optionsframework_options();

  /* Basic */

  $wp_customize->add_section('options_theme_customizer_basic', array(
    'title' => __('Basic', 'options_theme_customizer'),
    'priority' => 100
  ));

  $wp_customize->add_setting('options_theme_customizer[example_text]', array(
    'default' => $options['example_text']['std'],
    'type' => 'option'
  ));

  $wp_customize->add_control('options_theme_customizer_example_text', array(
    'label' => $options['example_text']['name'],
    'section' => 'options_theme_customizer_basic',
    'settings' => 'options_theme_customizer[example_text]',
    'type' => $options['example_text']['type']
  ));

  $wp_customize->add_setting('options_theme_customizer[example_select]', array(
    'default' => $options['example_select']['std'],
    'type' => 'option'
  ));

  $wp_customize->add_control('options_theme_customizer_example_select', array(
    'label' => $options['example_select']['name'],
    'section' => 'options_theme_customizer_basic',
    'settings' => 'options_theme_customizer[example_select]',
    'type' => $options['example_select']['type'],
    'choices' => $options['example_select']['options']
  ));

  $wp_customize->add_setting('options_theme_customizer[example_radio]', array(
    'default' => $options['example_radio']['std'],
    'type' => 'option'
  ));

  $wp_customize->add_control('options_theme_customizer_example_radio', array(
    'label' => $options['example_radio']['name'],
    'section' => 'options_theme_customizer_basic',
    'settings' => 'options_theme_customizer[example_radio]',
    'type' => $options['example_radio']['type'],
    'choices' => $options['example_radio']['options']
  ));

  $wp_customize->add_setting('options_theme_customizer[example_checkbox]', array(
    'default' => $options['example_checkbox']['std'],
    'type' => 'option'
  ));

  $wp_customize->add_control('options_theme_customizer_example_checkbox', array(
    'label' => $options['example_checkbox']['name'],
    'section' => 'options_theme_customizer_basic',
    'settings' => 'options_theme_customizer[example_checkbox]',
    'type' => $options['example_checkbox']['type']
  ));

  /* Extended */

  $wp_customize->add_section('options_theme_customizer_extended', array(
    'title' => __('Extended', 'options_theme_customizer'),
    'priority' => 110
  ));

  $wp_customize->add_setting('options_theme_customizer[example_uploader]', array(
    'type' => 'option'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'example_uploader', array(
    'label' => $options['example_uploader']['name'],
    'section' => 'options_theme_customizer_extended',
    'settings' => 'options_theme_customizer[example_uploader]'
  )));

  $wp_customize->add_setting('options_theme_customizer[example_colorpicker]', array(
    'default' => $options['example_colorpicker']['std'],
    'type' => 'option'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'link_color', array(
    'label'   => $options['example_colorpicker']['name'],
    'section' => 'options_theme_customizer_extended',
    'settings'   => 'options_theme_customizer[example_colorpicker]'
  )));
}
