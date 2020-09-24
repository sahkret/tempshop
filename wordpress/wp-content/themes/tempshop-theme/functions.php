<?php

function tempshop__theme_support(){

    //Adds dynamic title support
    add_theme_support('title-tag');
    //Adds custom logo support
    add_theme_support('custom-logo');
    //Adds featured images support
    add_theme_support('post-thumbnails');

}
add_action('after_setup_theme','tempshop__theme_support');

//Adds menu support
function tempshop__menus(){

    $locations = array(
        'primary' => "Header menu",
        'footer' => "Footer categories",
        'some' => "Social Media"
    );

    register_nav_menus($locations);

}
add_action('init','tempshop__menus');

//Register and enqueue css and js files to overwrite WordPress standards
function tempshop__scripts(){

    $version = wp_get_theme()->get('Version');
    wp_register_style('tempshop__style', get_template_directory_uri() . '/assets/css/styles.css', array('tempshop__bootstrap'), $version, 'all');
    wp_enqueue_style('tempshop__style');
    wp_enqueue_style('tempshop__bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('tempshop__fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css', array(), '5.14.0', 'all');

    //Enqueue js dependencies and place them in the footer where they belong
    wp_enqueue_script('tempshop__jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1', true);
    wp_enqueue_script('tempshop__popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), '1.14.7', true);
    wp_enqueue_script('tempshop__bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), '4.3.1', true);

    wp_register_script('tempshop__script', get_template_directory_uri() . '/assets/js/script.min.js', array('jquery'), 1.0, true);
    wp_enqueue_script('tempshop__script');

}
add_action('wp_enqueue_scripts','tempshop__scripts');

//Add a widget to enable widget support
register_sidebar(

    array(

        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',

    )

);

//Add WooCommerce support (courtesy of WooCommerce documentation)
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );