<?php
/*
Plugin Name:TechtonicPlugin
Description: A tool built by Techtonic Group LLC.
Version: 1.0
Author: Nick Seeber
Author URI: http://www.techtonicgroup.com
 */

$dir = TechtonicPlugin_dir();

function TechtonicPlugin_init() {
		 
}



function settings() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}

	include_once (ABSPATH . "/wp-content/plugins/Techtonic-WPPlugin/views/settings.php");
} 


function TechtonicPlugin_css(){
	include_once  (ABSPATH . "/wp-content/plugins/Techtonic-WPPlugin/views/Common/header.php");
}

function TechtonicPlugin_js() {
	include_once (ABSPATH . "wp-content/plugins/Techtonic-WPPlugin/views/Common/footer.php");
}

function TechtonicPlugin_admin_js(){
	include_once  (ABSPATH . "wp-content/plugins/Techtonic-WPPlugin/views/Common/admin-footer.php");
}

function TechtonicPlugin_activation() {
	
}

function TechtonicPlugin_deactivation() {
	
}

function add_interface_menu() {
	$page_title = "Techtonic Plugin";
	$menu_title = "Techtonic Plugin";
	$capability = "10";
	$menu_slug = "TechtonicPlugin";
	$mainPage = "settings";
	


	add_menu_page($page_title, $menu_title, $capability, $menu_slug, $mainPage);

}


function TechtonicPlugin_dir() {
	return dirname(__FILE__);
} 

// Add initialization and activation hooks
add_action('init', 'TechtonicPlugin_init');
add_action( 'admin_menu', 'add_interface_menu' );

add_action('wp_head', 'TechtonicPlugin_css');
add_action('wp_footer', 'TechtonicPlugin_js');

add_action('admin_print_scripts', 'TechtonicPlugin_css');
add_action('admin_print_footer_scripts', 'TechtonicPlugin_admin_js');

register_activation_hook((ABSPATH . "/wp-content/plugins/Techtonic-WPPlugin/TechtonicPlugin.php"), 'TechtonicPluginactivation');
register_deactivation_hook((ABSPATH . "/wp-content/plugins/Techtonic-WPPlugin/TechtonicPlugin.php"), 'TechtonicPlugindeactivation');

?>
