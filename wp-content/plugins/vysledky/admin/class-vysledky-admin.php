<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://wiki.jprodina.cz
 * @since      1.0.0
 *
 * @package    Vysledky
 * @subpackage Vysledky/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Vysledky
 * @subpackage Vysledky/admin
 * @author     Josef <josef@gmail.com>
 */
class Vysledky_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
                
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Vysledky_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Vysledky_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/vysledky-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Vysledky_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Vysledky_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/vysledky-admin.js', array( 'jquery' ), $this->version, false );

	}
        /**
         * Register the administration menu for this plugin into the WordPress Dashboard menu.
         *
         * @since    1.0.0
         */
        public function add_plugin_admin_menu() {
            
            /*
             * Add a settings page for this plugin to the Settings menu.
             *
             * NOTE:  Alternative menu locations are available via WordPress administration menu functions.
             *
             *        Administration Menus: http://codex.wordpress.org/Administration_Menus
             *
             */
            $plugin_screen_hook_suffix = add_menu_page( __('Správa výsledků', $this->plugin_name ), 'Výsledky', 'manage_options', $this->plugin_name, array($this, 'display_plugin_setup_page')
            );
        }
        /**
         * Render the settings page for this plugin.
         *
         * @since    1.0.0
         */
        public function display_plugin_setup_page() {
            include_once( 'partials/vysledky-admin-display.php' );
        }
        
}
