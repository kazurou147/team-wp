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


        <!-- 記事 -->

        <article <?php post_class(); ?>>
          <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>

              <?php the_content();  ?>

          <?php endwhile;
          endif; ?>
        </article>


      </div><!-- /l-container -->

    </div><!-- /l-page-content-outer -->


  </main>


  <div class="clear-fix"></div>

</div><!-- class="l-site-content" -->



<?php get_footer(); ?>