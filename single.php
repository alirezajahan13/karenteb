<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package karenteb
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'karenteb' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'karenteb' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );
				
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			
		endwhile; // End of the loop.
		?>
		<?php
			// Add this code to display related posts with title and thumbnail
			function display_related_posts() {
				global $post;

				// Get the post categories
				$categories = get_the_category($post->ID);

				if ($categories) {
					$category_ids = array();
					foreach ($categories as $category) {
						$category_ids[] = $category->term_id;
					}

					// Query for related posts
					$related_posts_args = array(
						'category__in' => $category_ids,
						'post__not_in' => array($post->ID),
						'posts_per_page' => 3, // You can adjust the number of related posts to display
						'ignore_sticky_posts' => 1
					);

					$related_posts_query = new WP_Query($related_posts_args);

					// Display related posts with title and thumbnail
					if ($related_posts_query->have_posts()) {
						echo '<div class="relatedPostsInSingle">';
						echo '<h3>بیشتر بخوانید</h3>';
						echo '<div class="relatedPostsInSingleList">';
						while ($related_posts_query->have_posts()) {
							$related_posts_query->the_post();
							?>
							<a href="<?php the_permalink(); ?>" class="related-post">
								<?php if (has_post_thumbnail()) : ?>
									<div class="related-post-thumbnail">
										<?php the_post_thumbnail('thumbnail'); // You can change 'thumbnail' to other image size ?>
									</div>
								<?php endif; ?>
								<h3><?php the_title(); ?></h3>
							</a>
							<?php
						}
						echo '</div>'; // .related-posts-list
						echo '</div>'; // .related-posts
					}

					// Reset post data
					wp_reset_postdata();
				}
			}

			// Call the function to display related posts
			display_related_posts();
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
