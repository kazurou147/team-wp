<?php get_header(); ?>

<?php remove_filter('the_content', 'wpautop'); ?>

<div class="l-site__content">
  <!-- サイトコンテンツ -->

  <main class="l-site__main l-page__main">


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
    <div class="l-page__content-outer">
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




</div><!-- class="l-site-content" -->



<?php get_footer(); ?>