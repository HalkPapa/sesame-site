<?php
/**
 * Template Name: Company Page
 * Description: Companyページ用のテンプレート
 */

get_header(); ?>

<div class="site-container">
    <main class="main-content">
        <div class="section-labels">
            <a href="<?php echo esc_url(home_url('/concept')); ?>">concept</a>
            <a href="<?php echo esc_url(home_url('/company')); ?>">company</a>
        </div>
        
        <div class="company-content">
            <div class="company-info">
                <div class="company-section">
                    <h2 class="company-heading">商号</h2>
                    <p class="company-text">合同会社sesame</p>
                </div>
                
                <div class="company-section">
                    <h2 class="company-heading">メンバー</h2>
                    
                    <div class="member-item">
                        <p class="member-role">Co-founder</p>
                        <p class="member-name">小池 瑛瑠</p>
                    </div>
                    
                    <div class="member-item">
                        <p class="member-role">Co-founder/カメラマン</p>
                        <p class="member-name">汐田 伊吹</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>
