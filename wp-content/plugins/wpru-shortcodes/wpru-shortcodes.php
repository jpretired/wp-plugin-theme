<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              wiki.jprodina.cz
 * @since             1.0.0
 * @package           Wpru_Shortcodes
 *
 * @wordpress-plugin
 * Plugin Name:       Wpru shortcodes
 * Plugin URI:        wiki.jprodina.cz
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Josef
 * Author URI:        wiki.jprodina.cz
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpru-shortcodes
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WPRU_SHORTCODES_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wpru-shortcodes-activator.php
 */
function activate_wpru_shortcodes() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpru-shortcodes-activator.php';
	Wpru_Shortcodes_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wpru-shortcodes-deactivator.php
 */
function deactivate_wpru_shortcodes() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpru-shortcodes-deactivator.php';
	Wpru_Shortcodes_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wpru_shortcodes' );
register_deactivation_hook( __FILE__, 'deactivate_wpru_shortcodes' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wpru-shortcodes.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wpru_shortcodes() {

	$plugin = new Wpru_Shortcodes();
	$plugin->run();

}
// Add Shortcode

function wpru_hello_world_shortcode( $atts ) {

    // Attributes
    $atts = shortcode_atts(
	array(
	'name' => 'world',
        ),
	$atts
    );
    return 'Hello ' . $atts['name'] . '!<br /><br />';
}

add_shortcode( 'helloworld', 'wpru_hello_world_shortcode' );

run_wpru_shortcodes();
