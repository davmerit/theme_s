<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package my-simone
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function my_simone_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'my_simone_jetpack_setup' );
