<?php

// 記事「続きを読む」
function excerpt_length($length) {
    return 46;
}
add_filter('excerpt_length', 'excerpt_length');
function excerpt_more($more) {
    return '…<a href="'. get_permalink($post->ID) . '">' . '続きを読む' . '</a>';
}
add_filter('excerpt_more', 'excerpt_more');

// hero画像
$custom_header_defaults = array(
    'default-image' => get_bloginfo('template_url').'/images/bg.jpg',
    'header-text' => false,
);
add_theme_support('custom-header', $custom_header_defaults);

// カスタムメニュー
register_nav_menu('gnav', 'グローバルメニュー');
register_nav_menu('snsnav', 'SNS');

// カスタム投稿
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'info',
        [
        'labels' => [
            'name'          => 'お知らせ',
            'singular_name' => 'info',
        ],
        'public'        => true,
        'menu_position' => 5,
    ]);
}

