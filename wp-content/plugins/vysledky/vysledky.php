<?php

/**
 * The plugin bootstrap file, co to bootstrap musím někde zjistit.
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://wiki.jprodina.cz
 * @since             1.0.0
 * @package           Vysledky
 *
 * @wordpress-plugin
 * Plugin Name:       Výsledky
 * Plugin URI:        http://wiki.jprodina.cz
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Josef
 * Author URI:        http://wiki.jprodina.cz
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       vysledky
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
define( 'VYSLEDKY_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-vysledky-activator.php
 */
function activate_vysledky() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vysledky-activator.php';
	Vysledky_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-vysledky-deactivator.php
 */
function deactivate_vysledky() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vysledky-deactivator.php';
	Vysledky_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_vysledky' );
register_deactivation_hook( __FILE__, 'deactivate_vysledky' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-vysledky.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_vysledky() {

	$plugin = new Vysledky();
	$plugin->run();

}
run_vysledky();
