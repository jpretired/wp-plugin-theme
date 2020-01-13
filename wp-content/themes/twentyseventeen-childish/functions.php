<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

// BEGIN CTC ENQUEUE PLUGIN ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below
if ( !function_exists( 'chld_thm_cfg_plugin_css' ) ):
    function chld_thm_cfg_plugin_css() {
        wp_enqueue_style( 'chld_thm_cfg_pro', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-plugins.css' );
    }
endif;
// using high priority so plugin custom styles load last. 
add_action( 'wp_print_styles', 'chld_thm_cfg_plugin_css', 9999 );



// END CTC ENQUEUE PLUGIN ACTION
