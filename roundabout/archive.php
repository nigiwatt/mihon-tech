
<?php get_header(); ?>

    <main class="-general -company">
      <div class="l-n-fv">
        <div class="l-n-inner -wide js-n-fv">
          <div class="l-n-fv__main c-n-view">
            <h1>お知らせ</h1>
          </div>
        </div>
        <div class="l-n-inner">

<?php get_template_part( 'parts/breadcrumbs' ); ?>

        </div>
      </div>
      <div class="l-n-general">
        <div class="l-n-inner">
          <div class="l-n-general__list">

<?php
$news = [];
if ( have_posts() ) {

    while ( have_posts() ) {

        the_post();
        $news[] = get_post();
    }
}
get_template_part( 'parts/news', 'archive', [ 'news' => $news ] );
the_posts_pagination();
?>

          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>
