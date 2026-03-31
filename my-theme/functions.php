<?php
/**
 * My Theme functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup
 */
function my_theme_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

/**
 * Register group block style variations
 */
function my_theme_register_block_styles() {
	register_block_style(
		'core/group',
		[
			'name'  => 'dark-band',
			'label' => __( 'Dark Band', 'my-theme' ),
		]
	);
	register_block_style(
		'core/group',
		[
			'name'  => 'accent-band',
			'label' => __( 'Accent Band', 'my-theme' ),
		]
	);
	register_block_style(
		'core/group',
		[
			'name'  => 'highlight',
			'label' => __( 'Highlight', 'my-theme' ),
		]
	);
}
add_action( 'init', 'my_theme_register_block_styles' );

/**
 * Register block pattern category
 */
function my_theme_register_pattern_category() {
	register_block_pattern_category(
		'concrete-and-light',
		[ 'label' => __( 'Concrete & Light', 'my-theme' ) ]
	);
}
add_action( 'init', 'my_theme_register_pattern_category' );
