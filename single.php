<?php get_header(); ?>



<div id="content" class="l-site-content">
  <!-- サイトコンテンツ -->

  <main id="main" class="l-blog-area">


    <!-- キービジュアル -->
    <?php  get_template_part('template/page','kv'); ?>


    <!-- パンくずリスト -->
    <div class="l-breadcrumbs-wrap">
      <div class="l-container">
        <div class="c-breadcrumbs">
          <?php if(function_exists('bcn_display'))
          {
          bcn_display();
          }?>
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
                <?php  if(have_posts()):
                while(have_posts()): the_post(); ?>


                <?php get_template_part('template/post','single') ; ?>


                <?php endwhile; endif; ?>

                <div class="pagenation_single">
                  <span class="pagenation_single-prev">
                    <?php previous_post_link('%link','&lt;&nbsp;古い記事'); ?>
                  </span>

                  <span class="pagenation_single-next">
                    <?php next_post_link('%link','新しい記事&nbsp;&gt;'); ?>
                  </span>
                </div>

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
