<?php get_header(); ?>

<div class="l-catch c-catch">
    <h1 class="c-catch__title">コンテンツについて</h1>
</div>

<?php get_template_part('gnav'); ?>

<div class="l-section c-heading">
    <h3 class="c-heading__title">コンテンツについて</h3>
    <p class="c-heading__desc">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
</div>

<div class="l-section">
    <?php if(have_posts()) :
            while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('c-article'); ?>>
            <div class="c-article__image">
                <img src="http://satyr.io/640x320" alt="" class="c-article__thumb">
            </div>
            
            <div class="c-article__detail">
                <h4 class="c-article__title"><?php the_title(); ?></h4>
                <p class="c-article__desc"><?php the_content(); ?></p>
            </div>
        </div>
    <?php endwhile;
            else :?>
        <div class="post">
            <h2>記事はありません</h2>
            <p>お探しの記事は見つかりませんでした。</p>
        </div>
    <?php endif; ?>
</div>

<div class="c-panel">
    <a href="/panel.php" class="c-panel__item">This is Panel area.</a>
    <a href="/panel.php" class="c-panel__item">This is Panel area.</a>
    <a href="/panel.php" class="c-panel__item">This is Panel area.</a>
    <a href="/panel.php" class="c-panel__item c-panel__item--sub">This is Panel area.</a>
    <a href="/panel.php" class="c-panel__item c-panel__item--sub">This is Panel area.</a>
</div>

<?php get_footer(); ?>