
<?php
if ( !empty( $args[ 'query' ]->posts ) ) :
    foreach ( $args[ 'query' ]->posts as $post ) :
        $news = new News( $post->ID );
?>

<a class="p-n-index-news" href="<?php echo esc_url( $news->permalink() ); ?>">
  <div class="-headline">
    <img class="u-n-fv-icon" src="./assets/img/index/fv_icon.svg" width="24" height="24" alt="" fetchpriority="high">
    <time class="u-n-fv-news-date c-n-ShareTech" datetime="<?php echo esc_attr( $news->date( 'Y-m-d' ) ); ?>"><?php echo esc_html( $news->date( 'Y.m.d' ) ); ?></time>
    <h2 class="u-n-fv-news-title"><?php echo esc_html( $news->title ); ?></h2>
  </div>
  <div class="-arrow c-n-button-arrow"><span></span></div>
</a>

<?php
    endforeach;
endif;
?>
