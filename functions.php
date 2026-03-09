<?php

// 1. Define the function
function my_theme_scripts() {
    // Enqueue your main stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // If you have a custom JS file, uncomment the line below:
    // wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}

// 2. Hook it into WordPress
add_action('wp_enqueue_scripts', 'my_theme_scripts');

// 3. Register your Navigation Menu (needed for the header.php we built)
function my_theme_setup() {
    register_nav_menus(array(
        'header-menu' => 'Header Menu',
    ));
}
add_action('after_setup_theme', 'my_theme_setup');

// Declaring Main CSS

function tim_williams_scripts() {
    // get_template_directory_uri() points to your theme folder root
    wp_enqueue_style('custom-main-style', get_template_directory_uri() . '/main.css');
}

add_action('wp_enqueue_scripts', 'tim_williams_scripts');

function my_custom_theme_scripts() {

  // Loading main stylesheet style.css in root
    wp_enqueue_style( 'main-styles', get_stylesheet_uri());


    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/src/js/app.min.js', array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
