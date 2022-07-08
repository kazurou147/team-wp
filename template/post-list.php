<div class="l-post-list__item">

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