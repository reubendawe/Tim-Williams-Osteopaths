<?php

function my_theme_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');

function my_theme_setup() {
    register_nav_menus(array(
        'header-menu' => 'Header Menu',
    ));
}
add_action('after_setup_theme', 'my_theme_setup');

function tim_williams_scripts() {
    wp_enqueue_style('custom-main-style', get_template_directory_uri() . '/main.css');
}

add_action('wp_enqueue_scripts', 'tim_williams_scripts');

function my_custom_theme_scripts() {

    wp_enqueue_style( 'main-styles', get_stylesheet_uri());


    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/src/js/app.min.js', array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

function my_theme_enqueue_styles() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
