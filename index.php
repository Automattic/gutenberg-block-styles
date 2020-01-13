<?php

/**
 * Plugin Name: Gutenberg Block Styles
 * Plugin URI: https://github.com/Automattic/gutenberg-block-styles/
 * Description: A simple plugin to demonstrate how to add block styles to Gutenberg.
 * Version: 1.1
 * Author: Automattic
 */

/**
 * Enqueue Block Styles Stylesheet
 */
function block_styles_enqueue_stylesheet() {
	wp_enqueue_style( 'block-styles-stylesheet',
		plugins_url( 'style.css', __FILE__ ) 
	);
}
add_action( 'enqueue_block_assets', 'block_styles_enqueue_stylesheet' );

/**
 * Register Block Styles
 */
if ( function_exists( 'register_block_style' ) ) {
	register_block_style(
		'core/paragraph',
		array(
			'name'			=> 'blue-paragraph',
			'label'			=> 'Blue Paragraph',
			'style_handle'	=> 'block-styles-stylesheet',
		)
	);
}
