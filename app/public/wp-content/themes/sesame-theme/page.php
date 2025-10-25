<?php get_header(); ?>

<div class="site-container">
    <main class="main-content page-content">
        <?php
        while (have_posts()) : the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="page-header">
                    <div class="section-labels">
                        <span><?php echo strtolower(get_the_title()); ?></span>
                    </div>
                    <h1 class="page-title"><?php the_title(); ?></h1>
                </header>

                <div class="page-entry">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php
        endwhile;
        ?>
    </main>
</div>

<?php get_footer(); ?>
