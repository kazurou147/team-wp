<?php get_header(); ?>


<div class="l-site__content">
  <!-- サイトコンテンツ -->

  <main class="l-site__main l-front__main">

    <!-- 記事 -->

    <article <?php post_class(); ?>>

      <section class="p-main-visual">
        <div class="l-container">
          <div class="p-main-visual__text">For the future.</div>
        </div>
      </section>




      <!--  -->
      <section class="p-front-sec01">
        <div class="l-container">

        </div><!-- /container -->

      </section>


      <!--
      記事の出力用  使うときはコメントを外すこと  
      <ul>

        <?php
        //記事の出力    
        global $post;
        $args = array(
          'posts_per_page' => 4, //記事数
          'post_status' => 'publish', //公開の記事だけ
          'post_type' => '', //カスタム投稿slag
          'orderby' => 'date', //日付を出力する基準
          'order' => 'DESC' //表示する順番（逆はASC）
        );
        $myposts = get_posts($args);
        if ($myposts) : foreach ($myposts  as $post) : setup_postdata($post);
        ?>

      <li>

      <time datetime="<?php echo esc_html(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>

      <?php the_category(); ?>

      <a href="<?php the_permalink() ?>">
        <?php the_title();  ?>
      </a>
      </li>

    <?php
          //------------繰り返しここまで---------- 
          endforeach; ?>

  <?php
          //-----------get_posts終了----------
          wp_reset_postdata();
        endif; ?>

  </ul>
  -->






    </article>



  </main> <!-- class="l-site__main" -->

</div><!-- class="l-site__content" -->


<?php get_footer(); ?>