<?php get_header(); ?>

<div class="page-ttl">
    <div class="visual">
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/page-ttl.jpg" alt="広島のホームページ作成MCSタイトルページ">
    </div><!-- visual -->

    <h2>お知らせ<span>news</span></h2>
  
  </div><!-- page-ttl -->
  
  <div class="content inner" id="news">
　  
     <ul class="news-list mb-50">
      <?php
      $args = array(
        'post_per_page' => 10
        );
      query_posts( $args );

      if(have_posts()):
          while(have_posts()):
              the_post();
      ?>
      <?php
		$category = get_the_category();
		$cat_id   = $category[0]->cat_ID;
		$cat_name = $category[0]->cat_name;
		$cat_slug = $category[0]->category_nicename;
	  ?>
      <li><a href="<?php the_permalink(); ?>"><span class="date"><?php the_time('Y年m月d日') ?></span><span class="cat"><?php echo $cat_name; ?></span><?php the_title(); ?></a></li>
      <?php
      endwhile;
        else:
      ?>
            <li><p>ただいま記事がございません。</p></li>
      <?php endif; ?>
        </ul>

      <div class="center"><?php wp_pagenavi(); ?></div>
      
      <?php wp_reset_query(); ?>

  </div><!-- content -->
<?php get_footer(); ?>