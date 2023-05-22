<?php
/**
 * Plugin Name:       Custom Block Package
 * Description:       A plugin for adding custom blocks to a theme.
 * Version:           1.0.0
 * Requires at least: 5.9
 * Requires PHP:      7.2
 * Author:            Łukasz Lasota
 * Author URI:        https://github.com/LukaszLasota
 * Text Domain:       custom-block-package
 */

if(!function_exists('add_action')) {
  echo 'Wygląda na to, że trafiłeś tu przez przypadek. 😛';
  exit;
}

// Setup
define('UP_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('UP_PLUGIN_FILE', __FILE__);

// Includes
$rootFiles = glob(UP_PLUGIN_DIR . 'includes/*.php');
$subdirectoryFiles = glob(UP_PLUGIN_DIR . 'includes/**/*.php');
$allFiles = array_merge($rootFiles, $subdirectoryFiles);

foreach($allFiles as $filename) {
  include_once($filename);
}

add_action('init', 'up_register_blocks');
