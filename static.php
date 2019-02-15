<?php

if ( ! is_admin() ) {
	wp_enqueue_script(
		'fw-form-helpers',
		fw_get_framework_directory_uri( '/static/js/fw-form-helpers.js' ),
		array( 'jquery' ),
		null,
		true
	);
	wp_localize_script( 'fw-form-helpers', 'fwAjaxUrl', admin_url( 'admin-ajax.php', 'relative' ) );
}