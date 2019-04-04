<?php
/*
Template Name: Information 〜インフィオメーション〜
*/
?>

<?php get_header(); ?>

<?php get_template_part('gnav'); ?>

<div class="c-heading c-heading--mt">
    <h3 class="c-heading__title"><?php echo get_the_title(); ?></h3>
</div>

<div class="l-section c-info">
    <?php if(have_posts()) :
            while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('c-info__item'); ?>>
            <h3 class="c-info__title"><?php the_title(); ?></h3>
            <time class="c-info__date"><?php the_time("Y/m/j G:i"); ?></time>
            <p class="c-info__desc"><?php the_excerpt(); ?></p>
        </div>
    <?php endwhile;
            else :?>
        <div class="post">
            <h2>記事はありません</h2>
            <p>お探しの記事は見つかりませんでした。</p>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>