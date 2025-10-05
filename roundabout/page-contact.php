
<?php
$controller = new ContactController();
$data = $controller->index();
?>

<?php get_header(); ?>

    <main class="-contact">
      <div class="l-n-fv">
        <div class="l-n-inner -wide js-n-fv">
          <div class="l-n-fv__main c-n-view">
            <h1>お問い合わせ</h1>
          </div>
        </div>
        <div class="l-n-inner">

<?php get_template_part( 'parts/breadcrumbs' ); ?>

        </div>
      </div>
      <div class="l-n-contact" id="contact">
        <div class="l-n-inner">
          <form class="l-n-contact__form js-n-contact h-adr" action="<?php echo esc_url( $data[ 'form_action' ] ); ?>" method="POST">
            <input type="hidden" name="action" value="contact_form_action">
            <?php wp_nonce_field( 'contact_form_nonce', 'contact_form_nonce_field' ); ?>
            <div class="p-n-contact js-n-contact-select">
              <label class="-label" for="type">お問い合わせ種別<span class="-require">必須</span></label><span class="u-n-contact-triangle">
                <select class="-select" name="type" id="type">
                  <option>見積もりのご依頼</option>
                  <option>新卒採用に応募したい</option>
                  <option>キャリア採用に応募したい</option>
                  <option>その他ご相談</option>
                </select></span>
            </div>
            <div class="p-n-contact js-n-contact-require">
              <label class="-label" for="name">お名前<span class="-require">必須</span></label>
              <div class="-forms" data-error="お名前は必須です">
                <input class="-input" name="name" id="name" type="text" autocomplete="name" placeholder="見本　一郎">
              </div>
            </div>
            <div class="p-n-contact js-n-contact-require">
              <label class="-label" for="kana">ふりがな<span class="-require">必須</span></label>
              <div class="-forms" data-error="ふりがなは必須です">
                <input class="-input" name="kana" id="kana" type="text" placeholder="みほん　いちろう">
              </div>
            </div>
            <div class="p-n-contact js-n-contact-organization">
              <label class="-label" for="organization">会社名</label>
              <div class="-forms">
                <input class="-input" name="organization" id="organization" type="text" autocomplete="organization">
              </div>
            </div>
            <div class="p-n-contact js-n-contact-require">
              <label class="-label" for="postal-code">郵便番号<span class="-require">必須</span></label>
              <div class="-forms" data-error="郵便番号は必須です">
                <input class="-input -short p-postal-code" name="postal-code" id="postal-code" type="text" maxlength="7" autocomplete="postal-code" placeholder="1010041">
                <input class="-button c-n-button -opacity" type="button" value="検索">
              </div>
            </div>
            <div class="p-n-contact js-n-contact-require">
              <label class="-label" for="street-address">住所<span class="-require">必須</span></label>
              <div class="-forms" data-error="住所は必須です">
                <input class="-input p-region p-locality p-street-address p-extended-address" name="street-address" id="street-address" type="text" autocomplete="street-address">
              </div>
            </div>
            <div class="p-n-contact js-n-contact-require">
              <label class="-label" for="email">メールアドレス<span class="-require">必須</span></label>
              <div class="-forms" data-error="メールアドレスをご確認ください">
                <input class="-input" name="email" id="email" type="text" autocomplete="email" placeholder="contact.mihon-tech@example.com">
              </div>
            </div>
            <div class="p-n-contact js-n-contact-require">
              <label class="-label" for="tel">電話番号<span class="-require">必須</span></label>
              <div class="-forms" data-error="電話番号は必須です">
                <input class="-input" name="tel" id="tel" type="text" autocomplete="tel" placeholder="03-1234-XXXX">
              </div>
            </div>
            <div class="p-n-contact">
              <label class="-label" for="content">ご質問等あればご記入ください</label>
              <div class="-forms">
                <textarea class="-textarea" name="content" id="content"></textarea>
              </div>
            </div>
            <div class="p-n-contact js-n-contact-require">
              <label class="-forms -agreement" data-error="同意は必須です">
                <input class="-check" id="agreement" type="checkbox"><span class="u-n-contact-text01"><a href="<?php echo esc_url( get_page_url( 'privacy' ) ); ?>" target="_blank">個人情報保護方針</a>に同意する</span>
              </label>
            </div>
            <div class="p-n-contact">
              <div class="g-recaptcha" style="margin: 30px auto 0;" data-sitekey="<?php echo esc_attr( get_option( 'google_recaptcha_v2_sitekey' ) ); ?>"></div>
            </div>
            <div class="p-n-contact">
              <input class="-confirm c-n-button -opacity js-n-contact-confirm" type="submit" value="確認">
            </div>
            <input class="p-country-name" type="hidden" value="Japan">
          </form>

          <!-- Google reCAPTCHA API -->
          <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        </div>
      </div>
    </main>

<?php get_footer(); ?>
