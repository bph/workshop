<?php

/**
 * Rewrites theme:./ URLs in block content.
 * It allows theme asset relative paths in templates e.g. theme:./assets/image.png
**/

// Rewrites theme:./ URLs of block content in the frontend.
add_filter( 'render_block', function ( $content ) {
	if ( ! $content ) {
		return $content;
	}
	$base = get_stylesheet_directory_uri();
	$content = preg_replace( '/(src|href)=(["\']?)theme:\.\//', '$1=$2' . $base . '/', $content );
	$content = preg_replace( '/url\((["\']?)theme:\.\//', 'url($1' . $base . '/', $content );
	return $content;
} );

// Enqueues script for theme:./ URL rewriting in the editor.
add_action( 'enqueue_block_editor_assets', function () {
	wp_enqueue_script( 'theme-assets-editor-rewrite', get_stylesheet_directory_uri() . '/theme-assets-editor-rewrite.js', [ 'wp-hooks', 'wp-compose', 'wp-element' ], '1.0.0', true );
	wp_add_inline_script( 'theme-assets-editor-rewrite', 'window.THEME_ASSETS_BASE_URL=' . wp_json_encode( get_stylesheet_directory_uri() ) . ';', 'before' );
} );