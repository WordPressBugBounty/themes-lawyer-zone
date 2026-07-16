<?php
/**
 * Comment Form
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param array $form
 * @return array $form
 *
 */
if ( !function_exists('lawyer_zone_alter_comment_form') ) :

    function lawyer_zone_alter_comment_form($form) {

	    $lawyer_zone_comment_title = esc_html__( 'Leave a Comment', 'lawyer-zone' );
	    $lawyer_zone_comment_button_text = esc_html__( 'Add Comment', 'lawyer-zone' );

	    $required = get_option('require_name_email');
	    $req = $required ? 'aria-required="true"' : '';

	    $form['fields']['author']   = '<p class="comment-form-author"><label for="author"></label><input id="author" name="author" type="text" placeholder="'.esc_attr__( 'Name', 'lawyer-zone' ).'" value="" size="30" ' . $req . '/></p>';
	    $form['fields']['email']    = '<p class="comment-form-email"><label for="email"></label> <input id="email" name="email" type="email" value="" placeholder="'.esc_attr__( 'Email', 'lawyer-zone' ).'" size="30" ' . $req . ' /></p>';
	    $form['fields']['url']      = '<p class="comment-form-url"><label for="url"></label> <input id="url" name="url" placeholder="'.esc_attr__( 'Website URL', 'lawyer-zone' ).'" type="url" value="" size="30" /></p>';
	    $form['comment_field']      = '<p class="comment-form-comment"><label for="comment"></label> <textarea id="comment" name="comment" placeholder="'.esc_attr__( 'Comment', 'lawyer-zone' ).'" cols="45" rows="8" aria-required="true"></textarea></p>';
	    $form['comment_notes_before']   = '';
	    $form['label_submit']           = $lawyer_zone_comment_button_text;
	    $form['title_reply']            = '<span>'.$lawyer_zone_comment_title.'</span>';

	    return $form;
    }
endif;
add_filter('comment_form_defaults', 'lawyer_zone_alter_comment_form');