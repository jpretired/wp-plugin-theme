<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://wiki.jprodina.cz
 * @since      1.0.0
 *
 * @package    Vysledky
 * @subpackage Vysledky/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">

	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
	<?php settings_errors(); ?>
        <?php global $active_tab; ?>
		
	<?php if( isset( $_GET[ 'tab' ] ) ) {
		$active_tab = $_GET[ 'tab' ];
	} else if( $active_tab == 'nastav_dotaz' ) {
		$active_tab = 'nastav_dotaz';
	} else if( $active_tab == 'vytvor_zebricek' ) {
		$active_tab = 'vytvor_zebricek';
	} else if( $active_tab == 'turnaje' ) {
		$active_tab = 'turnaje';
	} else if( $active_tab == 'udalosti' ) {
		$active_tab = 'udalosti';
	} else {
		$active_tab = 'zadej_vysledky';
	} // end if/else ?>

	<h2 class="nav-tab-wrapper">
        <a href="?page=vysledky&tab=zadej_vysledky" class="nav-tab <?php echo $active_tab == 'zadej_vysledky' ? 'nav-tab-active' : ''; ?>"><?php _e('Zadej výsledky', $this->plugin_name);?></a>
        <a href="?page=vysledky&tab=nastav_dotaz" class="nav-tab <?php echo $active_tab == 'nastav_dotaz' ? 'nav-tab-active' : ''; ?>"><?php _e('Nastav dotaz', $this->plugin_name);?></a>
        <a href="?page=vysledky&tab=vytvor_zebricek" class="nav-tab <?php echo $active_tab == 'vytvor_zebricek' ? 'nav-tab-active' : ''; ?>"><?php _e('Vytvoř žebříček', $this->plugin_name);?></a>
        <a href="?page=vysledky&tab=turnaje" class="nav-tab <?php echo $active_tab == 'turnaje' ? 'nav-tab-active' : ''; ?>"><?php _e('Turnaje', $this->plugin_name);?></a>
        <a href="?page=vysledky&tab=udalosti" class="nav-tab <?php echo $active_tab == 'udalosti' ? 'nav-tab-active' : ''; ?>"><?php _e('Události', $this->plugin_name);?></a>
 	</h2>
        
        <?php
            if( $active_tab == 'zadej_vysledky' ) {
	
                require_once('vysledky-zadej-vysledky.php');

            } elseif( $active_tab == 'nastav_dotaz' ) {
	
                require_once('vysledky-nastav-dotaz.php');
					
            } elseif( $active_tab == 'vytvor_zebricek' ) {
	
                require_once('vysledky-vytvor-zebricek.php');
					
            } elseif( $active_tab == 'turnaje' ) {
	
                require_once('vysledky-turnaje.php');
					
            } else {

                require_once('vysledky-udalosti.php');
				
            } // end if/else
                
        ?>

</div>

