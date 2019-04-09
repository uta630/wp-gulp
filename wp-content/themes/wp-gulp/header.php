<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(is_single() || is_page()): ?><?php wp_title('|', true, 'right'); ?><?php elseif(is_search()): ?>検索結果<?php else: ?><?php endif; ?><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon">
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.min.js"></script>
    <?php
    if ( get_theme_mod( 'site_primary_color', 'default' ) !== 'default' ) {
        function theme_site_primary_color() {
            $site_primary_color = get_theme_mod( 'site_primary_color' );
            ?>
            <style>.l-hero { border-color: <?php echo esc_html( $site_primary_color ); ?>; }</style>
            <?php
        }
        add_action( 'wp_head', 'theme_site_primary_color' );
    }
    ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>