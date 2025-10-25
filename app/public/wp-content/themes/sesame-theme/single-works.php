<?php
/**
 * Single Works Template
 * 実績詳細ページのテンプレート
 */

get_header(); ?>

<div class="site-container">
    <main class="main-content">
        <?php
        while (have_posts()) : the_post();
            // カテゴリー情報の取得
            $categories = get_the_terms(get_the_ID(), 'works_category');
            ?>
            
            <div class="section-labels">
                <a href="<?php echo esc_url(home_url('/work')); ?>">work</a>
                <?php if ($categories && !is_wp_error($categories)) : ?>
                    <span class="separator">/</span>
                    <span><?php echo esc_html($categories[0]->name); ?></span>
                <?php endif; ?>
            </div>
            
            <article class="work-single">
                <header class="work-header">
                    <?php if ($categories && !is_wp_error($categories)) : ?>
                        <p class="work-category-single"><?php echo esc_html($categories[0]->name); ?></p>
                    <?php endif; ?>
                    
                    <h1 class="work-title-single"><?php the_title(); ?></h1>
                    
                    <?php if (get_the_excerpt()) : ?>
                        <div class="work-excerpt-single">
                            <?php the_excerpt(); ?>
                        </div>
                    <?php endif; ?>
                </header>
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="work-featured-image">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                <?php endif; ?>
                
                <div class="work-content-single">
                    <?php the_content(); ?>
                </div>
                
                <div class="work-navigation">
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    ?>
                    
                    <?php if ($prev_post) : ?>
                        <a href="<?php echo get_permalink($prev_post->ID); ?>" class="work-nav-link work-nav-prev">
                            <span class="work-nav-label">← 前の実績</span>
                            <span class="work-nav-title"><?php echo get_the_title($prev_post->ID); ?></span>
                        </a>
                    <?php endif; ?>
                    
                    <a href="<?php echo esc_url(home_url('/work')); ?>" class="work-nav-link work-nav-back">
                        <span class="work-nav-label">一覧に戻る</span>
                    </a>
                    
                    <?php if ($next_post) : ?>
                        <a href="<?php echo get_permalink($next_post->ID); ?>" class="work-nav-link work-nav-next">
                            <span class="work-nav-label">次の実績 →</span>
                            <span class="work-nav-title"><?php echo get_the_title($next_post->ID); ?></span>
                        </a>
                    <?php endif; ?>
                </div>
            </article>
            
        <?php endwhile; ?>
    </main>
</div>

<?php get_footer(); ?>
