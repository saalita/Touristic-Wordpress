<?php get_header(); ?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="main-content">
                <div class="content-wrapper">
                    <div class="content">
                        <h1 class="title-page">Последние новости и акции из мира туризма</h1>
                        <div class="posts-list">
                            <?php if (have_posts()) {
                                // Load posts loop.
                                while (have_posts()) {
                                    the_post(); ?>
                                    <div class="post-wrap">
                                        <div class="post-thumbnail">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('medium');
                                            }
                                            ?>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-content__post-info">
                                                <div class="post-date">
                                                    <?php echo get_the_date('F j, Y', $post->post_ID); ?>
                                                </div>
                                            </div>
                                            <div class="post-content__post-text">
                                                <div class="post-title">
                                                    <?php the_title(); ?>
                                                </div>
                                                <p>
                                                    <?php the_excerpt(); ?>
                                                </p>
                                            </div>
                                            <div class="post-content__post-control">
                                                <a href="<?php echo get_permalink(); ?>" class="btn-read-post">Читать
                                                    далее >></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                    <?php get_sidebar(); ?>

        </main><!-- .site-main -->
    </section><!-- .content-area -->

<?php get_footer();
