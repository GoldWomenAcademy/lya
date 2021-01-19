<?php get_header(); ?>

<div class="row">
    <?php get_sidebar(); ?>
    <div class="content col-12 col-md-8 col-xl-9">
        <h1>Le blog</h1>
        <div class="items row d-flex flex-wrap">
        <?php get_template_part('template-parts/post/content', 'post-and-formation'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
