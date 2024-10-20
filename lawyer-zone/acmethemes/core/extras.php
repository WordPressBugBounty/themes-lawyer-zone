<?php
/**
 * Adds custom classes to the array of body classes.
 *
 * @package Acme Themes
 * @subpackage Lawyer Zone
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function lawyer_zone_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'lawyer_zone_body_classes' );