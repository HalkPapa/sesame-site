<?php
/**
 * Template Name: Contact Page
 * Description: Contactページ用のテンプレート（Contact Form 7対応）
 */

get_header(); ?>

<div class="site-container">
    <main class="main-content contact-page">
        <div class="contact-form-wrapper">
            <?php
            // Contact Form 7のショートコードを表示
            // 管理画面で作成したフォームのIDまたはタイトルを指定してください
            // 例: [contact-form-7 id="123" title="お問い合わせ"]
            
            if (shortcode_exists('contact-form-7')) {
                // フォームIDを自動検出して表示
                $cf7_forms = get_posts(array(
                    'post_type' => 'wpcf7_contact_form',
                    'posts_per_page' => 1,
                ));
                
                if (!empty($cf7_forms)) {
                    $form_id = $cf7_forms[0]->ID;
                    echo do_shortcode('[contact-form-7 id="' . $form_id . '"]');
                } else {
                    // フォームがまだ作成されていない場合
                    ?>
                    <div class="contact-setup-notice">
                        <h2>お問い合わせフォーム設定</h2>
                        <p>Contact Form 7のフォームを作成してください。</p>
                        <ol>
                            <li>WordPress管理画面の「お問い合わせ」→「新規追加」</li>
                            <li>フォームを作成して保存</li>
                            <li>このページを再読み込み</li>
                        </ol>
                        <p>詳しくは <code>contact-setup-guide.md</code> をご確認ください。</p>
                    </div>
                    <?php
                }
            } else {
                // Contact Form 7がインストールされていない場合
                ?>
                <div class="contact-setup-notice">
                    <h2>Contact Form 7が必要です</h2>
                    <p>お問い合わせフォームを表示するには、Contact Form 7プラグインをインストールしてください。</p>
                    <ol>
                        <li>WordPress管理画面の「プラグイン」→「新規追加」</li>
                        <li>「Contact Form 7」を検索</li>
                        <li>インストール・有効化</li>
                    </ol>
                    <p>詳しくは <code>contact-setup-guide.md</code> をご確認ください。</p>
                </div>
                <?php
            }
            ?>
        </div>
    </main>
</div>

<?php get_footer(); ?>
