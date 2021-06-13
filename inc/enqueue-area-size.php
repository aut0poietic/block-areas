<?php
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

add_action( 'enqueue_block_editor_assets', function () {
	if ( get_post_type() !== 'blockarea' ) {
		return;
	}
	$asset_file = BLOCK_AREA_PLUGIN_DIR . '/build/area-size.asset.php';
	if ( ! file_exists( $asset_file ) ) {
		return;
	}
	$script_assets = require( $asset_file );
	wp_enqueue_script(
		'ia-block-area-area-size',
		plugins_url( 'build/area-size.js', BLOCK_AREA_PLUGIN_FILE ),
		$script_assets['dependencies'],
		$script_assets['version']
	);
	wp_enqueue_style(
		'ia-block-area-area-size',
		plugins_url( 'build/area-size.css', BLOCK_AREA_PLUGIN_FILE )
	);
} );