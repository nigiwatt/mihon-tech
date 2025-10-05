
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
          <h2 class="u-n-contact-title">送信いただき<br class="-only-sp">ありがとうございます</h2>
          <p class="u-n-contact-text02">受付が完了しました。<br><br>内容を確認し、<br class="-only-sp">折り返しご連絡いたしますので<br class="-only-sp">しばらくお待ちください。<br>何卒よろしくお願い申し上げます。</p><a class="u-n-contact-button c-n-button -opacity" href="<?php echo esc_url( get_page_url( 'index' ) ); ?>">トップに戻る</a>
        </div>
      </div>
    </main>

<?php get_footer(); ?>
