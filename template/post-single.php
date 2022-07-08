<!-- ブログ　個別記事  -->

<div class="l-post-info">
  <span class="l-post-into__time">
    <time datetime="<?php echo esc_html(get_the_date('c')); ?>">
      <?php echo esc_html(get_the_date()); ?></time>
  </span>
  <span class="l-post-into__cat">
    <?php the_category(); ?>
</div>

<h2><?php the_title();  ?></h2>


<div class="l-blog-content">
  <?php the_content(); ?>
</div>