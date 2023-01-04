<?php

/**
 * Enqueue scripts and styles.
 * 
 * https://github.com/ForEvolve/bootstrap-dark
 */


// add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
// function my_theme_enqueue_styles() {
// 	$parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
// 	$theme        = wp_get_theme();
// 	wp_enqueue_style( $parenthandle,
// 		get_stylesheet_directory() . '/style.css',
// 		array(),  // If the parent theme code has a dependency, copy it to here.
// 		$theme->parent()->get( 'Version' )
// 	);
// 	wp_enqueue_style( 'child-style',
// 		get_stylesheet_uri(),
// 		array( $parenthandle ),
// 		$theme->get( 'Version' ) // This only works if you have Version defined in the style header.
// 	);
// }


function cleo_dark_scripts() {

	wp_enqueue_style( 'cleo-style', get_template_directory_uri().'/style.css', array(), _S_VERSION );

	// wp_enqueue_style( 'bootstrap-dark', get_stylesheet_directory_uri() . '/bootstrap-dark/css/bootstrap-dark.css', array(), _S_VERSION );
	
	wp_enqueue_style( 'cleo-dark-style', get_stylesheet_uri(), array(), _S_VERSION );

	// wp_style_add_data( 'cleo-dark-style', 'rtl', 'replace' );

	// wp_enqueue_style( 'cleo-layout-style', get_template_directory_uri().'/css/resume.css', array(), _S_VERSION );
}
add_action( 'wp_enqueue_scripts', 'cleo_dark_scripts' );
