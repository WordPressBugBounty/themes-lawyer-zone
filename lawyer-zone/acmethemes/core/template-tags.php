<?php
/**
 * Categories lists
 *
 * @package Acme Themes
 * @subpackage Lawyer Zone
 */
if ( ! function_exists( 'lawyer_zone_cats_lists' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function lawyer_zone_cats_lists() {
		// Hide author, category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'lawyer-zone' ) );
			if ( $categories_list && lawyer_zone_categorized_blog() ) {
				printf( '<span class="cat-links">%1$s</span>', $categories_list ); // WPCS: XSS OK.
			}
		}
	}
endif;

/**
 * Custom template tags for this theme.
 *
 * @package Acme Themes
 * @subpackage Lawyer Zone
 */
if ( ! function_exists( 'lawyer_zone_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function lawyer_zone_entry_footer(  ) {
	// Hide author, category and tag text for pages.
	if ( 'post' === get_post_type() ) {

		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			'%s',
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<i class="fa fa-calendar-check-o" aria-hidden="true"></i> <span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

		printf(
			'%s',
			'<span class="author vcard"><i class="fa fa-user"></i><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'lawyer-zone' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links"><i class="fa fa-tags"></i>%1$s</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link"><i class="fa fa-comment-o"></i>';
		comments_popup_link( esc_html__( 'Leave a comment', 'lawyer-zone' ), esc_html__( '1 Comment', 'lawyer-zone' ), esc_html__( '% Comments', 'lawyer-zone' ) );
		echo '</span>';
	}

	if ( get_edit_post_link() ) :
		edit_post_link(
			sprintf(
			/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'lawyer-zone' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<span class="edit-link"><i class="fa fa-edit "></i>',
			'</span>'
		);
	endif;
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
if ( ! function_exists( 'lawyer_zone_categorized_blog' ) ) :
	function lawyer_zone_categorized_blog() {
		if ( false === ( $all_the_cool_cats = get_transient( 'lawyer_zone_categories' ) ) ) {
			// Create an array of all the categories that are attached to posts.
			$all_the_cool_cats = get_categories( array(
				'fields'     => 'ids',
				'hide_empty' => 1,

				// We only need to know if there is more than one category.
				'number'     => 2,
			) );

			// Count the number of categories that are attached to the posts.
			$all_the_cool_cats = count( $all_the_cool_cats );

			set_transient( 'lawyer_zone_categories', $all_the_cool_cats );
		}

		if ( $all_the_cool_cats > 1 ) {
			// This blog has more than 1 category so lawyer_zone_categorized_blog should return true.
			return true;
		} else {
			// This blog has only 1 category so lawyer_zone_categorized_blog should return false.
			return false;
		}
	}
endif;

/**
 * Flush out the transients used in lawyer_zone_categorized_blog.
 */
if ( ! function_exists( 'lawyer_zone_category_transient_flusher' ) ) :
	function lawyer_zone_category_transient_flusher() {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}
		// Like, beat it. Dig?
		delete_transient( 'lawyer_zone_categories' );
	}
endif;
add_action( 'edit_category', 'lawyer_zone_category_transient_flusher' );
add_action( 'save_post',     'lawyer_zone_category_transient_flusher' );