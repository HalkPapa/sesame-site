<?php get_header(); ?>

<div class="site-container">
    <main class="main-content">
        <div class="section-labels">
            <a href="<?php echo esc_url(home_url('/concept')); ?>">concept</a>
            <a href="<?php echo esc_url(home_url('/company')); ?>">company</a>
        </div>
        
        <div class="hero-section">
            <h2 class="hero-title">
                <?php echo esc_html(get_theme_mod('sesame_hero_title', '想像の扉を開く。')); ?>
            </h2>
            
            <div class="hero-text">
                <?php 
                $hero_text = get_theme_mod('sesame_hero_text', '人は誰しも想像することができ、
その想像を誰しもが実現することができます。
クウカン、モノ、エイゾウ、ガゾウなど
多くの想像を表現する場が広がっています。
いつの日かその想像は扉の中に
閉ざされているのではないでしょうか？
その扉が重く閉ざされていたなら一緒に開けていく。');
                
                // 各行をpタグで囲む
                $lines = explode("\n", $hero_text);
                foreach ($lines as $line) {
                    if (trim($line) !== '') {
                        echo '<p>' . esc_html($line) . '</p>';
                    }
                }
                ?>
            </div>
            
            <p class="hero-tagline">
                <?php echo esc_html(get_theme_mod('sesame_hero_tagline', 'sesameは想像をカタチにしていきます。')); ?>
            </p>
        </div>
    </main>
</div>

<?php get_footer(); ?>
