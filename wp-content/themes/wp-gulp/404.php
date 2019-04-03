<?php get_header(); ?>

<?php get_template_part('gnav'); ?>

<div class="c-heading c-heading--mt">
    <h3 class="c-heading__title">404 not found</h3>
</div>

<div class="l-section c-alert">
    <div class="c-alert__item">
        <h3 class="c-alert__title">ページが見つかりません。</h3>

        <p class="c-alert__desc">
            あなたがアクセスしようとしたページは<br>
            削除されたかURLが変更されているため、<br>
            見つけることができませんでした。
        </p>

        <p class="c-alert__bottom"><a class="c-alert__return" href="<?php echo home_url(); ?>">トップページへ戻る</a></p>
    </div>
</div>

<?php get_footer(); ?>