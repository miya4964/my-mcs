<?php get_header(); ?>

 <div class="page-ttl">
    <div class="visual">
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/page-ttl.jpg" alt="">
    </div><!-- visual -->
    
    <h2>404<span>ページが見つかりませんでした</span></h2>
  </div><!-- page-ttl -->

  <div class="content">
    <div class="inner center mb-100">
	  <?php
      ?>
      <p>お探しのページが見つかりません。</p>
      <p class="mb-50">アドレスをもう一度ご確認ください。</p>
      <p><a href="<?php echo home_url();?>" class="btn-type01">トップページへ戻る</a></p>
      <?php
      ?>
   </div>
  </div><!-- content -->

<?php get_footer(); ?>