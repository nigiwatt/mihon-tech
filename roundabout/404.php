
<?php get_header(); ?>

    <main class="-general">
      <div class="l-n-fv">
        <div class="l-n-inner -wide js-n-fv">
          <div class="l-n-fv__main c-n-view">
            <h1>エラー</h1>
          </div>
        </div>
        <div class="l-n-inner">

<?php get_template_part( 'parts/breadcrumbs' ); ?>

        </div>
      </div>
      <div class="l-n-general">
        <div class="l-n-inner">
          <h2 class="u-n-general-title">ページが見つかりませんでした</h2>
          <p class="u-n-general-text">申し訳ございません。<br class="-only-sp">お探しのページは削除されたか、<br class="-only-sp">移動した可能性があります。<br>恐れ入りますが、トップページまたは<br class="-only-sp">メニューから目的のページをお探しください。</p><a class="u-n-general-button c-n-button -opacity" href="<?php echo esc_url( get_page_url( 'index' ) ); ?>">トップに戻る</a>
        </div>
      </div>
    </main>

<?php get_footer(); ?>
