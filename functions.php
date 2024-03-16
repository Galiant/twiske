<?php
function twiske_theme_setup() {
    // Add support for block styles
	add_theme_support( 'wp-block-styles' );

    // Enqueue editor styles
    add_editor_style( 'styles.css' );
}
add_action( 'after_setup_theme', 'twiske_theme_setup' );

/*-------------------------------------------------------------
Enqueue Styles
--------------------------------------------------------------*/

function twiske_styles() {
    // Register Stylesheet
    wp_enqueue_style('twiske-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('twiske-style-blocks', get_template_directory_uri() . '/assets/css/blocks.css');
}
add_action( 'wp_enqueue_scripts', 'twiske_styles' );