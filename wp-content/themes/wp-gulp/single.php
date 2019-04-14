<?php get_header(); ?>

<?php get_template_part('gnav'); ?>

<div class="c-heading c-heading--mt">
    <h2 class="c-heading__title">この商品について</h2>
</div>

<div class="l-section c-products">
    <?php if(have_posts()) :
            while (have_posts()) : the_post(); ?>
        <div class="c-products__image">
            <?php
                $images = [];
                $images_limit = 3;
                for($i=1; $i <= $images_limit; $i++){
                    array_push($images, get_field( "contents_image".$i ));
                }
            ?>
            <img src="<?php echo $images[0] ; ?>" class="c-products__panel js-pick-panel">

            <?php
                for($i=1; $i <= $images_limit; $i++){
                    $active = $i !== 1 ?: 'is-active' ;
                    if($images[($i-1)]){
                        echo '<img src="'.$images[($i-1)].'" class="c-products__thumb js-pick-thumb '.$active.'">';
                    }
                }
            ?>
        </div>

        <div class="c-products__detail">
            <h3 class="c-products__title"><?php the_title(); ?></h3>
            <p class="c-products__desc"><?php the_content(); ?></p>
        </div>
    <?php endwhile;
            else :?>
        <div class="post">
            <h3 class="c-products__title">記事はありません</h2>
            <p class="c-products__desc">お探しの記事は見つかりませんでした。</p>
        </div>
    <?php endif; ?>
</div>

<div class="l-section">
    <a href="<?php echo get_post_cat_link('コンテンツ') ?>" class="c-btn">コンテンツ一覧へ</a>
</div>

<?php get_footer(); ?>