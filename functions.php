<!-- controller for initiating and overriding wordpress functions -->

<?php

function kiwi_theme_support() { // dynamic title tag
    add_theme_support( "title-tag" );
    add_theme_support( "custom-logo" );
}

add_action( "after_setup_theme", "kiwi_theme_support" );

function kiwi_menus() { // dynamic menus
    $locations = array(
        "primary" => "Primary",
    );

    register_nav_menus( $locations );
}

add_action( "init", "kiwi_menus" );

function kiwi_theme_styles() {
    wp_enqueue_style( 'kiwi_css', get_template_directory_uri().'/assets/css/general.css', array(), "1.0", "all" );
    wp_enqueue_style( 'chivo_font', "https://fonts.googleapis.com/css2?family=Chivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap", array(), "1.0", "all" );
    wp_enqueue_style( 'rubik_font', "https://fonts.googleapis.com/css?family=Rubik", array(), "1.0", "all" );
}

add_action( 'wp_enqueue_scripts', 'kiwi_theme_styles' );

function kiwi_theme_scripts() { // this enqueues any future js code i write
    wp_enqueue_script( 'darkmode', get_template_directory_uri().'/assets/javascript/darkmode.js', array(), "1.0", false);
}

add_action( 'wp_enqueue_scripts', 'kiwi_theme_scripts' );

?>