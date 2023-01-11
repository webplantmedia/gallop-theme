<?php

add_action('wp_enqueue_scripts', 'gallop_theme_enqueue_fonts', 9);

function gallop_theme_enqueue_fonts()
{
	// wp_enqueue_style('gallop-theme-google-fonts', 'https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap', array(), null); // null allows google fonts to have multiple family args in url
	// wp_enqueue_style('gallop-theme-custom-fonts', 'https://use.typekit.net/zho6vbm.css', array(), '1.2');

	wp_enqueue_style('gallop-theme-custom-fonts', get_stylesheet_directory_uri() . '/assets/css/fonts.css', array(), '1.0');
	wp_enqueue_style('gallop-theme-leftquote', get_stylesheet_directory_uri() . '/assets/fonts/leftquote/stylesheet.css', array(), '1.0');
	wp_enqueue_style('gallop-theme-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.24');
}

function gallop_theme_support()
{
	// This produces debug errors.
	// add_theme_support('editor-styles');
	// add_editor_style("https://use.typekit.net/zho6vbm.css");

	add_editor_style('style.css');
	add_editor_style('assets/css/fonts.css');
	add_editor_style('assets/fonts/leftquote/stylesheet.css');
}

add_action('after_setup_theme', 'gallop_theme_support');
