
<?php get_header(); ?>

    <main class="-index">
      <div class="l-n-fv js-n-fv">
        <div class="l-n-inner -wide">
          <div class="p-n-swiper js-n-swiper u-n-prefab l-n-fv__swiper" data-width="1920,375" data-margin="0,0" data-options="notAllowTouchMove | fade" data-delay="4000" data-speed="2000">
            <div class="-swiper-inner">
              <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <picture class="c-n-image u-n-fv-slide">
                      <source media="(min-width: 751px)" srcset="./assets/img/index/fv_slide01.webp 1x, ./assets/img/index/fv_slide01@2x.webp 2x" width="1920" height="900"><img src="./assets/img/index/fv_slide01_sp.webp" srcset="./assets/img/index/fv_slide01_sp.webp 1x, ./assets/img/index/fv_slide01_sp@2x.webp 2x" width="375" height="667" alt="スライド" fetchpriority="high">
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture class="c-n-image u-n-fv-slide">
                      <source media="(min-width: 751px)" srcset="./assets/img/index/fv_slide02.webp 1x, ./assets/img/index/fv_slide02@2x.webp 2x" width="1920" height="900"><img src="./assets/img/index/fv_slide02_sp.webp" srcset="./assets/img/index/fv_slide02_sp.webp 1x, ./assets/img/index/fv_slide02_sp@2x.webp 2x" width="375" height="667" alt="スライド" fetchpriority="high">
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture class="c-n-image u-n-fv-slide">
                      <source media="(min-width: 751px)" srcset="./assets/img/index/fv_slide03.webp 1x, ./assets/img/index/fv_slide03@2x.webp 2x" width="1920" height="900"><img src="./assets/img/index/fv_slide03_sp.webp" srcset="./assets/img/index/fv_slide03_sp.webp 1x, ./assets/img/index/fv_slide03_sp@2x.webp 2x" width="375" height="667" alt="スライド" fetchpriority="high">
                    </picture>
                  </div>
                </div>
                <div class="swiper-button-prev c-n-arrow01 -arrow-left"></div>
                <div class="swiper-button-next c-n-arrow01 -arrow-right"></div>
              </div>
            </div>
          </div>
          <div class="l-n-fv__foreground">
            <div class="u-n-fv-decoration"></div>
            <div class="p-n-index-head">
              <h2 class="u-n-fv-title">精度で､応える</h2>
              <p class="u-n-fv-text c-n-ShareTech">Precision is Our Answer</p>
            </div>

