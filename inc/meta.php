<?php

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

add_action( 'init', function () {
	register_post_meta(
		'blockarea',
		'_resize_area',
		[
			'type'              => 'boolean',
			'single'            => true,
			'default'           => false,
			'sanitize_callback' => function ( $value ) {
				return boolval( $value );
			},
			'auth_callback'     => function () {
				return current_user_can( 'edit_posts' );
			},
			'show_in_rest'      => true,
		]
	);

	register_post_meta(
		'blockarea',
		'_area_width',
		[
			'type'              => 'number',
			'single'            => true,
			'default'           => 800,
			'sanitize_callback' => function ( $value ) {
				return intval( $value ) ;
			},
			'auth_callback'     => function () {
				return current_user_can( 'edit_posts' );
			},
			'show_in_rest'      => true,
		]
	);
} );