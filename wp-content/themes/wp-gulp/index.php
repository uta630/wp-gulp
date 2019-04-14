<?php get_header(); ?>

<div class="l-hero c-hero" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg.jpg)">
    <div class="c-hero__heading">
        <h1 class="c-hero__title"><?php bloginfo('name'); ?></h1>
    </div>

    <p class="c-hero__desc"><?php bloginfo('description'); ?></p>
</div>

<?php get_template_part('gnav'); ?>

<div class="l-section c-heading">
    <h3 class="c-heading__title"><?php bloginfo('name'); ?>について</h3>

    <p class="c-heading__desc"><?php echo get_option( 'site_about_options' ); ?></p>
</div>

<div class="l-section c-card">
    <div class="c-card__items">
        <?php get_template_part('loop'); ?>
    </div>
    
    <a href="<?php echo get_post_cat_link('コンテンツ') ?>" class="c-btn">コンテンツ一覧へ</a>
</div>

<div class="l-section c-heading">
    <h3 class="c-heading__title">Information</h3>
</div>

<?php
    $args = array(
        'numberposts' => 3,
        'post_type' => 'info'
    );
    $posts = get_posts( $args );
?>
<div class="l-section c-list">
    <div class="c-list__items">
        <?php get_template_part('loop-info'); ?>
        
        <a href="<?php echo get_post_cat_link('お知らせ') ?>" class="c-btn">お知らせ一覧へ</a>
    </div>
</div>

<?php get_footer(); ?>