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
            'core/cover',
            array(
                'name'         => 'irregular-cover',
                'label'        => 'Irregular Cover',
                'style_handle' => 'block-styles-stylesheet',
            )
        );
    }

    add_action( 'init', 'block_styles_register_block_styles' );
}