<!-- ブログ　記事一覧 -->

<div class="l-post-list-body">

  <div class="l-post-list-info">
    <span class="l-post-into_time">
      <time datetime="<?php echo esc_html(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
    </span>
  </div>

  <div class="l-post-list-title">
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </div>

</div>