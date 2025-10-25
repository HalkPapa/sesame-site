<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="site-branding">
        <h1 class="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" class="site-logo">
            </a>
        </h1>
    </div>
    
    <nav class="main-navigation">
        <?php
        // カスタムメニューがあれば表示、なければデフォルトのリンク
        if (has_nav_menu('primary')) {
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'items_wrap'     => '%3$s',
                'walker'         => new Sesame_Walker_Nav_Menu(),
            ));
        } else {
            // デフォルトのナビゲーション
            ?>
            <a href="#concept">concept</a>
            <a href="#work">work</a>
            <a href="#company">company</a>
            <a href="#contact">Contact</a>
            <?php
        }
        ?>
    </nav>
</header>
