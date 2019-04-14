<?php if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
    <a href="<?php the_permalink(); ?>" class="c-list__item" id="post-<?php the_ID(); ?>">
        <?php echo get_the_date(); ?> <?php the_title(); ?>
    </a>
    <?php the_post_thumbnail(); ?>
<?php endforeach; ?>
<?php else : ?>
    <p class="c-list__item" id="post-<?php the_ID(); ?>">
        アイテムはまだありません。
    </p>
<?php endif; ?>