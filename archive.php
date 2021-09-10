<?php get_header(); ?>



<div id="content" class="l-site-content">
  <!-- サイトコンテンツ -->

  <main id="main" class="l-blog-area">


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
    <div class="l-blog-content-outer">
      <div class="l-container">

        <!-- 2カラム -->
        <div class="l-blog-cotent-row">


          <!-- サイドバー -->
          <div class="l-sidebar-wrap">
            <?php get_sidebar(); ?>
          </div>


          <!-- コンテンツ -->
          <div class="l-blog-post-wrap">

            <div class="l-post-list">

              <!-- 記事 -->

              <article <?php post_class(); ?>>

                <h2>ニュース</h2>

                <?php if (have_posts()) :
                  while (have_posts()) : the_post(); ?>


                    <!-- コンテンツ  -->


                    <?php get_template_part('template/post', 'list'); ?>


                <?php endwhile;
                endif; ?>

                <!-- pagenation -->
                <?php if (paginate_links()) : //ページが1ページ以上あれば以下を表示 
                ?>
                  <div class="l-blog-pagenation">
                    <?php
                    echo
                    paginate_links(
                      array(
                        'end_size' => 0,
                        'mid_size' => 1, //もし2に変更した場合、両方のファイルを修正する必要がある
                        'prev_next' => true,
                        'prev_text' => __('before'),
                        'next_text' => __('next'),
                      )
                    );
                    ?>
                  </div><!-- /pagenation -->
                <?php endif; ?>

              </article>

            </div><!-- /l-blog-post-wrap -->


          </div><!-- /l-blog-post-wrap -->


        </div><!-- /l-blog-cotent-row -->

      </div><!-- /l-container -->

    </div><!-- /l-blog-content-outer -->


  </main> <!--  id="main" class="site-main" -->


  <div class="clear-fix"></div>

</div><!-- id="content" class="site-content" -->



<?php get_footer(); ?>