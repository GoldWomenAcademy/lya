<?php get_header(); ?>

<div class="items item">
            <article>
                <div class="nextandprev d-flex flex-wrap justify-content-between">
                    <div class="next">
                        <a href="">LIEN VERS LE POST PLUS RECENT</a>
                    </div>
                    <div class="prev">
                        <a href="">LIEN VERS LE POST PLUS ANCIEN</a>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit deserunt blanditiis, dolor, rerum totam optio, odio repellat tempora est reiciendis debitis nisi enim. Quasi dolorum culpa itaque repellendus mollitia tempore cumque pariatur, delectus error dolor quia ea neque veritatis blanditiis porro totam, accusamus ducimus nobis ipsum! Perferendis aut omnis rem ea voluptatum vero, dolores, aliquid amet recusandae reprehenderit assumenda distinctio eveniet voluptate consequuntur blanditiis sequi</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit deserunt blanditiis, dolor, rerum totam optio, odio repellat tempora est reiciendis debitis nisi enim. Quasi dolorum culpa itaque repellendus mollitia tempore cumque pariatur, delectus error dolor quia ea neque veritatis blanditiis porro totam, accusamus ducimus nobis ipsum! Perferendis aut omnis rem ea voluptatum vero, dolores, aliquid amet recusandae reprehenderit assumenda distinctio eveniet voluptate consequuntur blanditiis sequi</p>
                    </div>
                </div>
            </article>
            <!-- Les commentaires -->
        </div>


<?php get_footer(); ?>