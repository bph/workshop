<?php
require_once __DIR__ . '/styles.php';
require_once __DIR__ . '/fonts.php';
require_once __DIR__ . '/theme-assets-rewrite.php';

if ( ! function_exists( 'concrete_and_light_setup' ) ) {
    function concrete_and_light_setup() {
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'responsive-embeds' );
    }
}
add_action( 'after_setup_theme', 'concrete_and_light_setup' );