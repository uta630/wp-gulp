<?php get_header(); ?>

<div class="l-hero c-hero" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg.jpg)">
    <div class="c-hero__heading">
        <h1 class="c-hero__title">SITE TITLE</h1>
    </div>

    <p class="c-hero__desc">This is description area.</p>
</div>

<?php get_template_part('gnav'); ?>

<div class="l-section c-heading">
    <h3 class="c-heading__title">このサイトについて</h3>
    <p class="c-heading__desc">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
</div>

<div class="l-section c-card">
    <div class="c-card__items">
        <a href="/card.php" class="c-card__item">This is Card area.</a>
        <a href="/card.php" class="c-card__item">This is Card area.</a>
        <a href="/card.php" class="c-card__item">This is Card area.</a>
        <a href="/card.php" class="c-card__item">This is Card area.</a>
        <a href="/card.php" class="c-card__item">This is Card area.</a>
        <a href="/card.php" class="c-card__item">This is Card area.</a>
    </div>
</div>

<div class="l-section c-heading">
    <h3 class="c-heading__title">Information</h3>
</div>

<div class="l-section c-list">

    <div class="c-list__items">
        <a href="/information.php" class="c-list__item">List area 1.</a>
        <a href="/information.php" class="c-list__item">List area 2.</a>
        <a href="/information.php" class="c-list__item">List area 3.</a>
    </div>
</div>

<div class="c-panel">
    <a href="/panel.php" class="c-panel__item">This is Panel area.</a>
    <a href="/panel.php" class="c-panel__item">This is Panel area.</a>
    <a href="/panel.php" class="c-panel__item">This is Panel area.</a>
    <a href="/panel.php" class="c-panel__item c-panel__item--sub">This is Panel area.</a>
    <a href="/panel.php" class="c-panel__item c-panel__item--sub">This is Panel area.</a>
</div>

<?php get_footer(); ?>