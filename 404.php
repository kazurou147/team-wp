<?php get_header(); ?>



<div id="content" class="l-site-content">
  <!-- サイトコンテンツ -->

  <main id="main" class="l-page-area">


    <!-- キービジュアル -->
    <?php get_template_part('template/page', 'kv'); ?>




    <!-- パンくずリスト -->
    <div class="l-breadcrumbs-wrap">
      <div class="l-container">
        <div class="c-breadcrumbs">
          <?php if (function_exists('bcn_display')) {
            bcn_display();
          } ?>
        </div>
      </div>
    </div>



    <!--　コンテンツ全体　-->
    <div class="l-page-content-outer">
      <div class="l-container">


        <section class="error-404 u-pt50 u-mb50">
          <h2>お探しのページは、ありませんでした。</h2>

          <div class="page-content">
            <p><a href="<?php echo esc_url(home_url()); ?>">トップページへ戻る</a></p>


          </div><!-- .page-content -->
        </section><!-- .error-404 -->

      </div><!-- /l-container -->

    </div><!-- /l-page-content-outer -->


  </main>


  <div class="clear-fix"></div>

</div><!-- class="l-site-content" -->



<?php get_footer(); ?>