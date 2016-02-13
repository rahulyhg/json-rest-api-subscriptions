<?php

$_tests_dir = getenv( 'WP_TESTS_DIR' );

if ( ! $_tests_dir ) {
	$_tests_dir = '/tmp/wordpress-tests-lib';
}

require_once( $_tests_dir . '/includes/functions.php' );

tests_add_filter( 'muplugins_loaded', function() {
	require( dirname( __FILE__ ) . '/../plugin.php' );
} );

require_once( $_tests_dir . '/includes/bootstrap.php' );
