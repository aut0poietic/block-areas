<?php
/**
 * Plugin Name:       Irresponsible Block Areas
 * Plugin URI:        https://github.com/aut0poietic/ia-block-areas
 * Description:       Add arbitrary Gutenberg content to a theme. Requires theme support or a custom theme.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Irresponsible Art
 * Author URI:        https://sandbox.irresponsibleart.com/
 * License:           GPL v2 or later
 * License URI:       LICENSE
 * Text Domain:       ia-block-areas
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

define('BLOCK_AREA_PLUGIN_FILE', __FILE__);
define('BLOCK_AREA_PLUGIN_DIR', __DIR__);

require_once plugin_dir_path( BLOCK_AREA_PLUGIN_FILE ) . '/inc/post-type.php';
require_once plugin_dir_path( BLOCK_AREA_PLUGIN_FILE ) . '/inc/meta.php';
require_once plugin_dir_path( BLOCK_AREA_PLUGIN_FILE ) . '/inc/redirect.php';
require_once plugin_dir_path( BLOCK_AREA_PLUGIN_FILE ) . '/inc/enqueue-area-size.php';