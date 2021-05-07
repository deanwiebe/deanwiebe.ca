<?php
//Loading CSS/Styles and Javascript files
function deanwiebe_files(){
    wp_enqueue_style('font_awsome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css');
    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins:wght@400;700&display=swap');

    if(strstr($_SERVER['SERVER_NAME'], 'localhost')){
        wp_enqueue_script('main_script', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    }else{
        wp_enqueue_script('main_vendor', get_theme_file_uri('/bundled-assets/vendors~scripts.6ae520508a5e079132c1.js'), NULL, '1.0', true);
        wp_enqueue_script('main_script', get_theme_file_uri('/bundled-assets/scripts.ad86418f9c3b331879c0.js'), NULL, '1.0', true);
        wp_enqueue_style('main_style', get_theme_file_uri('/bundled-assets/styles.ad86418f9c3b331879c0.css'));
    }
}

add_action('wp_enqueue_scripts', 'deanwiebe_files');


// Theme Supports
function deanwiebe_features(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support('title-tag');
    register_nav_menu('header_menu', 'Header Menu');
}
add_action('after_setup_theme', 'deanwiebe_features');