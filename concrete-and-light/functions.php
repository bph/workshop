<?php
require_once __DIR__ . '/styles.php';

if ( ! function_exists( 'concrete_and_light_setup' ) ) {
    function concrete_and_light_setup() {
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'responsive-embeds' );
    }
}
add_action( 'after_setup_theme', 'concrete_and_light_setup' );
