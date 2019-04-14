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

// カテゴリ一覧リンク
function get_post_cat_link($cat_name){
    $category_id = get_cat_ID($cat_name);
    $category_link = get_category_link( $category_id );
    return esc_url( $category_link );
}

// カスタムメニュー
register_nav_menu('gnav', 'グローバルメニュー');
register_nav_menu('snsnav', 'SNS');
register_nav_menu('company', '会社情報');

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
        ]
    );
    // カスタム投稿を増やしたければここに記述する
    // register_post_type( 'about',
    //     [
    //     'labels' => [
    //         'name'          => 'サイトについて',
    //         'singular_name' => 'about',
    //     ],
    //     'public'        => true,
    //     'menu_position' => 6,
    //     ]
    // );
}

// ページャ
function pagination($pages = '', $post_type = 'post', $range = 2) {
    $showitems = ($range * 2) + 1;

    global $paged;
    if(empty($paged)) $paged = 1 ;
   
    if($pages == '') {
        global $wp_query;
        $wp_query->query(array(
            'post_type' => $post_type,
        ));
        $pages = $wp_query->max_num_pages;
        if(!$pages) {
            $pages = 1;
        }
    }
   
    if(1 != $pages) {
        echo "<div class=\"c-pager\">";
        echo "<ul>\n";

        if($paged > 1) echo "<li class=\"c-pager__item c-pager__side c-pager__prev\"><a href='".get_pagenum_link($paged - 1)."'>Prev</a></li>\n";

        for($i=1; $i <= $pages; $i++){
            if(1 != $pages && ( !($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems )){
                echo ($paged == $i) ? "<li class=\"c-pager__item c-pager__active\">".$i."</li>\n" : "<li class='c-pager__item'><a href='".get_pagenum_link($i)."'>".$i."</a></li>\n" ;
            }
        }

        if($paged < $pages) echo "<li class=\"c-pager__item c-pager__side c-pager__next\"><a href='".get_pagenum_link($paged + 1)."'>Next</a></li>\n";
        echo "</ul>\n";
        echo "</div>\n";
    }
}

// サイトカスタマイザー
function site_settings($wp_customize) {
    // カスタマイズ : 「サイトについて」エリア追加
	$wp_customize->add_section( 'site_about' , array(
		'title' => 'サイトについて',
	));
	$wp_customize->add_setting( 'site_about_options', array(
		'default' => '',
		'type' => 'option',
	));
	$wp_customize->add_control( 'site_about_set', array(
		'label' => '概要',
		'section' => 'site_about',
		'settings' => 'site_about_options',
    ));
    

    // カスタマイズ : 配色
    $wp_customize->add_setting( 'site_primary_color', array(
        'default'    => '#333',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_primary_color', array(
        'label'      => __( 'Primary Color', 'textdomain' ),
        'section'    => 'colors',
        'priority' => 10,
    )));
    $wp_customize->add_setting( 'site_secondary_color', array(
        'default'    => '#666',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_secondary_color', array(
        'label'      => __( 'Secondary Color', 'textdomain' ),
        'section'    => 'colors',
        'priority' => 10,
    )));
}
add_action( 'customize_register' , 'site_settings' );