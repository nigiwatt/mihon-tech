
<?php

// For company page
if ( !empty( $args[ 'query' ]->posts ) ) {

    $news_list = [];
    foreach ( $args[ 'query' ]->posts as $post ) {

        $news_list[] = new News( $post->ID );
    }

// For archive page
} else if ( isset( $args[ 'news' ] ) ) {

    $news_list = [];
    foreach ( $args[ 'news' ] as $post_id ) {

        $news_list[] = new News( $post_id );
    }
}

if ( $news_list ) :
    foreach ( $news_list as $news ) :
?>

<a class="p-n-news-list" href="<?php echo esc_url( $news->permalink() ); ?>">
  <ul>
    <li class="-title c-n-ShareTech"><time datetime="<?php echo esc_attr( $news->date( 'Y-m-d' ) ); ?>"><?php echo esc_html( $news->date( 'Y.m.d' ) ); ?></time></li>
    <li class="-cat"><span><?php echo esc_html( $news->cat ); ?></span></li>
    <li class="-data"><?php echo esc_html( $news->title ); ?></li>
  </ul>
</a>

<?php
    endforeach;
else :
?>

<h3 class="-h3" style="text-align:center;">まだ、記事が投稿されていません。</h3>

<?php endif; ?>
