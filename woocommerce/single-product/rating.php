<?php
/**
 * Single Product Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $product;

if ( ! wc_review_ratings_enabled() ) {
	return;
}

$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average      = $product->get_average_rating();

if ( $rating_count > 0 ) : ?>

	<div class="woocommerce-product-rating">
		<?php //echo wc_get_rating_html( $average, $rating_count ); // WPCS: XSS ok. ?>
		<?php if ( comments_open() ) : ?>
			<?php //phpcs:disable ?>
			<a href="#reviews" class="woocommerce-review-link" rel="nofollow"><div class="ratingSinglePart"><?php echo '<svg height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xml:space="preserve"><path style="fill:#ffc88e" d="m256 2.2 60.44 193.872H512L353.776 315.88l60.44 193.92L256 389.944 97.776 509.8l60.448-193.92L0 196.072h195.56z"/></svg> <span>'.round($average, 1).' '?></span></div><div class="commentSinglePart"><?php printf( _n( $review_count, '%s دیدگاه', '%s دیدگاه', 'woocommerce' ), '<svg width="25" height="25" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path data-name="comment-dots-Filled" d="M17 3.5H7A4.507 4.507 0 0 0 2.5 8v13a.5.5 0 0 0 .31.46.433.433 0 0 0 .19.04.469.469 0 0 0 .35-.15l2.42-2.41a1.5 1.5 0 0 1 1.06-.44H17a4.507 4.507 0 0 0 4.5-4.5V8A4.507 4.507 0 0 0 17 3.5Zm-9 8.75A1.25 1.25 0 1 1 9.25 11 1.25 1.25 0 0 1 8 12.25Zm4 0A1.25 1.25 0 1 1 13.25 11 1.25 1.25 0 0 1 12 12.25Zm4 0A1.25 1.25 0 1 1 17.25 11 1.25 1.25 0 0 1 16 12.25Z" style="fill:#dddce2"/></svg><span class="count">' . esc_html( $review_count ) . '</span></div>' ); ?></a>
			<?php // phpcs:enable ?>
		<?php endif ?>
	</div>

<?php endif; ?>
