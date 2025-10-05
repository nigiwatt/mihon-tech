
<?php
$items = get_breadcrumb_items();

if ( ! empty( $items ) ) :
?>

<nav class="p-n-breadcrumb" aria-label="<?php echo __( 'breadcrumbs', 'roundabout' ); ?>'">
  <ol class="-list" itemscope itemtype="https://schema.org/BreadcrumbList">

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

<?php endif; ?>
