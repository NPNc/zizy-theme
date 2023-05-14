<?php
function zizy_theme_scripts()
{
    custom_styles();
    custom_scripts();
    add_vendors();
}
add_action('wp_enqueue_scripts', 'zizy_theme_scripts');


function custom_styles()
{
    wp_enqueue_style('zizy-theme-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('zizy-theme-style', 'rtl', 'replace');
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0', 'all');
    wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/css/header.css', array(), '1.0', 'all');

    wp_enqueue_style('homepage-style', get_template_directory_uri() . '/assets/css/homepage.css', array(), '1.0', 'all'); 
    wp_enqueue_style('about-page-style', get_template_directory_uri() . '/assets/css/about.css', array(), '1.0', 'all'); 
    // if(is_home() || is_front_page()){
    // }
}

function custom_scripts()
{
    wp_enqueue_script('zizy-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

function add_vendors()
{
    // bootstrap
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.min.css', array(), '5.0.0', 'all');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.min.js', array('jquery'), '5.0.0', true);
}

/**
 *  Add Scripts for admin page
 */
function zizy_admin_scripts()
{
    wp_enqueue_style('zizy-admin', get_template_directory_uri() . '/assets/css/admin.css', [], wp_rand(), 'all');

    wp_enqueue_media();
    wp_enqueue_script('admin-script', get_template_directory_uri() . '/js/admin.js', ['jquery'], wp_rand(), true);
}
add_action('admin_enqueue_scripts', 'zizy_admin_scripts');