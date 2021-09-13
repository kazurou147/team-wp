<!-- 　下層ページのキービジュアル　 -->

<!-- ブログ -->
<?php if (is_archive() || is_home()) : ?>
  <!-- ページタイトル  -->
  <div class="l-blog-kv">
    <div class="l-container">
      <h1 class="c-blog-maintitle">
        <?php echo esc_html(get_the_title($ID)); ?>
      </h1>
    </div>
  </div>

  <!-- カテゴリー -->
<?php elseif (is_category()) : ?>
  <!-- ページタイトル  -->
  <div class="l-blog-kv">
    <div class="l-container">
      <h1 class="c-blog-maintitle">
        <?php echo esc_html(single_cat_title()); ?>
      </h1>
    </div>
  </div>


  <!-- カスタム投稿 -->
  <!--?php elseif (get_post_type() === '') : ?-->



  <!--　固定ページ　-->
<?php else : ?>
  <!-- ページタイトル  -->
  <div class="l-page-kv">
    <div class="l-page-kv-img">
      <?php the_post_thumbnail(); ?>
    </div>
    <div class="l-container">
      <div class="l-page-kv-body">
        <h1 class="c-blog-maintitle">
          <?php echo esc_html(get_the_title($ID)); ?>
        </h1>
      </div>
    </div>
  </div>

<?php endif; ?>