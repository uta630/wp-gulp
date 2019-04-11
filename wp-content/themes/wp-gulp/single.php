<?php get_header(); ?>

<?php get_template_part('gnav'); ?>

<div class="c-heading c-heading--mt">
    <h2 class="c-heading__title">この商品について</h2>
</div>

<div class="l-section c-products">
    <?php if(have_posts()) :
            while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('c-info__item'); ?>>
            <h3 class="c-info__title"><?php the_title(); ?></h3>
            <time class="c-info__date"><?php the_time("Y/m/j G:i"); ?></time>
            <p class="c-info__desc"><?php the_content(); ?></p>
        </div>
    <?php endwhile;
            else :?>
        <div class="post">
            <h2>記事はありません</h2>
            <p>お探しの記事は見つかりませんでした。</p>
        </div>
    <?php endif; ?>

</div>

<div class="l-section">
    <?php
        $category_id = get_cat_ID( 'contents' );
        $category_link = get_category_link( $category_id );
    ?>
    <a href="<?php echo esc_url( $category_link ); ?>" class="c-btn">コンテンツ一覧へ</a>
</div>

<?php get_footer(); ?>