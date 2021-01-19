<?php

// Files CSS and JS

function lya_add_theme_scripts() 
{
    // CSS 
    wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');

    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.15.1/css/all.css'); 
}

add_action('wp_enqueue_scripts', 'lya_add_theme_scripts');