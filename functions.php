<?php

function dbomoto_theme_support(){
    add_theme_support('title-tag');

}

add_action('after_setup_theme','dbomoto_theme_support');

function dbomoto_menus(){

    $locations = array(
        'top-menu-left' => "The top menu left",
        'top-menu-right' => "The top menu right",
        'bottom-menu' => "The bottom menu"
    );

    register_nav_menus($locations);
}

add_action('init', 'dbomoto_menus');

function dbomoto_load_styles(){
    $styleVersion = wp_get_theme()->get('Version');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', array(), $styleVersion, 'all');
}

add_action('wp_enqueue_scripts','dbomoto_load_styles');


function dbomoto_load_scripts(){

   wp_enqueue_script('tailwind-css', 'https://cdn.tailwindcss.com', array(), '3.0.24', true);
   wp_enqueue_script('tailwind-config', get_template_directory_uri() .'/assets/javascript/tailwindConfig.js', array(), '1.0', true);
   wp_enqueue_script('font-page-scripts', get_template_directory_uri() .'/assets/javascript/frontPageScripts.js', array(), '1.0', true);
   wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/a8d6f229b3.js', array(), '6.1.1', true);

}

add_action('wp_enqueue_scripts','dbomoto_load_scripts');


?>