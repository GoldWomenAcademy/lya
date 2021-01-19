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
                    <ul class="d-md-flex">
                        <li><a href="index.html">Formations</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-xl-3">
                    <div class="sidebar">
                        <aside>
                            <h2>Mon widget</h2>
                            <p>Contenu du widget</p>
                        </aside>
                        <aside>
                            <h2>Mon widget</h2>
                            <p>Contenu du widget</p>
                        </aside>
                        <aside>
                            <h2>Mon widget</h2>
                            <p>Contenu du widget</p>
                        </aside>
                    </div>
                </div>
                <div class="content col-12 col-md-8 col-xl-9">
                    <h1>Le blog</h1>
                    <div class="items row d-flex flex-wrap">
                        <div class="col-lg-6">
                            <article>
                                <div class="infos">
                                    <div class="cats-date">
                                        <a href="">CAT1</a>,
                                        <a href="">CAT2</a>
                                        <time datetime="2018-06-20 16:20">/ 20 JUIN 2018</time>
                                    </div>
                                    <div class="tags d-flex flex-wrap">
                                        <a href="">tag1</a>
                                        <a href="">tag2</a>
                                    </div>
                                    <h1><a href="post.html">Le nom du post</a></h1>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-6">
                    </div>
                </div>
            </div>
        </main>
    <?php wp_footer(); ?>
</body>
</html>