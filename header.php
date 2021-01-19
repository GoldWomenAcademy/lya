<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
            <div class="container d-flex flex-wrap align-items-center">
                <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                <button id="burger" class="d-md-none">
                    <i class="fas fa-bars"></i>
                </button>
                <nav class="menu d-md-block">
                    <!-- <ul class="d-md-flex">
                        <li><a href="index.html">Formations</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul> -->
                    <? php 
                    wp_nav_menu([
                        'menu' => "main-menu",
                        'container' => false,
                        'menu_class' => 'd-md-flex', 
                    ])
                    ?>
                </nav>
            </div>
        </header>
        <main class="container">   