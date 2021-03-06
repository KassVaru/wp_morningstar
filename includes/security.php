<?php
/**
 * Inspired by Simon Bradburys cleanup.php fromb4st theme https://github.com/SimonPadbury/b4st
 *
 */
if ( ! function_exists( 'no_generator' ) ) {
	/**
	 * Removes the generator tag with WP version numbers. Hackers will use this to find weak and old WP installs
	 *
	 * @return string
	 */
	function no_generator() {
		return '';
	}
} // endif function_exists( 'no_generator' ).
add_filter( 'the_generator', 'no_generator' );
/*
Clean up wp_head() from unused or unsecure stuff
*/
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10);
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10);
if ( ! function_exists( 'show_less_login_info' ) ) {
	/**
	 * Show less info to users on failed login for security.
	 * (Will not let a valid username be known.)
	 *
	 * @return string
	 */
	function show_less_login_info() {
		return '<strong>ERROR</strong>: Stop guessing!';
	}
} // endif function_exists( 'show_less_login_info' ).
add_filter( 'login_errors', 'show_less_login_info' );
function my_remove_src_version( $src ) {
	global $wp_version;
	$version_str = '?ver='.$wp_version;
	$offset = strlen( $src ) - strlen( $version_str );
	if ( $offset >= 0 && strpos($src, $version_str, $offset) !== FALSE )
		return substr( $src, 0, $offset );
	return $src;
}
add_filter( 'script_loader_src', 'my_remove_src_version' );
add_filter( 'style_loader_src', 'my_remove_src_version' );