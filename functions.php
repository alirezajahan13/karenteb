<?php
/**
 * karenteb functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package karenteb
 */
	define( '_S_VERSION', '1.0.01' );
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function karenteb_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on karenteb, use a find and replace
		* to change 'karenteb' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'karenteb', get_template_directory() . '/languages' );
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );
	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'karenteb' ),
		)
	);
	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'karenteb_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'karenteb_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function karenteb_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'karenteb_content_width', 640 );
}
add_action( 'after_setup_theme', 'karenteb_content_width', 0 );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function karenteb_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'karenteb' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'karenteb' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'karenteb_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function karenteb_scripts() {
	wp_enqueue_style( 'karenteb-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'karenteb-style', 'rtl', 'replace' );
	wp_enqueue_style( 'swiper-style', get_template_directory_uri().'/swiper/swiper-bundle.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'lightgallery-style', get_template_directory_uri() . '/lg/css/lightgallery-bundle.css', array(), _S_VERSION );
	wp_enqueue_script('jquery');
	wp_enqueue_style( 'additional-style', get_template_directory_uri().'/additional.css', array(), _S_VERSION );
	wp_enqueue_script( 'karenteb-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'karenteb-home', get_template_directory_uri() . '/js/home.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'karenteb-headercontrol', get_template_directory_uri() . '/js/headercontrol.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/swiper/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'karenteb-swiperSlides', get_template_directory_uri() . '/js/swiperSlides.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'lightgallery', get_template_directory_uri() . '/lg/lightgallery.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'lightgallery-zoom', get_template_directory_uri() . '/lg/plugins/zoom/lg-zoom.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'lightgallery-thumbnail', get_template_directory_uri() . '/lg/plugins/thumbnail/lg-thumbnail.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'lightgallery-hash', get_template_directory_uri() . '/lg/plugins/hash/lg-hash.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'gallery-maker', get_template_directory_uri() . '/js/gallery-maker.js', array('lightgallery'), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'karenteb_scripts' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 300,
        'single_image_width'    => 600,
        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ) );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
// add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
function my_excerpt_length($length){
	return 40;
}
add_filter('excerpt_length', 'my_excerpt_length');
function new_excerpt_more( $more ) {
	return ' ... ';
}
add_filter('excerpt_more', 'new_excerpt_more');
add_action( 'wp', 'mageplaza_remove_sidebar_product_pages' );
function mageplaza_remove_sidebar_product_pages() {
  if ( is_product() ) {
  remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
  }
}
/**
 * Remove WooCommerce breadcrumbs 
 */
add_action( 'init', 'my_remove_breadcrumbs' );
function my_remove_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}
/**
 * @desc Remove in all product type
 */
function wc_remove_all_quantity_fields( $return, $product ) {
    return true;
}
add_filter( 'woocommerce_is_sold_individually', 'wc_remove_all_quantity_fields', 10, 2 );
/**
 * Remove related products output
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
function customText(){
	global $product;
	$product_info_metabox = get_field( "product_info_metabox");
	echo '<div class="productInfoTabelContainer">';
	foreach ($product_info_metabox as $pmeta){
	echo '<div class="productInfoTabel">';
	echo '<span class="firstLevelOfProductInfo">'.$pmeta['tabel_items'].'</span><span class="secondLevelOfProductInfo">'.$pmeta['item_valu'].'</span>';
	echo '</div>';
	}
	echo '</div>';
}
add_action( 'woocommerce_single_product_summary','customText',25);


function pagination_bar() {
	global $wp_query;

	$total_pages = $wp_query->max_num_pages;

	if ($total_pages > 1){
		// $current_page = max(1, get_query_var('paged'));
		global $wp_query;
		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
		echo paginate_links(array(
			'base' =>@add_query_arg('paged','%#%'),
			'format' => '/page/%#%',
			'current' => $current,
			'total' => $total_pages,
			'next_text' => '<span class="leftArrow"><svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" fill="#505050" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path fill="none" stroke="#505050" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="m20.5 26.5-12-12 12-12"></path></svg></span>',
			'prev_text' => '<span class="rightArrow"><svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" fill="#505050" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path fill="none" stroke="#505050" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="m8.5 2.5 12 12-12 12"></path></svg></span>'
		));
	}
}

// function filter_woocommerce_product_add_to_cart_text( $add_to_cart_text, $product ) {
//     // Price empty & Product is out of stock
//     if ( empty ( $product->get_price() ) && $product->get_stock_status() == 'outofstock' ) {
//         $add_to_cart_text = __( 'تماس بگیرید', 'woocommerce' );
//     }

//     return $add_to_cart_text;
// }
// add_filter( 'woocommerce_product_add_to_cart_text', 'filter_woocommerce_product_add_to_cart_text', 10, 2 );
// add_filter( 'woocommerce_product_single_add_to_cart_text', 'filter_woocommerce_product_add_to_cart_text', 10, 2 );



add_action('woocommerce_after_shop_loop_item', 'custom_add_to_cart_link', 10);
function custom_add_to_cart_link() {
    global $product;

    // Check if the product has no price
    if ($product->get_price() == 0) {
        echo '<a href="tel://09129729702" class="buttonForNoPriceProduct">تماس بگیرید</a>';
	}
}

// Remove "Add to Cart" button for products with no price
add_action('woocommerce_before_shop_loop_item', 'remove_add_to_cart_button', 9);
function remove_add_to_cart_button() {
    global $product;

    // Check if the product has no price
    if ($product->get_price() == 0) {
        remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
    }
}