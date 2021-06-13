<?php

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

add_action( 'init', function () {
	$labels = [
		'name'               => _x( 'Block Areas', 'Post Type General Name', 'ia-block-areas' ),
		'singular_name'      => _x( 'Block Area', 'Post Type Singular Name', 'ia-block-areas' ),
		'all_items'          => __( 'All Block Areas', 'ia-block-areas' ),
		'add_new'            => __( 'Add New', 'ia-block-areas' ),
		'add_new_item'       => __( 'Add New Block Area', 'ia-block-areas' ),
		'edit_item'          => __( 'Edit Block Area', 'ia-block-areas' ),
		'new_item'           => __( 'New Block Area', 'ia-block-areas' ),
		'view_item'          => __( 'View Block Area', 'ia-block-areas' ),
		'search_items'       => __( 'Search Block Area', 'ia-block-areas' ),
		'not_found'          => __( 'Not found', 'ia-block-areas' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'ia-block-areas' ),
	];
	$args   = [
		'labels'              => $labels,
		'hierarchical'        => false,
		'supports'            => array( 'title', 'editor', 'revisions', 'custom-fields' ),
		'public'              => false,
		'show_ui'             => true,
		'show_in_rest'        => true,
		'can_export'          => true,
		'has_archive'         => false,
		'query_var'           => true,
		'exclude_from_search' => true,
		'menu_position'       => 20,
		'rewrite'             => array( 'slug' => 'block-area', 'with_front' => false ),
		'menu_icon'           => 'dashicons-welcome-widgets-menus',
	];
	register_post_type( 'blockarea', $args );
} );

