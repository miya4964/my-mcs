<?php get_header(); ?>

<div class="page-ttl">
    <div class="visual">
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/page-ttl.jpg" alt="広島のホームページ作成MCSタイトルページ">
    </div><!-- visual -->

    <h2>ブログ一覧<span>BLOG</span></h2>
  
  </div><!-- page-ttl -->
  
  <div class="content inner" id="blog">
　  
  <ul class="inline blog-list mb-50">
        <?php
                $args = array(
                        'post_type' => 'post',
                        'category_name' => 'blog',
                        'posts_per_page' => 30,
                      );
                $the_query = new WP_Query($args);?>
				<?php if ($the_query->have_posts()): ?>
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<?php
                    $cat = get_the_category();
                    $cat_slug = $cat[0]->slug;
                    $cat_name = $cat[0]->name;
                ?>
 
        <li>
          <a href="<?php the_permalink(); ?>">
            <div class="img">
              <img src="<?php the_post_thumbnail_url('top-blog'); ?>" srcset="<?php the_post_thumbnail_url('top-blog2'); ?> 2x" alt="<?php the_title(); ?>">
              <div class="blog-body">
                <?php the_excerpt(); ?>
              </div>
            </div><!-- img -->
            
            <div class="txt">
              <p><?php the_time('Y年m月d日') ?></p>
              <p><?php the_title(); ?></p>
            </div><!-- txt -->
          </a>
        </li>
        <?php endwhile; else:?>
        <li><p>ただいま記事がございません。</p></li>
        <?php endif; ?>
      </ul>

      <div class="center"><?php wp_pagenavi(); ?></div>
      
      <?php wp_reset_query(); ?>

  </div><!-- content -->
<?php get_footer(); ?>