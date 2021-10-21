<?php
if ( ! isset( $content_width ) ) $content_width = 1000;

function custom_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-background');
    add_theme_support('custom-header', array('width' =>1000, 'height' =>400));

}

add_action('after_setup_theme', 'custom_theme_setup');

function rekisteroi_menu() {
    register_nav_menu('reuna', 'Paavalikko');
}

add_action('init', 'rekisteroi_menu');

function lisaaTyylit () {
    //esim. bootstrap linkki tähän
    wp_enqueue_style('main_style', get_stylesheet_directory_uri() . '/css/main.css');
}

add_action ('wp_enqueue_scripts', 'lisaaTyylit');

function lisaa_kirjasto() {
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/app.js', array('jquery')
    );
}

add_action ('wp_enqueue_scripts', 'lisaa_kirjasto');
