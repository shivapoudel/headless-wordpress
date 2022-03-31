<?php
/**
 * Headless Theme Custom Post Types
 *
 * @package Cubispec
 */

function headless_custom_post_type() {
	register_post_type(
		'custom_posts',
		[
			'labels'              => [
				'name'               => 'Custom Posts',
				'singular_name'      => 'Custom Post',
				'add_new'            => 'Add New',
				'add_new_item'       => 'Add New Custom Post',
				'edit'               => 'Edit',
				'edit_item'          => 'Edit Custom Post',
				'new_item'           => 'New Custom Post',
				'view'               => 'View Custom Post',
				'view_item'          => 'View Custom Post',
				'search_items'       => 'Search Custom Posts',
				'not_found'          => 'No Custom Posts found',
				'not_found_in_trash' => 'No Custom Posts found in Trash',
			],
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-awards',
			'public'              => true,
			'show_in_rest'        => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
			'hierarchical'        => false,
			'has_archive'         => true,
			'supports'            => [ 'title', 'thumbnail', 'editor', 'revisions', 'excerpt', 'author' ],
			'can_export'          => true,
			'taxonomies'          => [],
			'show_in_graphql'     => true,
			'graphql_single_name' => 'CustomPost',
			'graphql_plural_name' => 'CustomPosts',
		]
	);
}
add_action( 'init', 'headless_custom_post_type' );
