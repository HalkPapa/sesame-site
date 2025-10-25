<?php get_header(); ?>

<div class="site-container">
    <main class="main-content">
        <!-- Conceptセクション -->
        <section id="concept" class="content-section">
            <div class="section-labels">
                <a href="#concept">concept</a>
                <a href="#company">company</a>
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
        </section>

        <!-- Workセクション -->
        <section id="work" class="content-section">
            <div class="section-labels">
                <a href="#work">work</a>
            </div>
            
            <h2 class="section-title">実績紹介</h2>
            
            <div class="work-content">
                <p>これまでの制作実績をご紹介します。</p>
                
                <div class="work-grid">
                    <!-- ここに実績を追加 -->
                    <div class="work-item">
                        <h3>プロジェクト名1</h3>
                        <p>プロジェクトの説明文...</p>
                    </div>
                    
                    <div class="work-item">
                        <h3>プロジェクト名2</h3>
                        <p>プロジェクトの説明文...</p>
                    </div>
                    
                    <div class="work-item">
                        <h3>プロジェクト名3</h3>
                        <p>プロジェクトの説明文...</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Companyセクション -->
        <section id="company" class="content-section">
            <div class="section-labels">
                <a href="#company">company</a>
            </div>
            
            <h2 class="section-title">会社概要</h2>
            
            <div class="company-content">
                <table class="company-table">
                    <tr>
                        <th>会社名</th>
                        <td>sesame合同会社</td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td>2020年</td>
                    </tr>
                    <tr>
                        <th>事業内容</th>
                        <td>クリエイティブ制作<br>空間デザイン<br>映像制作</td>
                    </tr>
                    <tr>
                        <th>所在地</th>
                        <td>東京都</td>
                    </tr>
                </table>
            </div>
        </section>

        <!-- Contactセクション -->
        <section id="contact" class="content-section">
            <div class="section-labels">
                <a href="#contact">contact</a>
            </div>
            
            <h2 class="section-title">お問い合わせ</h2>
            
            <div class="contact-content">
                <p>ご相談・お問い合わせはこちらからお気軽にどうぞ。</p>
                
                <div class="contact-form">
                    <p>メール: info@sesame-gk.jp</p>
                    <p>お問い合わせフォームは準備中です。</p>
                    <!-- Contact Form 7のショートコードをここに配置 -->
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>
