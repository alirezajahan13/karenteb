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

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'karenteb' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'karenteb' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Check if WooCommerce is active
			if ( class_exists( 'WooCommerce' ) ) {
				global $post;
				
				// Get product categories
				$terms = get_the_terms( $post->ID, 'product_cat' );
				
				if ( $terms ) {
					$category_ids = array();
					
					foreach ( $terms as $term ) {
						$category_ids[] = $term->term_id;
					}
					
					// Query related products
					$args = array(
						'post_type'      => 'product',
						'posts_per_page' => 4, // Adjust the number of related products to display
						'post__not_in'   => array( $post->ID ),
						'tax_query'      => array(
							array(
								'taxonomy' => 'product_cat',
								'field'    => 'id',
								'terms'    => $category_ids,
							),
						),
					);
					
					$related_products = new WP_Query( $args );
					
					// Output related products
					if ( $related_products->have_posts() ) {
						echo '<div class="related-products">';
						
						while ( $related_products->have_posts() ) {
							$related_products->the_post();
							
							wc_get_template_part( 'content', 'product' ); // Adjust template part based on your theme
						}
						
						echo '</div>';
						
						wp_reset_postdata();
					}
				}
			}
			
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
