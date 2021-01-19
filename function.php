<?php

// Files CSS and JS

function lya_add_theme_scripts() 
{
    // CSS 
    wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.15.1/css/all.css'); 
    wp_enqueue_style('style', get_stylesheet_uri());

    // JS
    wp_enqueue_scripts('jquery3.5.1', get_template_directory_uri() . '/assets/js/jquery.min.js);
}

add_action('wp_enqueue_scripts', 'lya_add_theme_scripts');