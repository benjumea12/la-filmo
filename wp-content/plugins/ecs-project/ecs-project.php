<?php

/*
Plugin Name: ECS PROJECT
Plugin URI: #
Description: Plugin para crear modelos personalizados de "Posts"
Author: ANONIMO
Version: 1.0
Author URI: https://ANONIMO.com
Text Domain: ANONIMO.com
Domain Path: /languages
*/

/**
 * Created by PhpStorm.
 * User: dev
 * Date: 9/25/15
 * Time: 9:38 AM
 */

spl_autoload_register('project_autoloader');

function project_autoloader($class_name)
{

  $class_components = explode("_", $class_name);

  if (
    isset($class_components[0]) && $class_components[0] == "Project" &&
    isset($class_components[1])
  ) {

    $class_directory = $class_components[1];

    unset($class_components[0], $class_components[1]);

    $file_name = implode("_", $class_components);

    $base_path = plugin_dir_path(__FILE__);

    switch ($class_directory) {
      case 'Model':

        $file_path = $base_path . "models/class-project-model-" . lcfirst($file_name) . '.php';
        if (file_exists($file_path) && is_readable($file_path)) {
          include $file_path;
        }

        break;
    }
  }
}

class ECS_Project_Manager
{

  public $base_path;
  public $artist;
  public $shortfilm;
  public $sliderhome;

  function __construct()
  {

    $this->base_path = plugin_dir_path(__FILE__);
    require_once $this->base_path . 'class-twig-initializer.php';

    //Add models to WORDPRESS
    $this->artist = new Project_Model_Artist($this);
    $this->shortfilm = new Project_Model_Shortfilm($this);
    $this->sliderhome = new Project_Model_Sliderhome($this);


    add_action('cmb2_admin_init', array($this, 'add_metaboxes'));
    add_action('init', array($this, 'textdomain'));
  }

  public function add_metaboxes()
  {
  }

  public function textdomain()
  {
    load_plugin_textdomain('ecs', false, dirname(plugin_basename(__FILE__)) . '/languages/');
  }
}
global $ecsProject;

$ecsProject = new ECS_Project_Manager();

do_action('ecs_project_initialized');
