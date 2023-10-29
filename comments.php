<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karenteb
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div class="commentSecBack">

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title extraHighMargined">
			<?php
			$karenteb_comment_count = get_comments_number();
			if ( '1' === $karenteb_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'یک دیدگاه در &ldquo;%1$s&rdquo;', 'karenteb' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s دیدگاه در &ldquo;%2$s&rdquo;', '%1$s دیدگاه در &ldquo;%2$s&rdquo;', $karenteb_comment_count, 'comments title', 'karenteb' ) ),
					number_format_i18n( $karenteb_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>
		
		<ol class="comment-list highSingleBox">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol><!-- .comment-list -->
		<div class="commentBoxParent bgLight">
			<div class="commentBoxSingle highSingleBox">
				<div class="commentSection">
				<?php
				the_comments_navigation();

				// If comments are closed and there are comments, let's leave a little note, shall we?
				if ( ! comments_open() ) :
					?>
					<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'karenteb' ); ?></p>
					<?php
				endif;

				endif; // Check for have_comments().

				comment_form();
				?>
			</div>
			<div class="commentSectionImg">
				<img src="<?php echo get_template_directory_uri() ?>/img/3640317-removebg.png" alt="کارن-طب"> 
			</div>
		</div>
	</div>
</div><!-- #comments -->


</div>