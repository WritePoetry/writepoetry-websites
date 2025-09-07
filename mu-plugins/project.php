<?php



add_filter(
	'writepoetry_register_theme_directories',
	function () {
		return array( 'writepoetry-websites/themes' );
	}
);