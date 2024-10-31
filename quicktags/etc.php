<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_hover_box_quicktags' ) ) {

	add_action( 'admin_print_footer_scripts', 'oxsn_hover_box_quicktags' );
	function oxsn_hover_box_quicktags() {

		if ( wp_script_is( 'quicktags' ) ) {

		?>

			<script type="text/javascript">
				QTags.addButton( 'oxsn_hover_box_wrap_quicktag', '[oxsn_hover_box_wrap]', '[oxsn_hover_box_wrap class=""]', '[/oxsn_hover_box_wrap]', 'oxsn_hover_box_wrap', 'Hover Box Wrap', 201 );
				QTags.addButton( 'oxsn_hover_box_quicktag', '[oxsn_hover_box]', '[oxsn_hover_box position="over" class=""]', '[/oxsn_hover_box]', 'oxsn_hover_box', 'Hover Box', 202 );
			</script>

		<?php

		}

	}

}


?>