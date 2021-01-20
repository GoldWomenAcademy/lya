<?php get_header(); ?>

<div class="items item">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <div class="nextandprev d-flex flex-wrap justify-content-between">
                    <div class="next">
                        <?php next_post_link(); ?>
                    </div>
                    <div class="prev">
                        <?php get_preview_post_link(); ?>
                    </div>
                </div>
                <div class="infos">
                    <div class="cats-date">
                        <?php the_category(', '); ?>
                        <time datetime="<?php the_time("Y-m-d H:i"); ?>"><?php the_time("j F Y"); ?></time>
                    </div>
                    <?php the_tags('<div class="tags d-flex flex-wrap">', '', '</div>'); ?>
                    <h1><?php the_title(); ?></h1>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
            <!-- Les commentaires -->
        </div>

<?php get_footer(); ?>