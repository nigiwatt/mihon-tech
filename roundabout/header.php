
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Metadata -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="format-detection" content="telephone=no, email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BaseURL -->
    <base href="<?php echo get_template_directory_uri() . '/'; ?>">
    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="anonymous">
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="-header js-n-header">
      <div class="l-n-header">
        <div class="l-n-inner -wide">
          <div class="l-n-header__left"><a class="p-n-header-logo -opacity" href="<?php echo esc_url( get_page_url( 'index' ) ); ?>"><img class="u-n-header-logo" src="./assets/img/common/header_logo.svg" width="100" height="76" alt="Mihon Tech" fetchpriority="high"></a>
          </div>
          <div class="l-n-header__center">
            <?php
              wp_nav_menu([
                  'menu' => 'header',
                  'container' => 'nav',
                  'menu_class' => 'p-n-header-menu',
              ]);
            ?>
          </div>
          <div class="l-n-header__right"><a class="p-n-header-tel -opacity" href="<?php echo esc_url( get_page_url( 'contact' ) ); ?>">
              <figure class="c-n-image u-n-header-tel"><img src="./assets/img/common/header_tel.svg" width="48" height="48" alt="電話" fetchpriority="high">
                <figcaption class="u-n-header-tel-label">お問い合わせ</figcaption>
              </figure></a>
            <div class="p-n-menu p-n-menu--header">
              <dialog class="p-n-menu-noresponsive01 -menu-bottom u-n-prefab">
                <label class="c-n-input-menu01 -menu-check">
                  <input class="-input-form" type="checkbox" id="js-n-opener" aria-label="メニューを開く"><span class="-input-label" data-open="Menu" data-close="Close"></span>
                </label>
                <div class="-menu-modal js-n-menu">
                  <label class="-menu-blind" for="js-n-opener"></label>
                  <div class="-menu-frame">
                    <div class="-menu-content">
                      <div class="l-n-inner -inner">
                        <div class="-left"><a class="-link -opacity" href="<?php echo esc_url( get_page_url( 'index' ) ); ?>"><img class="-logo" src="./assets/img/common/header_logo.svg" width="100" height="76" alt="Mihon Tech" fetchpriority="high">
                            <h2 class="-title">ミホン・テック株式会社</h2></a>
                          <?php
                            wp_nav_menu([
                                'menu' => 'common-top',
                                'container' => 'nav',
                                'menu_class' => 'p-n-common-menu-top',
                            ]);
                          ?>
                          <div class="-sns"><a class="-opacity" href="https://x.com/nigiwatt/" target="_blank"><img class="-sns01" src="./assets/img/common/header_sns01.svg" width="60" height="60" alt="X" loading="lazy"></a><a class="-opacity" href="https://www.facebook.com/nigiwatt/" target="_blank"><img class="-sns02" src="./assets/img/common/header_sns02.svg" width="60" height="60" alt="Facebook" loading="lazy"></a>
                          </div>
                        </div>
                        <div class="-right">
                          <?php
                            wp_nav_menu([
                                'menu' => 'common_menu',
                                'container' => 'nav',
                                'menu_class' => 'p-n-common-menu p-n-common-menu--header',
                            ]);
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </dialog>
            </div>
          </div>
        </div>
      </div>
    </header>
