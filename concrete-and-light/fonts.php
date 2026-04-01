<?php
if ( ! function_exists( 'concrete_and_light_fonts' ) ) {
    function concrete_and_light_fonts() {
        wp_enqueue_style(
            'concrete-and-light-fonts',
            'https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500&family=Playfair+Display:wght@400;500;600;700&display=swap',
            array(),
            null
        );
    }
}
add_action( 'enqueue_block_assets', 'concrete_and_light_fonts' );