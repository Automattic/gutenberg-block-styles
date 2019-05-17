<?php

/**
 * Plugin Name: Gutenberg Block Styles
 * Plugin URI: https://github.com/Automattic/gutenberg-block-styles/
 * Description: A simple plugin to demonstrate how to add block styles to Gutenberg.
 * Version: 1.0
 * Author: Kjell Reigstad
 */

/**
 * Enqueue Block Styles Javascript
 */
function block_styles_enqueue_javascript() {
	wp_enqueue_script( 'block-styles-script',
		plugins_url( 'block.js', __FILE__ ),
		array( 'wp-blocks')
	);
}
add_action( 'enqueue_block_editor_assets', 'block_styles_enqueue_javascript' );

/**
 * Enqueue Block Styles Stylesheet
 */
function block_styles_enqueue_stylesheet() {
	wp_enqueue_style( 'block-styles-stylesheet',
		plugins_url( 'style.css', __FILE__ ) 
	);
}
add_action( 'enqueue_block_assets', 'block_styles_enqueue_stylesheet' );
