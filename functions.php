<?php
/**
 * Extendable functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Extendable
 * @since Extendable 1.0
 */

if ( ! function_exists( 'extendable_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Extendable 1.0
	 *
	 * @return void
	 */
	function extendable_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Register WooCommerce theme features.
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
		add_theme_support(
			'woocommerce',
			array(
				'thumbnail_image_width' => 450,
				'single_image_width'    => 600,
			)
		);

	}

endif;

add_action( 'after_setup_theme', 'extendable_support' );

if ( ! function_exists( 'extendable_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Extendable 1.0
	 *
	 * @return void
	 */
	function extendable_styles() {

		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'extendable-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'extendable-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'extendable_styles' );

/**
 * Registers pattern categories.
 *
 * @since Extendable 1.0
 *
 * @return void
 */
function extendable_register_pattern_categories() {
	$block_pattern_categories = array(
		'header' => array( 'label' => __( 'Headers', 'extendable' ) ),
		'footer' => array( 'label' => __( 'Footers', 'extendable' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Extendable 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'extendable_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

}
add_action( 'init', 'extendable_register_pattern_categories', 9 );

if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	// This theme does not have a traditional sidebar.
	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

	/**
	 * Alter the queue for WooCommerce styles and scripts.
	 *
	 * @since Extendable 1.0.5
	 *
	 * @param array $styles Array of registered styles.
	 *
	 * @return array
	 */
	function extendable_woocommerce_enqueue_styles( $styles ) {
		// Get a theme version for cache busting.
		$theme_version = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// Remove WooCommerce stylesheets.
		unset( $styles['woocommerce-general'] );
		unset( $styles['woocommerce-layout'] );
		unset( $styles['woocommerce-smallscreen'] );

		// Add Extendable's WooCommerce styles.
		$styles['extendable-woocommerce'] = array(
			'src'     => get_template_directory_uri() . '/assets/css/woocommerce.css',
			'deps'    => '',
			'version' => $version_string,
			'media'   => 'all',
			'has_rtl' => true,
		);

		return apply_filters( 'woocommerce_extendable_styles', $styles );
	}
	add_filter( 'woocommerce_enqueue_styles', 'extendable_woocommerce_enqueue_styles' );
}
