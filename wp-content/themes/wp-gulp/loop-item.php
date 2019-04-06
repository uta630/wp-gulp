<?php $args = array(
    'numberposts' => 12, //表示（取得）する記事の数
    'post_type' => 'item' //投稿タイプの指定
);
$posts = get_posts( $args );
if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
    <a href="<?php the_permalink(); ?>" class="c-panel__item"><?php the_title(); ?></a>
    <?php the_post_thumbnail(); ?>
    <?php endforeach; ?>
    <?php else : //記事が無い場合 ?>
    <p class="c-panel__item">アイテムはまだありません。</p>
<?php endif; ?>