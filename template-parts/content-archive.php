<?php

/**

 * Template part for displaying posts

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package arshida

 */



?>

<a href="<?php echo esc_url(get_permalink()) ?>" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" id="post-<?php the_ID(); ?>" <?php post_class('archiveCards lowRadius mediumMargined'); ?>>

	<div class="archiveCardImg"><?php the_post_thumbnail() ?></div>

	<header class="entry-header">
		<?php if ( is_home() && ! is_front_page() ){ ?>
			<h3 class="entry-title"><?php echo get_the_title() ?></h3>
		<?php } else{ ?>
			<h3 class="entry-title"><?php echo get_the_title() ?></h3>
		<?php } ?>
	</header><!-- .entry-header -->

	<div class="archiveCardExc lightParagraph justified"><?php the_excerpt(); ?></div>

	<div class="archivePostFooter mediumPadding">
		<span class="lighterText smallerText"><svg width="18" height="18" fill="#399edb" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12 23C5.925 23 1 18.075 1 12S5.925 1 12 1s11 4.925 11 11-4.925 11-11 11Zm0-2a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm1-10h4v2h-6V6h2v5Z"/></svg><?php echo get_the_date() ?></span>
		<span class="lighterText smallerText"><svg width="18" height="18" viewBox="0 0 311.012 311.012" xmlns="http://www.w3.org/2000/svg"><path data-name="Path 11" d="M302.184 55.993 255.019 8.829a30.14 30.14 0 0 0-42.627 0L14.959 206.259a12.111 12.111 0 0 0-3.438 6.937L.11 297.265a12.115 12.115 0 0 0 13.634 13.634l84.07-11.411a12.112 12.112 0 0 0 6.937-3.438L302.184 98.62a30.142 30.142 0 0 0 0-42.627ZM90.507 276.028l-64.247 8.72 8.721-64.246 139.906-139.9 55.525 55.526ZM285.05 81.487l-37.5 37.5-55.526-55.525 37.5-37.5a5.913 5.913 0 0 1 8.362 0l47.165 47.164a5.91 5.91 0 0 1 0 8.361Z" fill="#399edb"/></svg><?php echo get_the_author() ?></span>
	</div>

</a><!-- #post-<?php the_ID(); ?> -->