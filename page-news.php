<?php get_header(); ?>

<div class="page-ttl">
    <div class="visual">
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/page-ttl.jpg" alt="広島のホームページ作成MCSタイトルページ">
    </div><!-- visual -->

    <h2>お知らせ<span>news</span></h2>
  
  </div><!-- page-ttl -->
  
  <div class="content inner" id="information">
　  
     <ul class="news-list mb-50">
     <?php
                $args = array(
                        'post_type' => 'post',
                        'category_name' => 'news',
                        'posts_per_page' => 20,
                      );
                $the_query = new WP_Query($args);?>
				<?php if ($the_query->have_posts()): ?>
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<?php
                    $cat = get_the_category();
                    $cat_slug = $cat[0]->slug;
                    $cat_name = $cat[0]->name;
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