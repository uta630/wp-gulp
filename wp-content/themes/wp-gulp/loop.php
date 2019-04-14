<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
    <a href="<?php the_permalink(); ?>" class="c-card__item" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
        <span class="c-card__item-inner"><?php the_title(); ?></span>
    </a>
<?php endwhile;
    else :?>
    <p class="c-card__item">お探しの記事は見つかりませんでした。</p>
<?php endif; ?>