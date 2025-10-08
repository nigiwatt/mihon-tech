
<?php

// For single page
if ( isset( $args[ 'news' ] ) ) {

    $news_list = [];
    foreach ( $args[ 'news' ] as $post_id ) {

        $news_list[] = new News( $post_id );
    }
}

// Get option
$structured_data = get_option( 'structured_data' );

foreach ( $news_list as $news ) :

    if ( in_array( 'activate', $structured_data, true ) ) :
?>

<article class="p-n-article" itemscope itemtype="https://schema.org/NewsArticle">
  <header>
    <div class="-meta">
      <h1 itemprop="headline"><?php echo esc_html( $news->title ); ?></h1>
      <time class="-date"
            itemprop="datePublished"
            datetime="<?php echo esc_attr( $news->date( 'c' ) ); ?>">
        <img class="-clock" src="./assets/img/common/article_clock.svg" width="640" height="640" alt="">
        <?php echo esc_html( $news->date( 'Y.m.d' ) ); ?>
      </time>

      <div class="-cat" itemprop="articleSection">
        <img class="-tag" src="./assets/img/common/article_tag.svg" width="640" height="640" alt="">
        <?php echo esc_html( $news->cat ); ?>
      </div>
    </div>
  </header>

  <div class="-content" itemprop="articleBody">
    <?php echo $news->content; ?>
  </div>

  <meta itemprop="mainEntityOfPage" content="<?php echo esc_url( get_permalink() ); ?>">
  <meta itemprop="dateModified" content="<?php echo esc_attr( $news->date( 'c' ) ); ?>">
  <meta itemprop="url" content="<?php echo esc_url( get_permalink() ); ?>">

  <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization" hidden>
    <meta itemprop="name" content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
    <?php if ( get_theme_mod( 'custom_logo' ) ) : ?>
      <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
        <meta itemprop="url" content="<?php echo esc_url( wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' ) ); ?>">
      </div>
    <?php endif; ?>
  </div>

  <div itemprop="author" itemscope itemtype="https://schema.org/Person" hidden>
    <meta itemprop="name" content="<?php echo esc_attr( $news->author_name ); ?>">
    <meta itemprop="url" content="<?php echo esc_url( $news->author_url ); ?>">
  </div>

<?php
preg_match( '/<img.*?src=["\'](.*?)["\']/', $news->content, $matches );

if ( !empty( $matches[1] ) ) :

    $image_url = $matches[1];
    list( $width, $height ) = getimagesize( ABSPATH . str_replace( home_url( '/' ), '', $image_url ) );
?>
  <div itemprop="image" itemscope itemtype="https://schema.org/ImageObject" hidden>
    <meta itemprop="url" content="<?php echo esc_url( $image_url ); ?>">
    <?php if ( $width && $heigh ) : ?>
      <meta itemprop="width" content="<?php echo esc_attr( $width ); ?>">
      <meta itemprop="height" content="<?php echo esc_attr( $height ); ?>">
    <?php endif; ?>
  </div>
<?php endif; ?>

</article>

<?php else : ?>

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

<?php
    endif;
endforeach;
?>
