<?php

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

add_action( 'template_redirect', function () {
	if ( is_singular( 'blockarea' ) ) {
		wp_redirect( home_url() );
	}
} );