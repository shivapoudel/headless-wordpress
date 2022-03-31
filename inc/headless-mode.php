<?php
/**
 * Headless Mode Compatibility File
 *
 * @link https://wordpress.org/plugins/headless-mode/
 *
 * @package Headless
 */

// Filters whether the current user has access to the front-end.
add_filter( 'headless_mode_disable_front_end', '__return_true' );