<?php
$news_query = NewsController::latest();
get_template_part( 'parts/news', 'index', [ 'query' => $news_query ] );
?>

          </div>
        </div>
      </div>
      <div class="l-n-about" id="about">
        <div class="u-n-about-bg l-n-inner is-n-hide">
          <div class="l-n-about__main"><span class="u-n-about-en c-n-en c-n-ShareTech">About us</span>
            <h2 class="u-n-about-title">電子機器製造の高度な要求を<br>技術と経験で支える</h2>
            <p class="u-n-about-text">さまざまな機器が高度に微細化する中、電子機器製造にはこれまで以上の精度とクオリティが求められています。当社は、これまで培ってきた高精度なものづくりの技術と経験を活かし、確かなクオリティ、安心・安全をお届けするとともに、お客様の期待を超える価値を創造してまいります。</p>
            <button class="p-n-index-button c-n-button" data-href="<?php echo esc_url( get_page_url( 'company' ) ); ?>"><span>会社概要</span><span class="-arrow c-n-button-arrow"><span></span></span></button>
          </div>
          <div class="p-n-swiper js-n-swiper u-n-prefab l-n-about__swiper" data-width="1920,375" data-margin="0,0" data-options="notAllowTouchMove | cube" data-delay="3000" data-speed="1000">
            <div class="-swiper-inner">
              <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <picture class="c-n-image u-n-about-slide">
                      <source media="(min-width: 751px)" srcset="./assets/img/index/about_slide01.webp 1x, ./assets/img/index/about_slide01@2x.webp 2x" width="590" height="365"><img src="./assets/img/index/about_slide01_sp.webp" srcset="./assets/img/index/about_slide01_sp.webp 1x, ./assets/img/index/about_slide01_sp@2x.webp 2x" width="295" height="183" alt="スライド" fetchpriority="high">
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture class="c-n-image u-n-about-slide">
                      <source media="(min-width: 751px)" srcset="./assets/img/index/about_slide02.webp 1x, ./assets/img/index/about_slide02@2x.webp 2x" width="590" height="365"><img src="./assets/img/index/about_slide02_sp.webp" srcset="./assets/img/index/about_slide02_sp.webp 1x, ./assets/img/index/about_slide02_sp@2x.webp 2x" width="295" height="183" alt="スライド" fetchpriority="high">
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture class="c-n-image u-n-about-slide">
                      <source media="(min-width: 751px)" srcset="./assets/img/index/about_slide03.webp 1x, ./assets/img/index/about_slide03@2x.webp 2x" width="590" height="365"><img src="./assets/img/index/about_slide03_sp.webp" srcset="./assets/img/index/about_slide03_sp.webp 1x, ./assets/img/index/about_slide03_sp@2x.webp 2x" width="296" height="183" alt="スライド" fetchpriority="high">
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture class="c-n-image u-n-about-slide">
                      <source media="(min-width: 751px)" srcset="./assets/img/index/about_slide04.webp 1x, ./assets/img/index/about_slide04@2x.webp 2x" width="590" height="365"><img src="./assets/img/index/about_slide04_sp.webp" srcset="./assets/img/index/about_slide04_sp.webp 1x, ./assets/img/index/about_slide04_sp@2x.webp 2x" width="295" height="183" alt="スライド" fetchpriority="high">
                    </picture>
                  </div>
                </div>
                <div class="swiper-button-prev c-n-arrow01 -arrow-left"></div>
                <div class="swiper-button-next c-n-arrow01 -arrow-right"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="l-n-products" id="products">
        <div class="l-n-inner"><span class="u-n-products-en c-n-en c-n-ShareTech">Products</span>
          <h2 class="u-n-products-title">製品紹介</h2>
          <div class="l-n-products__card"><a class="p-n-index-card is-n-hide -fade-in-up" href="<?php echo esc_url( get_page_url( 'products', '#electronic' ) ); ?>">
              <picture class="c-n-image u-n-products-thumb">
                <source media="(min-width: 751px)" srcset="./assets/img/index/products_thumb01.webp 1x, ./assets/img/index/products_thumb01@2x.webp 2x" width="360" height="220"><img src="./assets/img/index/products_thumb01_sp.webp" srcset="./assets/img/index/products_thumb01_sp.webp 1x, ./assets/img/index/products_thumb01_sp@2x.webp 2x" width="137" height="90" alt="サムネイル" loading="lazy">
              </picture><span class="u-n-products-card-en c-n-ShareTech">Electronic Components</span>
              <h3 class="u-n-products-card-title">電子部品</h3><span class="p-n-index-card-button"><span>詳細を見る</span><span class="-arrow c-n-button-arrow"><span></span></span></span></a><a class="p-n-index-card is-n-hide -fade-chain01 -fade-delay01 -fade-in-up" href="<?php echo esc_url( get_page_url( 'products', '#screws' ) ); ?>">
              <picture class="c-n-image u-n-products-thumb">
                <source media="(min-width: 751px)" srcset="./assets/img/index/products_thumb02.webp 1x, ./assets/img/index/products_thumb02@2x.webp 2x" width="360" height="220"><img src="./assets/img/index/products_thumb02_sp.webp" srcset="./assets/img/index/products_thumb02_sp.webp 1x, ./assets/img/index/products_thumb02_sp@2x.webp 2x" width="137" height="90" alt="サムネイル" loading="lazy">
              </picture><span class="u-n-products-card-en c-n-ShareTech">Screws</span>
              <h3 class="u-n-products-card-title">ネジ類</h3><span class="p-n-index-card-button"><span>詳細を見る</span><span class="-arrow c-n-button-arrow"><span></span></span></span></a><a class="p-n-index-card is-n-hide -fade-chain01 -fade-delay02 -fade-in-up" href="<?php echo esc_url( get_page_url( 'products', '#springs' ) ); ?>">
              <picture class="c-n-image u-n-products-thumb">
                <source media="(min-width: 751px)" srcset="./assets/img/index/products_thumb03.webp 1x, ./assets/img/index/products_thumb03@2x.webp 2x" width="360" height="220"><img src="./assets/img/index/products_thumb03_sp.webp" srcset="./assets/img/index/products_thumb03_sp.webp 1x, ./assets/img/index/products_thumb03_sp@2x.webp 2x" width="137" height="90" alt="サムネイル" loading="lazy">
              </picture><span class="u-n-products-card-en c-n-ShareTech">Springs</span>
              <h3 class="u-n-products-card-title">バネ類</h3><span class="p-n-index-card-button"><span>詳細を見る</span><span class="-arrow c-n-button-arrow"><span></span></span></span></a><a class="p-n-index-card is-n-hide -fade-chain01 -fade-delay03 -fade-in-up" href="<?php echo esc_url( get_page_url( 'products', '#gears' ) ); ?>">
              <picture class="c-n-image u-n-products-thumb">
                <source media="(min-width: 751px)" srcset="./assets/img/index/products_thumb04.webp 1x, ./assets/img/index/products_thumb04@2x.webp 2x" width="360" height="220"><img src="./assets/img/index/products_thumb04_sp.webp" srcset="./assets/img/index/products_thumb04_sp.webp 1x, ./assets/img/index/products_thumb04_sp@2x.webp 2x" width="137" height="90" alt="サムネイル" loading="lazy">
              </picture><span class="u-n-products-card-en c-n-ShareTech">Gears</span>
              <h3 class="u-n-products-card-title">ギア類</h3><span class="p-n-index-card-button"><span>詳細を見る</span><span class="-arrow c-n-button-arrow"><span></span></span></span></a><a class="p-n-index-card is-n-hide -fade-chain01 -fade-delay04 -fade-in-up" href="<?php echo esc_url( get_page_url( 'products', '#medical' ) ); ?>">
              <picture class="c-n-image u-n-products-thumb">
                <source media="(min-width: 751px)" srcset="./assets/img/index/products_thumb05.webp 1x, ./assets/img/index/products_thumb05@2x.webp 2x" width="360" height="220"><img src="./assets/img/index/products_thumb05_sp.webp" srcset="./assets/img/index/products_thumb05_sp.webp 1x, ./assets/img/index/products_thumb05_sp@2x.webp 2x" width="137" height="90" alt="サムネイル" loading="lazy">
              </picture><span class="u-n-products-card-en c-n-ShareTech">Medical Device</span>
              <h3 class="u-n-products-card-title">医療機器</h3><span class="p-n-index-card-button"><span>詳細を見る</span><span class="-arrow c-n-button-arrow"><span></span></span></span></a><a class="p-n-index-card is-n-hide -fade-chain01 -fade-delay05 -fade-in-up" href="<?php echo esc_url( get_page_url( 'products', '#industrial' ) ); ?>">
              <picture class="c-n-image u-n-products-thumb">
                <source media="(min-width: 751px)" srcset="./assets/img/index/products_thumb06.webp 1x, ./assets/img/index/products_thumb06@2x.webp 2x" width="360" height="220"><img src="./assets/img/index/products_thumb06_sp.webp" srcset="./assets/img/index/products_thumb06_sp.webp 1x, ./assets/img/index/products_thumb06_sp@2x.webp 2x" width="137" height="90" alt="サムネイル" loading="lazy">
              </picture><span class="u-n-products-card-en c-n-ShareTech">Industrial Device</span>
              <h3 class="u-n-products-card-title">工業用機械</h3><span class="p-n-index-card-button"><span>詳細を見る</span><span class="-arrow c-n-button-arrow"><span></span></span></span></a>
          </div>
        </div>
      </div>
      <div class="u-n-feature-bg l-n-feature" id="feature">
        <div class="l-n-inner">
          <div class="l-n-feature__main"><span class="u-n-feature-en c-n-en c-n-ShareTech">Feature</span>
            <h2 class="u-n-feature-title">技術を､世界へ</h2>
            <p class="u-n-feature-text">私たちが輸出するのは、単なる製品やサービスではありません。<br>それは、エンジニアが磨き続けてきた高度な技術力そのものです。私たちは世界に挑み、グローバルな社会が抱える困難を乗り越えることで、持続可能な社会の実現に貢献し、技術の革新を成し遂げ、価値ある社会を支え続けます。</p>
            <button class="p-n-index-button c-n-button" data-href="<?php echo esc_url( get_page_url( 'company', '#sustainable' ) ); ?>"><span>社会貢献活動</span><span class="-arrow c-n-button-arrow"><span></span></span></button>
          </div>
          <div class="l-n-feature__images">
            <picture class="c-n-image u-n-feature-picture01 is-n-hide -fade-rotate-y">
              <source media="(min-width: 751px)" srcset="./assets/img/index/feature_picture01.webp 1x, ./assets/img/index/feature_picture01@2x.webp 2x" width="236" height="754"><img src="./assets/img/index/feature_picture01_sp.webp" srcset="./assets/img/index/feature_picture01_sp.webp 1x, ./assets/img/index/feature_picture01_sp@2x.webp 2x" width="110" height="351" alt="人物写真" loading="lazy">
            </picture>
            <picture class="c-n-image u-n-feature-picture02 is-n-hide -fade-rotate-y -fade-delay01">
              <source media="(min-width: 751px)" srcset="./assets/img/index/feature_picture02.webp 1x, ./assets/img/index/feature_picture02@2x.webp 2x" width="236" height="754"><img src="./assets/img/index/feature_picture02_sp.webp" srcset="./assets/img/index/feature_picture02_sp.webp 1x, ./assets/img/index/feature_picture02_sp@2x.webp 2x" width="110" height="360" alt="人物写真" loading="lazy">
            </picture>
            <picture class="c-n-image u-n-feature-picture03 is-n-hide -fade-rotate-y -fade-delay02">
              <source media="(min-width: 751px)" srcset="./assets/img/index/feature_picture03.webp 1x, ./assets/img/index/feature_picture03@2x.webp 2x" width="236" height="754"><img src="./assets/img/index/feature_picture03_sp.webp" srcset="./assets/img/index/feature_picture03_sp.webp 1x, ./assets/img/index/feature_picture03_sp@2x.webp 2x" width="110" height="360" alt="人物写真" loading="lazy">
            </picture>
          </div>
        </div>
      </div>
      <div class="l-n-recruit -opacity" id="recruit">
        <div class="l-n-inner -wide"><a class="l-n-recruit__link" href="<?php echo esc_url( get_page_url( 'recruit' ) ); ?>">
            <div class="p-n-index-recruit"><span class="u-n-recruit-en c-n-en c-n-ShareTech">Recruit</span>
              <h2 class="u-n-recruit-title">採用情報</h2><img class="u-n-recruit-arrow" src="./assets/img/index/recruit_arrow.svg" width="100" height="100" alt="" loading="lazy">
            </div></a>
        </div>
      </div>
    </main>

<?php get_footer(); ?>
