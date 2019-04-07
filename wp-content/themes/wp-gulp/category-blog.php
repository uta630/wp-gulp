<?php get_header(); ?>

<?php get_template_part('gnav'); ?>

<div class="c-heading c-heading--mt">
    <h2 class="c-heading__title">コンテンツ一覧</h2>
</div>

<div class="l-section c-card">
    <div class="c-card__items">
        <?php get_template_part('loop'); ?>
    </div>
</div>

<?php get_footer(); ?>