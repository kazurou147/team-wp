<?php get_header(); ?>



<div class="l-site__content">
  <!-- サイトコンテンツ -->

  <main class="l-site__main l-blog__main l-single__main">


    <!-- キービジュアル -->
    <?php get_template_part('template/page', 'kv'); ?>


    <!-- パンくずリスト -->
    <div class="l-breadcrumbs">
      <div class="l-container">
        <div class="c-breadcrumbs">
          <?php if (function_exists('bcn_display')) {
            bcn_display();
          } ?>
        </div>
      </div>
    </div>



    <!--　コンテンツ全体　-->
    <div class="l-blog__content-outer">
      <div class="l-container">

        <!-- 2カラム -->
        <div class="l-blog__cotent">


          <!-- コンテンツ -->
          <div class="l-blog__post">

            <div class="l-post-list">


              <!-- 記事 -->

              <article <?php post_class(); ?>>

                <h2>ニュース</h2>

                <?php if (have_posts()) :
                  while (have_posts()) : the_post(); ?>


                <!-- コンテンツ  -->


                <?php get_template_part('template/post', 'single'); ?>


                <?php endwhile;
                endif; ?>




                <div class="l-single-pagenation">
                  <span class="l-single-pagenation__prev">
                    <?php previous_post_link('%link', '&lt;&nbsp;古い記事'); ?>
                  </span>

                  <span class="l-single-pagenation__next">
                    <?php next_post_link('%link', '新しい記事&nbsp;&gt;'); ?>
                  </span>
                </div>

              </article>

            </div><!-- /l-blog-post-wrap -->


          </div><!-- /l-blog-post-wrap -->

          <!-- サイドバー -->
          <div class="l-sidebar">
            <?php get_sidebar(); ?>
          </div>


        </div><!-- /l-blog-cotent-row -->

      </div><!-- /l-container -->

    </div><!-- /l-blog-content-outer -->


  </main> <!--  id="main" class="site-main" -->




</div><!--  class="site-content" -->



<?php get_footer(); ?>