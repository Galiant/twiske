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

/*-------------------------------------------------------------
Enqueue Scripts
--------------------------------------------------------------*/
function twiske_theme_jquery() {
	wp_enqueue_script(
        'twiske-theme-jquery', 
        'https://code.jquery.com/jquery-3.7.1.min.js', 
        array(), 
        null, 
        true
    );
}
add_action('wp_enqueue_scripts', 'twiske_theme_jquery');

function twiske_theme_particles() {
	wp_enqueue_script( 
		'twiske-theme-particles',
		get_parent_theme_file_uri( '/assets/js/particles.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'twiske_theme_particles' );

function twiske_theme_app_particles() {
	wp_enqueue_script( 
		'twiske-theme-app-particles',
		get_parent_theme_file_uri( '/assets/js/appParticles.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'twiske_theme_app_particles' );

function twiske_theme_fit_text() {
	wp_enqueue_script( 
		'twiske-theme-fit-text',
		get_parent_theme_file_uri( '/assets/js/fitText.js' ),
		array('jquery'),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'twiske_theme_fit_text' );

function twiske_theme_typed() {
	wp_enqueue_script( 
		'twiske-theme-typed',
		get_parent_theme_file_uri( '/assets/js/typed.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'twiske_theme_typed' );

function twiske_theme_typed_text() {
	wp_enqueue_script( 
		'twiske-theme-typed_text',
		get_parent_theme_file_uri( '/assets/js/typedText.js' ),
		array('jquery'),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'twiske_theme_typed_text' );