<?php
/**
 * Sesame Theme Functions
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * テーマのセットアップ
 */
function sesame_theme_setup() {
    // タイトルタグのサポート
    add_theme_support('title-tag');
    
    // 投稿とコメントのRSSフィードリンクを追加
    add_theme_support('automatic-feed-links');
    
    // HTML5マークアップのサポート
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    
    // アイキャッチ画像のサポート
    add_theme_support('post-thumbnails');
    
    // カスタムロゴのサポート
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // ナビゲーションメニューの登録
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'sesame'),
    ));
}
add_action('after_setup_theme', 'sesame_theme_setup');

/**
 * スタイルとスクリプトの読み込み
 */
function sesame_enqueue_scripts() {
    // メインスタイルシート
    wp_enqueue_style('sesame-style', get_stylesheet_uri(), array(), '1.0');
    
    // Google Fonts (Noto Sans JP)
    wp_enqueue_style(
        'sesame-google-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;600;700&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'sesame_enqueue_scripts');

/**
 * サイトタイトルとディスクリプションの設定
 */
function sesame_custom_title($title) {
    if (is_front_page() && is_home()) {
        return get_bloginfo('name') . ' | 想像をカタチに';
    }
    return $title;
}
add_filter('pre_get_document_title', 'sesame_custom_title');

/**
 * カスタマイザーの追加
 */
function sesame_customize_register($wp_customize) {
    // ヒーローセクションの設定
    $wp_customize->add_section('sesame_hero_section', array(
        'title'    => __('ヒーローセクション', 'sesame'),
        'priority' => 30,
    ));
    
    // ヒーロータイトル
    $wp_customize->add_setting('sesame_hero_title', array(
        'default'           => '想像の扉を開く。',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('sesame_hero_title', array(
        'label'   => __('ヒーロータイトル', 'sesame'),
        'section' => 'sesame_hero_section',
        'type'    => 'text',
    ));
    
    // ヒーローテキスト
    $wp_customize->add_setting('sesame_hero_text', array(
        'default'           => '人は誰しも想像することができ、
その想像を誰しもが実現することができます。
クウカン、モノ、エイゾウ、ガゾウなど
多くの想像を表現する場が広がっています。
いつの日かその想像は扉の中に
閉ざされているのではないでしょうか？
その扉が重く閉ざされていたなら一緒に開けていく。',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('sesame_hero_text', array(
        'label'   => __('ヒーローテキスト', 'sesame'),
        'section' => 'sesame_hero_section',
        'type'    => 'textarea',
    ));
    
    // ヒーロータグライン
    $wp_customize->add_setting('sesame_hero_tagline', array(
        'default'           => 'sesameは想像をカタチにしていきます。',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('sesame_hero_tagline', array(
        'label'   => __('ヒーロータグライン', 'sesame'),
        'section' => 'sesame_hero_section',
        'type'    => 'text',
    ));
}
add_action('customize_register', 'sesame_customize_register');

/**
 * カスタム投稿タイプ「Works（実績）」の登録
 */
function sesame_register_works_post_type() {
    $labels = array(
        'name'                  => '実績',
        'singular_name'         => '実績',
        'menu_name'             => '実績',
        'name_admin_bar'        => '実績',
        'add_new'               => '新規追加',
        'add_new_item'          => '新しい実績を追加',
        'new_item'              => '新しい実績',
        'edit_item'             => '実績を編集',
        'view_item'             => '実績を表示',
        'all_items'             => 'すべての実績',
        'search_items'          => '実績を検索',
        'parent_item_colon'     => '親実績:',
        'not_found'             => '実績が見つかりませんでした。',
        'not_found_in_trash'    => 'ゴミ箱に実績が見つかりませんでした。',
        'featured_image'        => '実績画像',
        'set_featured_image'    => '実績画像を設定',
        'remove_featured_image' => '実績画像を削除',
        'use_featured_image'    => '実績画像として使用',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'works'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true, // Gutenbergエディタサポート
    );
    
    register_post_type('works', $args);
    
    // カスタムタクソノミー（カテゴリー）の登録
    $taxonomy_labels = array(
        'name'              => '実績カテゴリー',
        'singular_name'     => '実績カテゴリー',
        'search_items'      => '実績カテゴリーを検索',
        'all_items'         => 'すべての実績カテゴリー',
        'parent_item'       => '親カテゴリー',
        'parent_item_colon' => '親カテゴリー:',
        'edit_item'         => 'カテゴリーを編集',
        'update_item'       => 'カテゴリーを更新',
        'add_new_item'      => '新しいカテゴリーを追加',
        'new_item_name'     => '新しいカテゴリー名',
        'menu_name'         => '実績カテゴリー',
    );
    
    $taxonomy_args = array(
        'hierarchical'      => true,
        'labels'            => $taxonomy_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'works-category'),
        'show_in_rest'      => true,
    );
    
    register_taxonomy('works_category', array('works'), $taxonomy_args);
}
add_action('init', 'sesame_register_works_post_type');

/**
 * ナビゲーションメニューのカスタマイズ - リスト形式を削除
 */
class Sesame_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= "";
    }
    function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= "";
    }
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        
        $output .= '<a href="' . esc_url($item->url) . '"' . $class_names . '>';
        $output .= apply_filters('the_title', $item->title, $item->ID);
        $output .= '</a>';
    }
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "";
    }
}
