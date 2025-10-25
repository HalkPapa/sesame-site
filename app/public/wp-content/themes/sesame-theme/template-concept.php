<?php
/**
 * Template Name: Concept Page
 * Description: Conceptページ用のテンプレート
 */

get_header(); ?>

<div class="site-container">
    <main class="main-content">
        <div class="section-labels">
            <a href="<?php echo esc_url(home_url('/concept')); ?>">concept</a>
            <a href="<?php echo esc_url(home_url('/company')); ?>">company</a>
        </div>
        
        <div class="hero-section">
            <h2 class="hero-title">想像の扉を開く。</h2>
            
            <div class="hero-text">
                <p>人は誰しも想像することができ、</p>
                <p>その想像を誰しもが実現することができます。</p>
                <p>クウカン、モノ、エイゾウ、ガゾウなど</p>
                <p>多くの想像を表現する場が広がっています。</p>
                <p>いつの日かその想像は扉の中に</p>
                <p>閉ざされているのではないでしょうか？</p>
                <p>その扉が重く閉ざされていたなら一緒に開けていく。</p>
            </div>
            
            <p class="hero-tagline">sesameは想像をカタチにしていきます。</p>
        </div>
    </main>
</div>

<?php get_footer(); ?>
