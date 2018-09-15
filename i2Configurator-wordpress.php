<?php
/**
 * @package  i2ConfiguratorWordpress
 */
/*
Plugin Name: i2 Configurator
Plugin URI: http://www.interactiveimpressions.com
Description: Simple and clean 3D Model uploader and configurator plugin for wordpress.
Version: 0.0.1
Author: Sebastian Alff
Author URI: http://www.interactiveimpressions.com
Text Domain: i2Configurator
*/

// If this file is called firectly, abort!!!
defined( 'ABSPATH' ) or die( 'Hey, what are you doing here? You silly human!' );

// Require once the Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * The code that runs during plugin activation
 */
function activate_i2Configurator_plugin() {
	Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_i2Configurator_plugin' );

/**
 * The code that runs during plugin deactivation
 */
function deactivate_i2Configurator_plugin() {
	Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_i2Configurator_plugin' );

/**
 * Initialize all the core classes of the plugin
 */
if ( class_exists( 'Inc\\Init' ) ) {
	Inc\Init::register_services();
}