
<?php get_header(); ?>

    <main class="-company">
      <div class="l-n-fv">
        <div class="l-n-inner -wide js-n-fv">
          <div class="l-n-fv__main c-n-view">
            <h1>会社概要</h1>
          </div>
        </div>
        <div class="l-n-inner">

<?php get_template_part( 'parts/breadcrumbs' ); ?>

        </div>
        <div class="l-n-inner">
          <ul class="u-n-fv-list c-n-submenu">
            <li class="-opacity"><a href="<?php echo esc_url( get_page_url( 'company', '#greeting' ) ); ?>">代表ごあいさつ</a>
            </li>
            <li class="-opacity"><a href="<?php echo esc_url( get_page_url( 'company', '#company' ) ); ?>">会社情報</a>
            </li>
            <li class="-opacity"><a href="<?php echo esc_url( get_page_url( 'company', '#sustainable' ) ); ?>">社会貢献活動</a>
            </li>
            <li class="-opacity"><a href="<?php echo esc_url( get_page_url( 'company', '#history' ) ); ?>">沿革</a>
            </li>
            <li class="-opacity"><a href="<?php echo esc_url( get_page_url( 'company', '#news' ) ); ?>">お知らせ</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="l-n-greeting" id="greeting">
        <div class="l-n-inner">
          <h2 class="u-n-greeting-title c-n-head"><span class="c-n-text-anim js-n-text-anim is-n-hide">代表ごあいさつ</span></h2>
          <div class="l-n-greeting__left">
            <picture class="c-n-image u-n-greeting-image">
              <source media="(min-width: 751px)" srcset="./assets/img/company/greeting_image.webp 1x, ./assets/img/company/greeting_image@2x.webp 2x" width="500" height="600"><img src="./assets/img/company/greeting_image_sp.webp" srcset="./assets/img/company/greeting_image_sp.webp 1x, ./assets/img/company/greeting_image_sp@2x.webp 2x" width="250" height="300" alt="代表取締役">
            </picture>
          </div>
          <p class="u-n-greeting-text">私たちは創業以来、技術への飽くなき探求とクオリティへのこだわりを軸に、ものづくりの現場に誠実に向き合ってまいりました。<br><br>昨今、電子機器をはじめとする産業はグローバル化とともに急速に進化し、かつてない精度や柔軟性が求められています。当社はこうした変化に果敢に挑み、世界中のパートナーとともに、新たな価値を創出し続けています。<br><br>技術は人が育み、人は挑戦によって成長します。当社のエンジニアは、国内外を問わず多くの現場で経験を重ね、高い評価をいただいております。<br><br>これからも私たちは、積み重ねてきた技術力と現場力を武器に、持続可能な社会の実現に貢献しながら、未来につながるものづくりを追求してまいります。<br><br>今後とも変わらぬご支援を賜りますようお願い申し上げます。</p>
          <div class="l-n-greeting__right">
            <picture class="c-n-image u-n-greeting-name">
              <source media="(min-width: 751px)" srcset="./assets/img/company/greeting_name.webp 1x, ./assets/img/company/greeting_name@2x.webp 2x" width="170" height="58"><img src="./assets/img/company/greeting_name_sp.webp" srcset="./assets/img/company/greeting_name_sp.webp 1x, ./assets/img/company/greeting_name_sp@2x.webp 2x" width="102" height="35" alt="見本 一郎">
            </picture>
          </div>
        </div>
      </div>
      <div class="l-n-separate">
        <div class="l-n-inner -wide">
          <picture class="c-n-image u-n-separate-image js-n-separate">
            <source media="(min-width: 751px)" srcset="./assets/img/company/separate_image01.webp 1x, ./assets/img/company/separate_image01@2x.webp 2x" width="1920" height="1080"><img src="./assets/img/company/separate_image01_sp.webp" srcset="./assets/img/company/separate_image01_sp.webp 1x, ./assets/img/company/separate_image01_sp@2x.webp 2x" width="375" height="540" alt="">
          </picture>
        </div>
      </div>
      <div class="l-n-company" id="company">
        <div class="l-n-inner">
          <div class="l-n-company__head">
            <h2 class="u-n-company-title c-n-head"><span class="c-n-text-anim js-n-text-anim is-n-hide">会社情報</span></h2><span class="u-n-company-en c-n-ShareTech">Company</span>
          </div>
          <div class="l-n-company__list">
            <ul class="p-n-company-list">
              <li class="-title">会社名</li>
              <li class="-data">ミホン・テック株式会社</li>
            </ul>
            <ul class="p-n-company-list">
              <li class="-title">所在地</li>
              <li class="-data">〒101-0041　<br class="-only-sp">東京都千代田区神田須田町１丁目７番８号　<br class="-only-sp">VORT秋葉原IV　2F</li>
            </ul>
            <ul class="p-n-company-list">
              <li class="-title">代表者名</li>
              <li class="-data">見本　一郎</li>
            </ul>
            <ul class="p-n-company-list">
              <li class="-title">創業</li>
              <li class="-data">2017年（平成29年）4月</li>
            </ul>
            <ul class="p-n-company-list">
              <li class="-title">資本金</li>
              <li class="-data">¥ 150,000,000</li>
            </ul>
            <ul class="p-n-company-list">
              <li class="-title">営業時間・定休日</li>
              <li class="-data">平日 9:00〜17:00　土日祝定休</li>
            </ul>
            <ul class="p-n-company-list">
              <li class="-title">電話番号</li>
              <li class="-data">電話：03-1234-XXXX　FAX：03-1234-XXXX</li>
            </ul>
            <ul class="p-n-company-list">
              <li class="-title">メールアドレス</li>
              <li class="-data">contact.mihon-tech@example.com</li>
            </ul>
            <ul class="p-n-company-list">
              <li class="-title">事業内容</li>
              <li class="-data">精密部品の製造・加工<br>医療用機器、工業用機械類の製造もしくはメンテナンス</li>
            </ul>
            <ul class="p-n-company-list">
              <li class="-title">従業員数</li>
              <li class="-data">125名</li>
            </ul>
            <ul class="p-n-company-list">
              <li class="-title">許認可</li>
              <li class="-data">医療機器製造販売業許可番号 AABCDEEEEE<br>ISO 9001 / ISO 14001 取得</li>
            </ul>
            <ul class="p-n-company-list">
              <li class="-title">取引先銀行</li>
              <li class="-data">三菱東京UFJ銀行　神田駅前支店<br>りそな銀行　神田支店<br>三井住友銀行　神田駅前支店</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="l-n-sustainable" id="sustainable">
        <div class="l-n-inner -wide">
          <h2 class="u-n-sustainable-title c-n-head"><span class="c-n-text-anim js-n-text-anim is-n-hide">社会貢献活動</span></h2>
          <p class="u-n-sustainable-text">私たちは、国内外を問わず活躍できる<br class="-only-sp">エンジニアの育成に力を注ぎ、<br>社員一丸となって、世界のものづくりを支える<br class="-only-sp">パートナーシップ企業を目指してまいります。</p>
          <ul class="p-n-sustainable-list">
            <li class="is-n-hide -fade-chain01 -fade-in-left -fade-delay01">困難に挑戦するエンジニアの育成</li>
            <li class="is-n-hide -fade-chain01 -fade-in-left -fade-delay02">技術と創造力で、<br class="-only-sp">社会の課題に応えるソリューションを提供</li>
            <li class="is-n-hide -fade-chain01 -fade-in-left -fade-delay03">持続可能な社会の実現に貢献するための<br class="-only-sp">取り組みを推進</li>
          </ul>
          <div class="p-n-swiper js-n-swiper u-n-prefab l-n-sustainable__swiper -swiper-linear" data-width="480,240" data-margin="15,15" data-options="notAllowTouchMovenotAllowTouchMove | linear" data-delay="0" data-speed="5000">
            <div class="-swiper-inner">
              <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <picture class="c-n-image u-n-sustainable-slide">
                      <source media="(min-width: 751px)" srcset="./assets/img/company/sustainable_slide01.webp 1x, ./assets/img/company/sustainable_slide01@2x.webp 2x" width="480" height="320"><img src="./assets/img/company/sustainable_slide01_sp.webp" srcset="./assets/img/company/sustainable_slide01_sp.webp 1x, ./assets/img/company/sustainable_slide01_sp@2x.webp 2x" width="240" height="160" alt="スライド">
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture class="c-n-image u-n-sustainable-slide">
                      <source media="(min-width: 751px)" srcset="./assets/img/company/sustainable_slide02.webp 1x, ./assets/img/company/sustainable_slide02@2x.webp 2x" width="480" height="320"><img src="./assets/img/company/sustainable_slide02_sp.webp" srcset="./assets/img/company/sustainable_slide02_sp.webp 1x, ./assets/img/company/sustainable_slide02_sp@2x.webp 2x" width="240" height="160" alt="スライド">
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture class="c-n-image u-n-sustainable-slide">
                      <source media="(min-width: 751px)" srcset="./assets/img/company/sustainable_slide03.webp 1x, ./assets/img/company/sustainable_slide03@2x.webp 2x" width="480" height="320"><img src="./assets/img/company/sustainable_slide03_sp.webp" srcset="./assets/img/company/sustainable_slide03_sp.webp 1x, ./assets/img/company/sustainable_slide03_sp@2x.webp 2x" width="240" height="160" alt="スライド">
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture class="c-n-image u-n-sustainable-slide">
                      <source media="(min-width: 751px)" srcset="./assets/img/company/sustainable_slide04.webp 1x, ./assets/img/company/sustainable_slide04@2x.webp 2x" width="480" height="320"><img src="./assets/img/company/sustainable_slide04_sp.webp" srcset="./assets/img/company/sustainable_slide04_sp.webp 1x, ./assets/img/company/sustainable_slide04_sp@2x.webp 2x" width="240" height="160" alt="スライド">
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture class="c-n-image u-n-sustainable-slide">
                      <source media="(min-width: 751px)" srcset="./assets/img/company/sustainable_slide05.webp 1x, ./assets/img/company/sustainable_slide05@2x.webp 2x" width="480" height="320"><img src="./assets/img/company/sustainable_slide05_sp.webp" srcset="./assets/img/company/sustainable_slide05_sp.webp 1x, ./assets/img/company/sustainable_slide05_sp@2x.webp 2x" width="240" height="160" alt="スライド">
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture class="c-n-image u-n-sustainable-slide">
                      <source media="(min-width: 751px)" srcset="./assets/img/company/sustainable_slide01.webp 1x, ./assets/img/company/sustainable_slide01@2x.webp 2x" width="480" height="320"><img src="./assets/img/company/sustainable_slide01_sp.webp" srcset="./assets/img/company/sustainable_slide01_sp.webp 1x, ./assets/img/company/sustainable_slide01_sp@2x.webp 2x" width="240" height="160" alt="スライド">
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture class="c-n-image u-n-sustainable-slide">
                      <source media="(min-width: 751px)" srcset="./assets/img/company/sustainable_slide02.webp 1x, ./assets/img/company/sustainable_slide02@2x.webp 2x" width="480" height="320"><img src="./assets/img/company/sustainable_slide02_sp.webp" srcset="./assets/img/company/sustainable_slide02_sp.webp 1x, ./assets/img/company/sustainable_slide02_sp@2x.webp 2x" width="240" height="160" alt="スライド">
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture class="c-n-image u-n-sustainable-slide">
                      <source media="(min-width: 751px)" srcset="./assets/img/company/sustainable_slide03.webp 1x, ./assets/img/company/sustainable_slide03@2x.webp 2x" width="480" height="320"><img src="./assets/img/company/sustainable_slide03_sp.webp" srcset="./assets/img/company/sustainable_slide03_sp.webp 1x, ./assets/img/company/sustainable_slide03_sp@2x.webp 2x" width="240" height="160" alt="スライド">
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture class="c-n-image u-n-sustainable-slide">
                      <source media="(min-width: 751px)" srcset="./assets/img/company/sustainable_slide04.webp 1x, ./assets/img/company/sustainable_slide04@2x.webp 2x" width="480" height="320"><img src="./assets/img/company/sustainable_slide04_sp.webp" srcset="./assets/img/company/sustainable_slide04_sp.webp 1x, ./assets/img/company/sustainable_slide04_sp@2x.webp 2x" width="240" height="160" alt="スライド">
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture class="c-n-image u-n-sustainable-slide">
                      <source media="(min-width: 751px)" srcset="./assets/img/company/sustainable_slide05.webp 1x, ./assets/img/company/sustainable_slide05@2x.webp 2x" width="480" height="320"><img src="./assets/img/company/sustainable_slide05_sp.webp" srcset="./assets/img/company/sustainable_slide05_sp.webp 1x, ./assets/img/company/sustainable_slide05_sp@2x.webp 2x" width="240" height="160" alt="スライド">
                    </picture>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="l-n-history" id="history">
        <div class="l-n-inner">
          <div class="l-n-history__head">
            <h2 class="u-n-history-title c-n-head"><span class="c-n-text-anim js-n-text-anim is-n-hide">沿革</span></h2><span class="u-n-history-en c-n-ShareTech">History</span>
          </div>
          <div class="l-n-history__list">
            <ul class="p-n-history-list is-n-hide -fade-chain02 -fade-delay01">
              <li class="-title c-n-ShareTech">2017</li>
              <li class="-data">創業。NC旋盤を用いた小ロット部品加工を開始</li>
            </ul>
            <ul class="p-n-history-list is-n-hide -fade-chain02 -fade-delay02">
              <li class="-title c-n-ShareTech">2019</li>
              <li class="-data">社屋移転および設備増設により受注体制を強化</li>
            </ul>
            <ul class="p-n-history-list is-n-hide -fade-chain02 -fade-delay03">
              <li class="-title c-n-ShareTech">2022</li>
              <li class="-data">医療機器・工業用機械製造分野へ事業を拡大</li>
            </ul>
            <ul class="p-n-history-list is-n-hide -fade-chain02 -fade-delay04">
              <li class="-title c-n-ShareTech">2023</li>
              <li class="-data">大手メーカーとの取引開始により事業領域を全国へ</li>
            </ul>
            <ul class="p-n-history-list is-n-hide -fade-chain02 -fade-delay05">
              <li class="-title c-n-ShareTech">2024</li>
              <li class="-data">次世代製造人材育成プログラムを社内導入</li>
            </ul>
          </div>
          <div class="l-n-history__images">
            <picture class="c-n-image u-n-history-image">
              <source media="(min-width: 751px)" srcset="./assets/img/company/history_image01.webp 1x, ./assets/img/company/history_image01@2x.webp 2x" width="450" height="280"><img src="./assets/img/company/history_image01_sp.webp" srcset="./assets/img/company/history_image01_sp.webp 1x, ./assets/img/company/history_image01_sp@2x.webp 2x" width="225" height="140" alt="history">
            </picture>
            <picture class="c-n-image u-n-history-image">
              <source media="(min-width: 751px)" srcset="./assets/img/company/history_image02.webp 1x, ./assets/img/company/history_image02@2x.webp 2x" width="450" height="280"><img src="./assets/img/company/history_image02_sp.webp" srcset="./assets/img/company/history_image02_sp.webp 1x, ./assets/img/company/history_image02_sp@2x.webp 2x" width="225" height="140" alt="history">
            </picture>
          </div>
        </div>
      </div>
      <div class="l-n-separate">
        <div class="l-n-inner -wide">
          <picture class="c-n-image u-n-separate-image js-n-separate">
            <source media="(min-width: 751px)" srcset="./assets/img/company/separate_image02.webp 1x, ./assets/img/company/separate_image02@2x.webp 2x" width="1920" height="1080"><img src="./assets/img/company/separate_image02_sp.webp" srcset="./assets/img/company/separate_image02_sp.webp 1x, ./assets/img/company/separate_image02_sp@2x.webp 2x" width="375" height="540" alt="">
          </picture>
        </div>
      </div>
      <div class="l-n-news" id="news">
        <div class="l-n-inner">
          <div class="l-n-news__head">
            <h2 class="u-n-news-title c-n-head"><span class="c-n-text-anim js-n-text-anim is-n-hide">お知らせ</span></h2><span class="u-n-news-en c-n-ShareTech">News</span>
          </div>
          <div class="l-n-news__list">

<?php
$news_query = NewsController::top_archive( 5 );
get_template_part( 'parts/news', 'archive', [ 'query' => $news_query ] );
?>

          </div><a class="u-n-news-button c-n-button -opacity" href="<?php echo esc_url( get_term_url( 'news' ) ); ?>" style="<?php echo esc_attr( !empty( $news_query->posts ) ? '' : 'display:none;' ); ?>">過去のお知らせ</a>
        </div>
      </div>
    </main>

<?php get_footer(); ?>
