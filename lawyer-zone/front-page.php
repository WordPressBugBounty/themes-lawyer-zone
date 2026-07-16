<?php
/**
 * The front-page template file.
 *
 * @package Acme Themes
 * @subpackage Lawyer Zone
 * @since Lawyer Zone 1.0.0
 */
get_header();

/**
 * lawyer_zone_action_front_page hook
 * @since Lawyer Zone 1.0.0
 *
 * @hooked lawyer_zone_featured_slider -  10
 * @hooked lawyer_zone_front_page -  20
 */
do_action( 'lawyer_zone_action_front_page' );

get_footer();