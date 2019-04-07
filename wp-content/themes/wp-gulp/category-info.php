<?php get_header(); ?>

<?php get_template_part('gnav'); ?>

<div class="c-heading c-heading--mt">
    <h2 class="c-heading__title">お知らせ一覧</h2>
</div>

<?php $args = array(
    'numberposts' => 10,
    'post_type' => 'info'
);
$posts = get_posts( $args );
?>
<div class="l-section c-list">
    <div class="c-list__items">
        <?php get_template_part('loop-info'); ?>
    </div>
</div>

<?php get_footer(); ?>