
<?php get_header(); ?>

    <main class="-recruit">
      <div class="l-n-fv">
        <div class="l-n-inner -wide js-n-fv">
          <div class="l-n-fv__main c-n-view">
            <h1>採用情報</h1>
          </div>
        </div>
        <div class="l-n-inner">

<?php get_template_part( 'parts/breadcrumbs' ); ?>

        </div>
        <div class="l-n-inner">
          <ul class="u-n-fv-list c-n-submenu">
            <li class="-opacity"><a href="<?php echo esc_url( get_page_url( 'recruit', '#entry' ) ); ?>">新卒採用</a>
            </li>
            <li class="-opacity"><a href="<?php echo esc_url( get_page_url( 'recruit', '#career' ) ); ?>">キャリア採用</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="l-n-recruit" id="entry">
        <div class="l-n-inner">
          <h2 class="u-n-recruit-title"><span class="c-n-text-anim js-n-text-anim is-n-hide">新卒採用</span></h2>
          <ul class="p-n-recruit-list">
            <li class="-title">職種</li>
            <li class="-data">製造エンジニア</li>
          </ul>
          <ul class="p-n-recruit-list">
            <li class="-title">仕事内容</li>
            <li class="-data">電子部品、工業用部品等の製造</li>
          </ul>
          <ul class="p-n-recruit-list">
            <li class="-title">雇用形態</li>
            <li class="-data">正社員</li>
          </ul>
          <ul class="p-n-recruit-list">
            <li class="-title">必須条件</li>
            <li class="-data">専門学校卒以上</li>
          </ul>
          <ul class="p-n-recruit-list">
            <li class="-title">勤務時間</li>
            <li class="-data">9:00〜18:00（時間外：40時間程度）</li>
          </ul>
          <ul class="p-n-recruit-list">
            <li class="-title">休日・休暇</li>
            <li class="-data">土日・祝日</li>
          </ul>
          <ul class="p-n-recruit-list">
            <li class="-title">給与</li>
            <li class="-data">¥285,000 〜</li>
          </ul>
          <ul class="p-n-recruit-list">
            <li class="-title">賞与</li>
            <li class="-data">年2回</li>
          </ul>
          <ul class="p-n-recruit-list">
            <li class="-title">待遇・福利厚生</li>
            <li class="-data">通勤手当、家族手当、健康保険、厚生年金保険、雇用保険、労災保険、退職金制度</li>
          </ul><a class="u-n-recruit-button c-n-button -opacity" href="<?php echo esc_url( get_page_url( 'contact', '?entry' ) ); ?>">新卒採用に応募する</a>
        </div>
      </div>
      <div class="l-n-separate">
        <div class="l-n-inner -wide">
          <picture class="c-n-image u-n-separate-image js-n-separate">
            <source media="(min-width: 751px)" srcset="./assets/img/recruit/separate_image.webp 1x, ./assets/img/recruit/separate_image@2x.webp 2x" width="1920" height="874"><img src="./assets/img/recruit/separate_image_sp.webp" srcset="./assets/img/recruit/separate_image_sp.webp 1x, ./assets/img/recruit/separate_image_sp@2x.webp 2x" width="320" height="437" alt="">
          </picture>
        </div>
      </div>
      <div class="l-n-recruit" id="career">
        <div class="l-n-inner">
          <h2 class="u-n-recruit-title"><span class="c-n-text-anim js-n-text-anim is-n-hide">キャリア採用</span></h2>
          <ul class="p-n-recruit-list">
            <li class="-title">職種</li>
            <li class="-data">品質管理エンジニア</li>
          </ul>
          <ul class="p-n-recruit-list">
            <li class="-title">仕事内容</li>
            <li class="-data">製造プロセスにおける品質・進捗管理、プロダクト設計等</li>
          </ul>
          <ul class="p-n-recruit-list">
            <li class="-title">雇用形態</li>
            <li class="-data">正社員</li>
          </ul>
          <ul class="p-n-recruit-list">
            <li class="-title">必須条件</li>
            <li class="-data">管理職経験等</li>
          </ul>
          <ul class="p-n-recruit-list">
            <li class="-title">勤務時間</li>
            <li class="-data">9:00〜21:00（時間外：60時間程度）</li>
          </ul>
          <ul class="p-n-recruit-list">
            <li class="-title">休日・休暇</li>
            <li class="-data">土日・祝日</li>
          </ul>
          <ul class="p-n-recruit-list">
            <li class="-title">給与</li>
            <li class="-data">¥458,000 〜</li>
          </ul>
          <ul class="p-n-recruit-list">
            <li class="-title">賞与</li>
            <li class="-data">年2回</li>
          </ul>
          <ul class="p-n-recruit-list">
            <li class="-title">待遇・福利厚生</li>
            <li class="-data">通勤手当、家族手当、健康保険、厚生年金保険、雇用保険、労災保険、退職金制度</li>
          </ul><a class="u-n-recruit-button c-n-button -opacity" href="<?php echo esc_url( get_page_url( 'contact', '?career' ) ); ?>">キャリア採用に応募する</a>
        </div>
      </div>
    </main>

<?php get_footer(); ?>
