
<?php

// For single page
if ( isset( $args[ 'news' ] ) ) {

    $news_list = [];
    foreach ( $args[ 'news' ] as $post_id ) {

        $news_list[] = new News( $post_id );
    }
}

foreach ( $news_list as $news ) :
?>

<article class="p-n-article">
  <header>
    <div class="-meta">
      <h1><?php echo esc_html( $news->title ); ?></h1>
      <time class="-date" datetime="<?php echo esc_attr( $news->date( 'Y-m-d' ) ); ?>">
        <img class="-clock" src="./assets/img/common/article_clock.svg" width="640" height="640" alt="">
        <?php echo esc_html( $news->date( 'Y.m.d' ) ); ?>
      </time>
      <div class="-cat">
        <img class="-tag" src="./assets/img/common/article_tag.svg" width="640" height="640" alt="">
        <?php echo esc_html( $news->cat ); ?>
      </div>
    </div>
  </header>
  <div class="-content">
    <?php echo $news->content; ?>
  </div>
</article>

<?php endforeach; ?>
