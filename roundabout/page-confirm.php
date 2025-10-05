
<?php
$controller = new ContactController();
$data = $controller->confirm();
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
      <div class="l-n-contact">
        <div class="l-n-inner">
          <form class="l-n-contact__form l-n-contact__form--confirm" action="https://docs.google.com/forms/d/e/1FAIpQLSdafHvhKmxiG1nxvjub-g7ON6h9XTeuIHVuNG4Yerb1pOeduA/formResponse" method="POST" target="hidden_iframe" onsubmit="submitted=true;">
            <div class="p-n-contact">
              <label class="-label">お問い合わせ種別</label>
              <p class="-value"><?php echo esc_html( $data[ 'type' ] ); ?></p>
              <input type="hidden" name="entry.871607608" value="<?php echo esc_attr( $data[ 'type' ] ); ?>">
            </div>
            <div class="p-n-contact">
              <label class="-label">お名前</label>
              <p class="-value"><?php echo esc_html( $data[ 'name' ] ); ?></p>
              <input type="hidden" name="entry.1757624390" value="<?php echo esc_attr( $data[ 'name' ] ); ?>">
            </div>
            <div class="p-n-contact">
              <label class="-label">ふりがな</label>
              <p class="-value"><?php echo esc_html( $data[ 'kana' ] ); ?></p>
              <input type="hidden" name="entry.210124482" value="<?php echo esc_attr( $data[ 'kana' ] ); ?>">
            </div>
            <div class="p-n-contact">
              <label class="-label">会社名</label>
              <p class="-value"><?php echo esc_html( $data[ 'organization' ] ); ?></p>
              <input type="hidden" name="entry.2043976066" value="<?php echo esc_attr( $data[ 'organization' ] ); ?>">
            </div>
            <div class="p-n-contact">
              <label class="-label">郵便番号</label>
              <p class="-value">〒<?php echo esc_html( $data[ 'postal-code' ] ); ?></p>
              <input type="hidden" name="entry.1115039510" value="<?php echo esc_attr( $data[ 'postal-code' ] ); ?>">
            </div>
            <div class="p-n-contact">
              <label class="-label">住所</label>
              <p class="-value"><?php echo esc_html( $data[ 'street-address' ] ); ?></p>
              <input type="hidden" name="entry.86581035" value="<?php echo esc_attr( $data[ 'street-address' ] ); ?>">
            </div>
            <div class="p-n-contact">
              <label class="-label">メールアドレス</label>
              <p class="-value"><?php echo esc_html( $data[ 'email' ] ); ?></p>
              <input type="hidden" name="entry.649412851" value="<?php echo esc_attr( $data[ 'email' ] ); ?>">
            </div>
            <div class="p-n-contact">
              <label class="-label">電話番号</label>
              <p class="-value"><?php echo esc_html( $data[ 'tel' ] ); ?></p>
              <input type="hidden" name="entry.2088506912" value="<?php echo esc_attr( $data[ 'tel' ] ); ?>">
            </div>
            <div class="p-n-contact">
              <label class="-label">ご質問等あればご記入ください</label>
              <p class="-value"><?php echo esc_html( $data[ 'content' ] ); ?></p>
              <textarea name="entry.1373218457" style="display:none;"><?php echo esc_html( $data[ 'content' ] ); ?></textarea>
            </div><span class="u-n-contact-buttons p-n-contact">
              <input class="-back c-n-button -opacity" type="button" value="戻る" onclick="javascript:history.back()">
              <input class="-submit c-n-button -opacity" type="submit" value="送信"></span>
          </form>

<script type="text/javascript">
  let submitted = false;
</script>
<iframe
  name="hidden_iframe"
  id="hidden_iframe"
  style="display: none"
  onload="if(submitted){ window.location='<?php echo esc_url( $data[ 'form_action' ] ); ?>'; }">
</iframe>

        </div>
      </div>
    </main>

<?php get_footer(); ?>
