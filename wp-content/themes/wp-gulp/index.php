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
    <p class="c-heading__desc">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
</div>


<div class="l-section c-card">
    <div class="c-card__items">
        <?php get_template_part('loop'); ?>
    </div>

    <?php
        $category_id = get_cat_ID( 'blog' );
        $category_link = get_category_link( $category_id );
    ?>
    <a href="<?php echo esc_url( $category_link ); ?>" class="c-btn">コンテンツ一覧へ</a>
</div>

<div class="l-section c-heading">
    <h3 class="c-heading__title">Information</h3>
</div>

<?php $args = array(
    'numberposts' => 3,
    'post_type' => 'info'
);
$posts = get_posts( $args );
?>
<div class="l-section c-list">
    <div class="c-list__items">
        <?php get_template_part('loop-info'); ?>

        <?php
            $category_id = get_cat_ID( 'info' );
            $category_link = get_category_link( $category_id );
        ?>
        <a href="<?php echo esc_url( $category_link ); ?>" class="c-btn">お知らせ一覧へ</a>
    </div>
</div>

<div class="c-panel">
    <?php wp_nav_menu( array(
        'theme_location' => 'company',
        'container'      => '',
        'menu_class'     => '',
        'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
    ) ); ?>
    <?php get_template_part('loop-item'); ?>
</div>

<?php get_footer(); ?>