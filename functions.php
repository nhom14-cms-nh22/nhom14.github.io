<?php


function nhom14_themes_supports()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('init', 'nhom14_themes_supports');



function nhom14_themes_menu()
{
    $locations = array(
        'primary' => 'Menu Primary left sidebar',
        'footer' => 'Footer menu Items'
    );

    register_nav_menus($locations);
}
add_action('init', 'nhom14_themes_menu');



function themes_nhom14_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('nhom14-style', get_template_directory_uri() . "/style.css", array('nhom14-bootstrap'), $version, 'all');
    wp_enqueue_style('nhom14-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('nhom14-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}
add_action('wp_enqueue_scripts', 'themes_nhom14_register_styles');



function themes_nhom14_register_scripts()
{
    wp_enqueue_script('nhom14-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script('nhom14-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
    wp_enqueue_script('nhom14-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
    wp_enqueue_script('nhom14-main', "main.js", array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'themes_nhom14_register_scripts');



function themes_nhom14_widget_areas()
{

    register_sidebar(
        array(
            'name'          => 'Footer Area',
            'id'            => 'footer-1',
            'description'   => 'Thêm các widget * vào đây',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'themes_nhom14_widget_areas');
