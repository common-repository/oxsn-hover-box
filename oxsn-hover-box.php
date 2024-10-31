<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


/*
Plugin Name: OXSN Hover Box
Plugin URI: https://wordpress.org/plugins/oxsn-hover-box/
Description: This plugin adds hover boxes!
Author: oxsn
Author URI: https://oxsn.com/
Version: 0.0.2
*/


define( 'oxsn_hover_box_plugin_basename', plugin_basename( __FILE__ ) );
define( 'oxsn_hover_box_plugin_dir_path', plugin_dir_path( __FILE__ ) );
define( 'oxsn_hover_box_plugin_dir_url', plugin_dir_url( __FILE__ ) );

if ( ! function_exists ( 'oxsn_hover_box_settings_link' ) ) {

	add_filter( 'plugin_action_links', 'oxsn_hover_box_settings_link', 10, 2 );
	function oxsn_hover_box_settings_link( $links, $file ) {

		if ( $file != oxsn_hover_box_plugin_basename )
		return $links;
		$settings_page = '<a href="' . menu_page_url( 'oxsn-hover-box', false ) . '">' . esc_html( __( 'Settings', 'oxsn-hover-box' ) ) . '</a>';
		array_unshift( $links, $settings_page );
		return $links;

	}

}

require_once( oxsn_hover_box_plugin_dir_path . 'main-tab/etc.php' );
require_once( oxsn_hover_box_plugin_dir_path . 'plugin-tab/etc.php' );
require_once( oxsn_hover_box_plugin_dir_path . 'inc/etc.php' );
require_once( oxsn_hover_box_plugin_dir_path . 'quicktags/etc.php' );
require_once( oxsn_hover_box_plugin_dir_path . 'shortcodes/etc.php' );


?>