<?php get_header(); ?>
       <div class="main">
    <div class="visual overflow">
      <div class=""><img src="<?php echo get_template_directory_uri(); ?>/img/top/main-image.jpg" alt="メインイメージ女性３人がノートパソコンでウェブを見ている"></div>     
    </div>

    <div class="inner">      
      <h2 class="pc-none sp-title-white">Website<br>Direction<br>Planning</h2>
      <h2 class="sp-none">
    <p class="aaa" contenteditable data-heading="Website">Website</p>
    <p class="bbb" contenteditable data-heading="Direction">Direction</p>
    <p class="ccc" contenteditable data-heading="Planning">Planning</p>
</h2>
    </div>
    <div  class="rwd-img">
           <img src="<?php echo get_template_directory_uri(); ?>/img/top/responsive.png" alt="レスポンシブのイメージ"><br><span>Responsive Web Design</span>　
    </div>
    
  </div><!-- main -->

  <div class="content" id="top">
    <div class="service">
      <section>
 
      </section>
    </div><!-- サービス案内 -->

    <div class="feature mb-100">

      <ul class="gallery">
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/pic_gallery01.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/pic_gallery02.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/pic_gallery03.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/pic_gallery04.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/pic_gallery05.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/pic_gallery01.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/pic_gallery02.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/pic_gallery03.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/pic_gallery04.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/pic_gallery05.jpg" alt=""></li>
      </ul>
    </div><!-- スライダー -->

    <section class="inner-l mb-100">
      <h3 class="ttl-type01">NEWS<span>お知らせ</span></h3>
      <ul class="news-list mb-50">
        <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = array(
                        'posts_per_page' => 7,
                        'paged' => $paged,
                        'post_type' => array(
                                'post',
                        ),
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
        <?php endwhile; else:?>
        <li><p>ただいま記事がございません。</p></li>
        <?php endif; ?>
      </ul>
      <p class="center"><a href="<?php echo home_url();?>/news" class="btn-type02">お知らせ一覧へ</a></p>
    </section><!-- お知らせ -->


  </div><!-- content -->

<?php get_footer(); ?>
