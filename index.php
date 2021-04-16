<?php

/**
 * Plugin Name: Gutenberg Block Styles
 * Plugin URI: https://github.com/Automattic/gutenberg-block-styles/
 * Description: A simple plugin to demonstrate how to add block styles to Gutenberg.
 * Version: 1.1
 * Author: Automattic
 */

/**
 * Register Custom Block Styles
 */
if ( function_exists( 'register_block_style' ) ) {
	function block_styles_register_block_styles() {
		/**
		 * Register stylesheet
		 */
		wp_register_style(
			'block-styles-stylesheet',
			plugins_url( 'style.css', __FILE__ ),
			array(),
			'1.1'
		);

		/**
		 * Register block style
		 */
		register_block_style(
			'core/query',
			array(
				'name'         => 'inline-query',
				'label'        => 'Inline Query',
				'style_handle' => 'block-styles-stylesheet',
			)
		);
	}

	add_action( 'init', 'block_styles_register_block_styles' );
}

/**
 * Register Custom Block Pattern
 */
register_block_pattern(
	'query/small-inline-posts',
	array(
		'title'      => __( 'Inline with small images', 'gutenberg' ),
		'blockTypes' => array( 'core/query' ),
		'categories' => array( 'Query' ),
		'content'    => '<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"list"},"className":"is-style-inline-query"} -->
						<!-- wp:query-loop -->
						<!-- wp:post-featured-image {"isLink":true} /-->
						<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"42px","lineHeight":"1.4"}}} /-->
						<!-- /wp:query-loop -->
						<!-- /wp:query -->',
	)
);
