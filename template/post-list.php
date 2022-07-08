<<<<<<< HEAD
<div class="l-post-list__item">
=======
<!-- ブログ　記事一覧 -->

<div class="l-post-list-body">
>>>>>>> 0ba36408fe40a7d7587683e71b23a5d823ca3e0b

  <div class="l-post-list__info">
    <span class="l-post-list__time">
      <time datetime="<?php echo esc_html(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
    </span>
  </div>

  <div class="l-post-list__title">
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </div>

</div>