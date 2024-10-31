<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


//[oxsn_hover_box_wrap class=""]
if ( ! function_exists ( 'oxsn_hover_box_wrap_shortcode' ) ) {

	add_shortcode('oxsn_hover_box_wrap', 'oxsn_hover_box_wrap_shortcode');
	function oxsn_hover_box_wrap_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'class' => '',
		), $atts );

		$oxsn_hover_box_wrap_class = esc_attr($a['class']);

		return '<div class="oxsn_hover_box_wrap ' . $oxsn_hover_box_wrap_class . '">' . do_shortcode($content) . '</div>';
	}

}

//[oxsn_hover_box position="" class=""]
if ( ! function_exists ( 'oxsn_hover_box_shortcode' ) ) {

	add_shortcode('oxsn_hover_box', 'oxsn_hover_box_shortcode');
	function oxsn_hover_box_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'class' => '',
			'position' => 'over',
		), $atts );

		$oxsn_hover_box_class = esc_attr($a['class']);

		$oxsn_hover_box_position = esc_attr($a['position']);
		$oxsn_hover_box_position = strtolower($oxsn_hover_box_position);

		return '<div class="oxsn_hover_box_' . $oxsn_hover_box_position . ' ' . $oxsn_hover_box_class . '">' . do_shortcode($content) . '</div>';

	}

}


?>