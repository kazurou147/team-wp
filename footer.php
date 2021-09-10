<!-- フッター前に共通で表示するエリアがあればコメントを外す  -->
<!-- 
<?php
if (!is_front_page()) : ?>
<section>
  <?php get_template_part('template/link', 'bottom'); ?>
</section>
<?php endif; ?>
 -->


<footer>


  <div class="l-footer-main-wrap">

    <div class="l-container">

      <div class="l-footer-menu-area">
        <div class="l-footer-menu-item">
          <?php if (has_nav_menu('footer-menu1')) : ?>
            <?php wp_nav_menu(array(
              'theme_location' => 'footer-menu1'
            ));
            ?>
          <?php endif; ?>
        </div>

      </div>



      <div class="l-footer-bottom-wrap">
        <div class="l-footer-bottom l-container">
          <i class="l-footer-copyright">© All Rights Reserved.</i>
        </div>
      </div>


    </div>

  </div>




</footer>



</div><!-- /l-site -->

<?php wp_footer(); ?>








</body>

</html>