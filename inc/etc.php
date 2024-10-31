<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_hover_box_inc_css' ) ) {

	add_action( 'wp_enqueue_scripts', 'oxsn_hover_box_inc_css' );
	function oxsn_hover_box_inc_css() {

		wp_enqueue_style( 'oxsn_hover_box_etc_css', oxsn_hover_box_plugin_dir_url . 'inc/css/etc.css', array(), '1.0.0', 'all' ); 

	}

}


?>