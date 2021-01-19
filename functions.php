<?php

// CSS and JS Files

function lya_add_theme_scripts()
{
    // CSS
    wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css?family=Lato:400,700|Nunito:700');
    wp_enqueue_style('style', get_stylesheet_uri());

    // JS
    wp_enqueue_script('jquery3.3.1', get_template_directory_uri() . '/assets/js/jquery.min.js', '', null, true);
    wp_enqueue_script('burger', get_template_directory_uri() . '/assets/js/burger.js', '', null, true);
}

add_action('wp_enqueue_scripts', 'lya_add_theme_scripts');

// Menu

function lya()
{
    register_nav_menus([
        'main-menu' => 'Menu du Header',
    ]);
}

add_action('init', 'lya');
