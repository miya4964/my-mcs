<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <div class="primary">
    <?php
    remove_filter('the_content', 'wpautop');
    the_content();
    add_filter('the_content', 'wpautop');
    ?>
  </div><!-- //primary -->
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
