
<?php
$items = get_breadcrumb_items();

if ( !empty( $items ) ) :

    // Get option
    $structured_data = get_option( 'structured_data' );

    if ( in_array( 'activate', $structured_data, true ) ) :
?>

<nav class="p-n-breadcrumb" aria-label="<?php echo __( 'breadcrumbs', 'roundabout' ); ?>">
  <ol class="-list" itemscope itemtype="https://schema.org/BreadcrumbList">
    <meta itemprop="name" content="<?php echo __( 'breadcrumbs', 'roundabout' ); ?>">
    <?php foreach ( $items as $item ) : ?>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <?php if ( $item[ 'url' ] ) : ?>
          <a href="<?php echo esc_url( $item[ 'url' ] ); ?>" class="-underline" itemprop="item">
        <?php endif; ?>
            <span itemprop="name"><?php echo esc_html( $item[ 'label' ] ); ?></span>
        <?php if ( $item[ 'url' ] ) : ?>
          </a>
        <?php endif; ?>
        <meta itemprop="position" content="<?php echo esc_attr( $item[ 'position' ] ); ?>" />
      </li>
    <?php endforeach; ?>
  </ol>
</nav>

<?php else : ?>

<nav class="p-n-breadcrumb" aria-label="<?php echo __( 'breadcrumbs', 'roundabout' ); ?>">
  <ol class="-list">
    <?php foreach ( $items as $item ) : ?>
      <li>
        <?php if ( $item[ 'url' ] ) : ?>
          <a href="<?php echo esc_url( $item[ 'url' ] ); ?>" class="-underline">
        <?php endif; ?>
            <span><?php echo esc_html( $item[ 'label' ] ); ?></span>
        <?php if ( $item[ 'url' ] ) : ?>
          </a>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ol>
</nav>

<?php
    endif;
endif;
?>
