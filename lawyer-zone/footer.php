<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Acme Themes
 * @subpackage Lawyer Zone
 */

/**
 * lawyer_zone_action_after_content hook
 * @since Lawyer Zone 1.0.0
 *
 * @hooked null
 */
do_action( 'lawyer_zone_action_after_content' );

/**
 * lawyer_zone_action_before_footer hook
 * @since Lawyer Zone 1.0.0
 *
 * @hooked null
 */
do_action( 'lawyer_zone_action_before_footer' );

/**
 * lawyer_zone_action_footer hook
 * @since Lawyer Zone 1.0.0
 *
 * @hooked lawyer_zone_footer - 10
 */
do_action( 'lawyer_zone_action_footer' );

/**
 * lawyer_zone_action_after_footer hook
 * @since Lawyer Zone 1.0.0
 *
 * @hooked null
 */
do_action( 'lawyer_zone_action_after_footer' );

/**
 * lawyer_zone_action_after hook
 * @since Lawyer Zone 1.0.0
 *
 * @hooked lawyer_zone_page_end - 10
 */
do_action( 'lawyer_zone_action_after' );

wp_footer();
?>
</body>
</html>