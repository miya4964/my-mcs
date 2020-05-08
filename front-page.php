<?php get_header(); ?>
<div class="main">
    <div class="visual overflow">
      <div><img src="<?php echo get_template_directory_uri(); ?>/img/top/main-image.jpg" alt="女性３人がノートパソコンでホームページを見ているイメージ"></div>     
    </div><!-- main画像 -->
    <div class="inner">      
      <h2 class="pc-none sp-title-white">Website<br>Direction<br>Planning</h2>
      <h2 class="sp-none">
    　<p class="aaamoji" contenteditable data-heading="Website">Website</p>
    　<p class="bbbmoji" contenteditable data-heading="Direction">Direction</p>
    　<p class="cccmoji" contenteditable data-heading="Planning">Planning</p>
    　</h2>
    </div>
    <div class="rwd-img">
       <img src="<?php echo get_template_directory_uri(); ?>/img/top/responsive.png" alt="レスポンシブデザインのホームページイメージ"><br><span>Responsive Web Design</span>　
    </div>
</div><!-- main -->

<div class="content" id="top">
  <div class="consept mb-100">
      <section>
        <div class="consept-text">
          <ul>
            <li>地元密着でディレクションから運用まで提案して欲しい。</li>
            <li>スマホやタブレット対応にホームページをリニューアルをしたい。</li>
            <li>自社でお知らせやブログ等追加、更新できるホームページがほしい。</li>
            <li>現在の業者の対応スピードが遅くコストもかかっている。</li>
            <li>WordPressのサイトを持っているが更新やセキュリティ等運用、保守に不安がある。</li>
            <li>SEOやSNSでの集客の仕方を学びたい。</li>
            <li>コンサルタントやSEO・MEO業者からの提案価格が高く、また成果も出ていない。</li>
            <li>SSL(https://)化したい。</li>
            <li>お問い合わせや資料請求に結びつけたい。</li>
          </ul>
         <p>などお悩みはございませんか？まずは無料相談から。<br>ご予算に応じ成果に向けてのヒアリング、設計で課題解決をお手伝いいたします。</p>
        </div>
        <div class="consept-image"><img src="<?php echo get_template_directory_uri(); ?>/img/top/sub-image.jpg" alt="スマホで話す女性"></div>
    </section>
  </div><!-- コンセプト -->

  <div class="inner-l mb-100">
    <section>
      <h3 class="ttl-type01">Blog<span>ブログ</span></h3>
      <ul class="inline blog-list mb-50">
        <?php
                $args = array(
                        'post_type' => 'post',
                        'category_name' => 'blog',
                        'posts_per_page' => 8,
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
      <p class="center"><a href="<?php echo home_url();?>/blog" class="btn-type02">一覧へ</a></p>
    </section><!-- ブログ -->
    
     <section class="work">
      <h3 class="ttl-type01">Work<span>制作実績</span></h3>
      <ul class="gallery">
      <?php
                $args = array(
                        'post_type' => 'post',
                        'category_name' => 'work',
                        'posts_per_page' => 8,
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
              <img src="<?php the_post_thumbnail_url('work'); ?>" alt="<?php the_title(); ?>">
              <div class="blog-body">               
              </div>
            </div>
          </a>
        </li>
        <?php endwhile; else:?>
        <li><p>ただいま記事がございません。</p></li>
        <?php endif; ?>
      </ul>
    <p class="center"><a href="<?php echo home_url();?>/production-results/" class="btn-type02">一覧へ</a></p>
    </section><!-- 制作実績スライダー -->

    <section class="inner mb-100">
      <h3 class="ttl-type01">Information<span>お知らせ</span></h3>
      <ul class="news-list mb-50">
        <?php
                $args = array(
                        'post_type' => 'post',
                        'category_name' => 'news',
                        'posts_per_page' => 3,
                      );
                $the_query = new WP_Query($args);?>
				<?php if ($the_query->have_posts()): ?>
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<?php
                    $cat = get_the_category();
                    $cat_slug = $cat[0]->slug;
                    $cat_name = $cat[0]->name;
                ?>
        <li><a href="<?php the_permalink(); ?>"><span class="date"><?php the_time('Y年m月d日') ?></span>　<?php the_title(); ?></a></li>
        <?php endwhile; else:?>
        <li><p>ただいま記事がございません。</p></li>
        <?php endif; ?>
      </ul>
    </section><!-- お知らせ -->
  </div><!-- inner-l閉じ -->
</div><!-- content -->
<?php get_footer(); ?>