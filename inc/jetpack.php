<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package understrap-bs3
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function understrap_bs3_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'understrap_bs3_jetpack_setup' );
