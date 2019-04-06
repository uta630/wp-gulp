<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(is_single() || is_page()): ?><?php wp_title('|', true, 'right'); ?><?php elseif(is_search()): ?>検索結果<?php else: ?><?php endif; ?><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon">
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>