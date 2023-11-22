<!-- controller for initiating and overriding wordpress functions -->

<?php

function kiwi_theme_support() { // dynamic title tag
    add_theme_support( "title-tag" );
    add_theme_support( "custom-logo" );
}

add_action( "after_setup_theme", "kiwi_theme_support" );

function kiwi_theme_styles() {
    wp_enqueue_style( 'kiwi_css', get_template_directory_uri().'/assets/css/general.css', array(), "1.0", "all" );
    wp_enqueue_style( 'chivo_font', "https://fonts.googleapis.com/css?family=Chivo", array(), "1.0", "all" );
}

add_action( 'wp_enqueue_scripts', 'kiwi_theme_styles' );

function kiwi_theme_scripts() { // this enqueues any future js code i write
}

add_action( 'wp_enqueue_scripts', 'kiwi_theme_scripts' );

?>