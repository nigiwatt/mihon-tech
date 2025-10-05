
<?php get_header(); ?>

    <main class="-products">
      <div class="l-n-fv">
        <div class="l-n-inner -wide js-n-fv">
          <div class="l-n-fv__main c-n-view">
            <h1>製品紹介</h1>
          </div>
        </div>
        <div class="l-n-inner">

<?php get_template_part( 'parts/breadcrumbs' ); ?>

        </div>
        <div class="l-n-inner">
          <ul class="u-n-fv-list c-n-submenu">
            <li class="-opacity"><a href="<?php echo esc_url( get_page_url( 'products', '#electronic' ) ); ?>">電子部品</a>
            </li>
            <li class="-opacity"><a href="<?php echo esc_url( get_page_url( 'products', '#screws' ) ); ?>">ネジ類</a>
            </li>
            <li class="-opacity"><a href="<?php echo esc_url( get_page_url( 'products', '#springs' ) ); ?>">バネ類</a>
            </li>
            <li class="-opacity"><a href="<?php echo esc_url( get_page_url( 'products', '#gears' ) ); ?>">ギア類</a>
            </li>
            <li class="-opacity"><a href="<?php echo esc_url( get_page_url( 'products', '#medical' ) ); ?>">医療機器</a>
            </li>
            <li class="-opacity"><a href="<?php echo esc_url( get_page_url( 'products', '#industrial' ) ); ?>">工業用機械</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="l-n-products">
        <div class="l-n-inner">
          <div class="p-n-products-card" id="electronic">
            <div class="-description is-n-hide -fade-chain01"><span class="u-n-products-en c-n-head c-n-ShareTech">Electronic Components</span>
              <h2 class="u-n-products-title"><span class="c-n-text-anim js-n-text-anim is-n-hide -fade-chain01">電子部品</span></h2>
              <p class="u-n-products-text">プリント基板や集積回路、スイッチなど、各種電子部品を製造しています。近年では、電気自動車の普及やIoT・AI技術の進展に伴い、特にチップ部品を中心とした電子部品の需要が世界的に高まっています。こうした動きに対応するため、当社では製造プロセスの改善とともに、生産ラインの拡充を段階的に進めています。</p>
            </div>
            <picture class="c-n-image u-n-products-image is-n-hide -fade-chain01 -fade-delay03">
              <source media="(min-width: 751px)" srcset="./assets/img/products/products_image01.webp 1x, ./assets/img/products/products_image01@2x.webp 2x" width="600" height="366"><img src="./assets/img/products/products_image01_sp.webp" srcset="./assets/img/products/products_image01_sp.webp 1x, ./assets/img/products/products_image01_sp@2x.webp 2x" width="300" height="183" alt="">
            </picture>
          </div>
          <div class="p-n-products-card" id="screws">
            <div class="-description is-n-hide -fade-chain02"><span class="u-n-products-en c-n-head c-n-ShareTech">Screws</span>
              <h2 class="u-n-products-title"><span class="c-n-text-anim js-n-text-anim is-n-hide -fade-chain02">ネジ類</span></h2>
              <p class="u-n-products-text">小型デバイスに使用されるネジから、工業用のボルト・ナットまで、幅広い製品を製造しています。寸法精度・強度・表面状態・耐食性など、多角的な検査を行い、製品品質の確保に努めています。また、日常点検や測定機器の校正、トレーサビリティ管理を徹底することで、不良の発生を未然に防ぎ、高い信頼性を維持しています。</p>
            </div>
            <picture class="c-n-image u-n-products-image is-n-hide -fade-chain02 -fade-delay03">
              <source media="(min-width: 751px)" srcset="./assets/img/products/products_image02.webp 1x, ./assets/img/products/products_image02@2x.webp 2x" width="600" height="366"><img src="./assets/img/products/products_image02_sp.webp" srcset="./assets/img/products/products_image02_sp.webp 1x, ./assets/img/products/products_image02_sp@2x.webp 2x" width="300" height="183" alt="">
            </picture>
          </div>
          <div class="p-n-products-card" id="springs">
            <div class="-description is-n-hide -fade-chain03"><span class="u-n-products-en c-n-head c-n-ShareTech">Springs</span>
              <h2 class="u-n-products-title"><span class="c-n-text-anim js-n-text-anim is-n-hide -fade-chain03">バネ類</span></h2>
              <p class="u-n-products-text">当社は主に産業用スプリングの製造を手がけており、品質マネジメントシステムの国際規格である ISO 9001 を取得し、品質管理体制の強化と製品の信頼性向上に努めています。すべてがオーダーメイドであるため、製品ごとに最適な検査方法を設計し、精度と品質の両立を図っています。</p>
            </div>
            <picture class="c-n-image u-n-products-image is-n-hide -fade-chain03 -fade-delay03">
              <source media="(min-width: 751px)" srcset="./assets/img/products/products_image03.webp 1x, ./assets/img/products/products_image03@2x.webp 2x" width="600" height="366"><img src="./assets/img/products/products_image03_sp.webp" srcset="./assets/img/products/products_image03_sp.webp 1x, ./assets/img/products/products_image03_sp@2x.webp 2x" width="300" height="183" alt="">
            </picture>
          </div>
          <div class="p-n-products-card" id="gears">
            <div class="-description is-n-hide -fade-chain04"><span class="u-n-products-en c-n-head c-n-ShareTech">Gears</span>
              <h2 class="u-n-products-title"><span class="c-n-text-anim js-n-text-anim is-n-hide -fade-chain04">ギア類</span></h2>
              <p class="u-n-products-text">数値制御（NC）による歯車加工機を導入することで、高精度かつ安定した加工を実現しています。当社では、嚙み合い精度に重点を置いており、力の伝達効率を高めると同時に、騒音の抑制にも取り組んでいます。こうした設計や品質管理により、精度と静粛性を兼ね備えた製品を提供し、多くのお客様から高い評価をいただいています。</p>
            </div>
            <picture class="c-n-image u-n-products-image is-n-hide -fade-chain04 -fade-delay03">
              <source media="(min-width: 751px)" srcset="./assets/img/products/products_image04.webp 1x, ./assets/img/products/products_image04@2x.webp 2x" width="600" height="366"><img src="./assets/img/products/products_image04_sp.webp" srcset="./assets/img/products/products_image04_sp.webp 1x, ./assets/img/products/products_image04_sp@2x.webp 2x" width="300" height="183" alt="">
            </picture>
          </div>
          <div class="p-n-products-card" id="medical">
            <div class="-description is-n-hide -fade-chain05"><span class="u-n-products-en c-n-head c-n-ShareTech">Medical Device</span>
              <h2 class="u-n-products-title"><span class="c-n-text-anim js-n-text-anim is-n-hide -fade-chain05">医療機器</span></h2>
              <p class="u-n-products-text">当社では、医療現場で扱いやすく、安全性の高い医療機器を製造しています。病理検査ではミクロ単位の精度が求められたり、機器が24時間365日安定して動くことが前提だったりと、非常に高い性能が求められる分野です。こうした厳しい条件のもとで、私たちはものづくりの強みを活かし、医療を支え、社会に貢献していきます。</p>
            </div>
            <picture class="c-n-image u-n-products-image is-n-hide -fade-chain05 -fade-delay03">
              <source media="(min-width: 751px)" srcset="./assets/img/products/products_image05.webp 1x, ./assets/img/products/products_image05@2x.webp 2x" width="600" height="366"><img src="./assets/img/products/products_image05_sp.webp" srcset="./assets/img/products/products_image05_sp.webp 1x, ./assets/img/products/products_image05_sp@2x.webp 2x" width="300" height="183" alt="">
            </picture>
          </div>
          <div class="p-n-products-card" id="industrial">
            <div class="-description is-n-hide -fade-chain06"><span class="u-n-products-en c-n-head c-n-ShareTech">Industrial Device</span>
              <h2 class="u-n-products-title"><span class="c-n-text-anim js-n-text-anim is-n-hide -fade-chain06">工業用機械</span></h2>
              <p class="u-n-products-text">当社では、ライン製造に特化したロボットをはじめとする工業用機械を手がけています。家電や車両などの製造現場では、ますます高い精度と効率が求められ、作業にはミリ単位の正確さが必要とされています。こうしたものづくりの現場を、私たちは技術の力でしっかりと支え、社会の発展に貢献しています。</p>
            </div>
            <picture class="c-n-image u-n-products-image is-n-hide -fade-chain06 -fade-delay03">
              <source media="(min-width: 751px)" srcset="./assets/img/products/products_image06.webp 1x, ./assets/img/products/products_image06@2x.webp 2x" width="600" height="366"><img src="./assets/img/products/products_image06_sp.webp" srcset="./assets/img/products/products_image06_sp.webp 1x, ./assets/img/products/products_image06_sp@2x.webp 2x" width="300" height="183" alt="">
            </picture>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>
