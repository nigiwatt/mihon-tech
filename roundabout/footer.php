
    <footer class="-footer">
      <div class="l-n-contact">
        <div class="l-n-inner">
          <div class="l-n-contact__left"><img class="u-n-contact-tel" src="./assets/img/common/contact_tel.svg" width="64" height="64" alt="電話" loading="lazy">
            <div class="p-n-footer-phone"><span class="u-n-contact-head">電話でのお問い合わせ</span><span class="u-n-contact-number">03-1234-XXXX</span><span class="u-n-contact-note">平日 9:00〜17:00　土日祝定休</span></div>
          </div>
          <?php if ( !is_page( [ 'contact', 'confirm', 'thanks' ] ) ) : ?>
          <div class="l-n-contact__right"><a class="-opacity" href="<?php echo esc_url( get_page_url( 'contact' ) ); ?>"><span class="u-n-contact-en c-n-en c-n-ShareTech">Contact</span>
              <h2 class="u-n-contact-title">お問い合わせ</h2><img class="u-n-contact-mail" src="./assets/img/common/contact_mail.svg" width="100" height="100" alt="メール" loading="lazy"></a>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="l-n-footer">
        <div class="l-n-inner">
          <div class="p-n-menu">
            <div class="-left"><a class="-link -opacity" href="<?php echo esc_url( get_page_url( 'index' ) ); ?>"><img class="-logo" src="./assets/img/common/footer_logo.svg" width="100" height="76" alt="Mihon Tech" loading="lazy">
                <h2 class="-title">ミホン・テック株式会社</h2></a>
              <p class="-text">〒101-0041<br>東京都千代田区神田須田町１丁目７番８号　<br class="-only-tb">VORT秋葉原IV　2F<br><br>TEL：03-1234-XXXX<br class="-only-sp">（平日 9:00〜17:00　土日祝定休）<br>E-Mail：<a href="mailto:contact.mihon-tech@example.com" class="-underline">contact.mihon-tech@example.com</a></p>
              <div class="-sns"><a class="-opacity" href="https://x.com/nigiwatt/" target="_blank"><img class="-sns01" src="./assets/img/common/footer_sns01.svg" width="60" height="60" alt="X" loading="lazy"></a><a class="-opacity" href="https://www.facebook.com/nigiwatt/" target="_blank"><img class="-sns02" src="./assets/img/common/footer_sns02.svg" width="60" height="60" alt="Facebook" loading="lazy"></a>
              </div>
            </div>
            <div class="-right">
              <?php
                wp_nav_menu([
                    'menu' => 'common',
                    'container' => 'nav',
                    'menu_class' => 'p-n-common-menu',
                ]);
              ?>
            </div>
          </div><small class="u-n-footer-copyright">©︎ <?php echo date( 'Y' ); ?> MihonTech - 本サイトは架空のコンテンツです</small>
        </div><a class="u-n-footer-pagetop -opacity -hidden js-n-pagetop" href="#" aria-label="ページトップへ戻る"></a>
      </div>
    </footer>

  <?php wp_footer(); ?>
  </body>
</html>
