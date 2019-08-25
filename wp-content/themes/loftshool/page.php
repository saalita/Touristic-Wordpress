<?php get_header(); ?>

<div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <h1 class="title-page"><?php the_title(); ?></h1>
            <p><?php echo $post->post_content; ?></p>
        </div>

        <?php get_sidebar(); ?>

    </div>
</div>
<?php get_footer(); ?>
