<?php
/**
 * Team Eight setup.
 *
 * Sets up theme defaults and registers the various WordPress features 
 *
 * @uses add_theme_support() To add support for post
 * formats, and post thumbnails.
 * @uses register_nav_menu() To add support for a navigation menu.
 *
 * @return void
 */
function teameight_setup() {

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', 'Navigation Menu' );

	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'teameight_setup' );

/**
 * Enqueue scripts and styles for the front end.
 *
 * @return void
 */
function teameight_scripts_styles() {

	// Loads our main stylesheet.
	wp_enqueue_style( 'teameight-style', get_template_directory_uri() . '/css/style.css?v=1', array(), '2013-12-02' );

	// Loads the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'teameight-ie', get_template_directory_uri() . '/css/ie.css', array( 'teameight-style' ), '2013-07-18' );
	wp_style_add_data( 'teameight-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'teameight_scripts_styles' );