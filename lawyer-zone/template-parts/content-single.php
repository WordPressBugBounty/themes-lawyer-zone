<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Acme Themes
 * @subpackage Lawyer Zone
 */
$no_blog_image = '';
global $lawyer_zone_customizer_all_values;

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('init-animate'); ?>>
	<div class="content-wrapper">
		<?php
		$lawyer_zone_hide_single_featured_image = lawyer_zone_featured_image_display( );
		if( has_post_thumbnail() && 'disable' != $lawyer_zone_hide_single_featured_image):
			echo '<div class="single-feat clearfix"><figure class="single-thumb single-thumb-full">';
			the_post_thumbnail( $lawyer_zone_hide_single_featured_image );
			echo "</figure></div>";
		else:
			$no_blog_image = 'no-image';
		endif;
		?>
		<div class="entry-content <?php echo $no_blog_image?>">
			<?php
			if ( 'post' === get_post_type() && has_category() ) : ?>
                <header class="entry-header <?php echo $no_blog_image; ?>">
                    <div class="entry-meta">
						<?php
						lawyer_zone_cats_lists()
						?>
                    </div><!-- .entry-meta -->
                </header><!-- .entry-header -->
			<?php
			endif; ?>
            <div class="entry-header-title">
	            <?php
	            the_title( '<h1 class="entry-title">', '</h1>' );
	            ?>
            </div>
            <footer class="entry-footer">
	            <?php lawyer_zone_entry_footer( ); ?>
            </footer><!-- .entry-footer -->
			<?php
			the_content();
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lawyer-zone' ),
				'after'  => '</div>',
			) );
            ?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->