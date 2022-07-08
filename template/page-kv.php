<!-- ブログ -->
<?php if (is_archive() || is_home()) : ?>
<!-- ページタイトル  -->
<div class="c-kv">
  <div class="l-container">
    <h1 class="c-kv__title">
      <?php echo esc_html(get_the_title($ID)); ?>
    </h1>
  </div>
</div>

<!-- カテゴリー -->
<?php elseif (is_category()) : ?>
<!-- ページタイトル  -->
<div class="c-kv">
  <div class="l-container">
    <h1 class="c-kv__title">
      <?php echo esc_html(single_cat_title()); ?>
    </h1>
  </div>
</div>


<!-- カスタム投稿 -->
<!--?php elseif (get_post_type() === '') : ?-->



<!--　固定ページ　-->
<?php else : ?>
<!-- ページタイトル  -->
<div class="c-kv">
  <div class="c-kv__img">
    <?php the_post_thumbnail(); ?>
  </div>
  <div class="l-container">
    <h1 class="c-kv__title">
      <?php echo esc_html(get_the_title($ID)); ?>
    </h1>
  </div>
</div>

<?php endif; ?>