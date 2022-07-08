<?php get_header(); ?>



<div class="l-site__content">
  <!-- サイトコンテンツ -->

  <main class="l-site__main l-blog__main">


    <!-- キービジュアル -->
    <?php get_template_part('template/page', 'kv'); ?>

    <!-- パンくずリスト -->
    <div class="l-breadcrumps">
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

            </div><!-- /l-post-list -->


          </div><!-- /l-blog__post -->


          <!-- サイドバー -->
          <div class="l-sidebar">
            <?php get_sidebar(); ?>
          </div>


        </div><!-- /l-blog__cotent -->

      </div><!-- /l-container -->

    </div><!-- /l-blog-content__outer -->


  </main> <!--  /l-site__main -->


</div><!-- /l-site__content -->



<?php get_footer(); ?>