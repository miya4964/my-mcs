<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <div class="page-ttl">
    <div class="visual">
      <img src="<?php echo get_template_directory_uri(); ?>/img/blog/page-ttl.jpg" alt="広島のホームページ作成MCSタイトルページ">
    </div><!-- visual -->
    
    <h2>ブログ<span>BLOG</span></h2>
  </div><!-- page-ttl -->

  <div class="content">
    <div class="inner mb-100">
	  	<h3 class="ttl-type03"><?php the_title(); ?></h3>
      <p class="right mb-30"><?php the_time('Y年m月d日') ?></p>
      
			<div class="mb-50">
				<?php the_content(); ?>
      </div>
      
      <p class="center"><a href="<?php echo home_url();?>/blog" class="btn-type01">一覧へ戻る</a></p>
      <?php
      ?>
   </div>
  </div><!-- content -->


<?php endwhile; endif; ?>
<?php get_footer(); ?>