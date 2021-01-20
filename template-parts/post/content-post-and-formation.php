<article>
    <div class="infos">
        <div class="cats-date">
        <?php the_category(', '); ?>
            <time datetime="<?php the_time('Y-m-d H:i'); ?>">/ <?php the_time('j F Y') ?></time>
        </div>
        <?php the_tags('<div class="tags d-flex flex-wrap">', '', '</div>'); ?>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    </div>
</article>