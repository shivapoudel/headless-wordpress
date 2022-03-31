<?php
/**
 * Headless functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Headless
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function headless_setup() {

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header-menu' => esc_html__( 'Header Menu', 'headless' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'headless' ),
		)
	);
}
add_action( 'after_setup_theme', 'headless_setup' );

/**
 * Disable feed.
 */
function headless_disable_feed() {
	wp_die( __( 'No feed available, please visit our <a href="' . get_bloginfo( 'url' ) . '">Homepage</a>!', 'headless' ) );
}

add_action( 'do_feed', 'headless_disable_feed', 1 );
add_action( 'do_feed_rdf', 'headless_disable_feed', 1 );
add_action( 'do_feed_rss', 'headless_disable_feed', 1 );
add_action( 'do_feed_rss2', 'headless_disable_feed', 1 );
add_action( 'do_feed_atom', 'headless_disable_feed', 1 );
add_action( 'do_feed_rss2_comments', 'headless_disable_feed', 1 );
add_action( 'do_feed_atom_comments', 'headless_disable_feed', 1 );

/**
 * Custom post types for this theme.
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Load Headless Mode compatibility file.
 */
if ( defined( 'HEADLESS_MODE_CLIENT_URL' ) ) {
	require get_template_directory() . '/inc/headless-mode.php';
}
