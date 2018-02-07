<?php

/**
 *
 * Plugin Name:       Disable Blog
 * Description:       This plugin disables native WordPress blog functionality.
 * Version:           1.2.7
 * Author:            Tartilas.com
 * Text Domain:       disable-blog
 * Domain Path:       /languages
 */

/**
 * Exit if accessed directly.
 *
 * Prevent direct access to this file. 
 *
 * @since 0.1.0
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-disable-blog-activator.php
 */
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-disable-blog-activator.php';
	Disable_Blog_Activator::activate();
}
/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-disable-blog-deactivator.php
 */
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-disable-blog-deactivator.php';
	Disable_Blog_Deactivator::deactivate();
}
register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-disable-blog.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.4.0
 */
function run_disable_blog() {

	$plugin = new Disable_Blog();
	$plugin->run();

}
run_disable_blog();
