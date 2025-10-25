<?php
/**
 * Template Name: Work Page
 * Description: Workページ用のテンプレート - 投稿ベース
 */

get_header(); ?>

<div class="site-container">
    <main class="main-content">
        <div class="section-labels">
            <a href="<?php echo esc_url(home_url('/work')); ?>">work</a>
        </div>
        
        <?php
        // 実績投稿を取得
        $args = array(
            'post_type' => 'works',
            'posts_per_page' => -1, // すべての実績を表示
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $work_query = new WP_Query($args);
        
        if ($work_query->have_posts()) :
            ?>
            <div class="work-grid">
                <?php
                while ($work_query->have_posts()) : $work_query->the_post();
                    // カテゴリー情報の取得
                    $categories = get_the_terms(get_the_ID(), 'works_category');
                    $category_name = '';
                    if ($categories && !is_wp_error($categories)) {
                        $category_name = $categories[0]->name;
                    }
                    ?>
                    <div class="work-item">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="work-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <div class="work-item-content">
                            <?php if ($category_name) : ?>
                                <p class="work-category"><?php echo esc_html($category_name); ?></p>
                            <?php endif; ?>
                            
                            <h3 class="work-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            
                            <?php if (get_the_excerpt()) : ?>
                                <p class="work-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>
            <?php
            wp_reset_postdata();
        else :
            ?>
            <div class="work-content">
                <p>実績情報はまだ登録されていません。管理画面から「実績」を追加してください。</p>
            </div>
            <?php
        endif;
        ?>
    </main>
</div>

<?php get_footer(); ?>
