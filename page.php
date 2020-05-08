<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <div class="page-ttl">
    <div class="visual">
      <?php if (is_page('plan')||is_parent_slug() == 'plan'): ?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/business-contents/page-ttl.jpg" alt="料金プラン">
      <?php elseif (is_page('direction')||is_parent_slug() == 'direction'): ?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/direction/page-ttl.jpg" alt="ディレクション">
      <?php elseif (is_page('production-flow')||is_parent_slug() == 'production-flow'): ?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/production-flow/page-ttl.jpg" alt="Web制作の流れ">
      <?php elseif (is_page('production-results')||is_parent_slug() == 'production-results'): ?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/production-results/page-ttl.jpg" alt="制作実績">
      <?php elseif (is_page('qa')||is_parent_slug() == 'qa'): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/qa/page-ttl.jpg" alt="よくある質問">
      <?php elseif (is_page('contact')||is_parent_slug() == 'contact'): ?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/contact/page-ttl.jpg" alt="お問い合わせご相談">
      <?php else: ?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo get_post($wp_query->post->ID)->post_name; ?>/page-ttl.jpg" alt="広島のホームページ作成MCSタイトルページ">
      <?php endif; ?>
    </div><!-- visual -->
    
    <?php if (is_page('plan')||is_parent_slug() == 'plan'): ?>
    <h2>料金プラン<span>BUSINESS-CONTENTS</span></h2>
    <?php elseif (is_page('direction')||is_parent_slug() == 'direction'): ?>
    <h2>ディレクション<span>DIRECTION</span></h2>
    <?php elseif (is_page('production-flow')||is_parent_slug() == 'production-flow'): ?>
    <h2>Web制作の流れ<span>FLOW</span></h2>
    <?php elseif (is_page('wordpress')||is_parent_slug() == 'wordpress'): ?>
    <h2>ワードプレス<span>WORDPRESS</span></h2>  
    <?php elseif (is_page('production-results')||is_parent_slug() == 'production-results'): ?>
    <h2>制作実績<span>WORK</span></h2>  
    <?php elseif (is_page('qa')||is_parent_slug() == 'qa'): ?>
    <h2>よくあるご質問<span>Q&A</span></h2>     
    <?php elseif (is_page('contact')||is_parent_slug() == 'contact'): ?>
    <h2>お問い合わせ・無料相談<span>CONTACT</span></h2>
	<?php else: ?>
    <h2><?php wp_title(''); ?><span><?php echo get_post($wp_query->post->ID)->post_name; ?></span></h2>
    <?php endif; ?>
  
  </div><!-- page-ttl -->
  
  <div class="content inner" id="<?php echo get_post($wp_query->post->ID)->post_name; ?>">
    <?php
    remove_filter('the_content', 'wpautop');
    the_content();
    add_filter('the_content', 'wpautop');
    ?>
  </div><!-- content -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>