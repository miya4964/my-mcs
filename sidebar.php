<div class="secondary">
    <?
      $sideposts = new WP_Query( $args );
      while ( $sideposts->have_posts() ) :
                $sideposts->the_post();
    ?>

    <?php the_content(); ?>

    <?php
      endwhile;
        wp_reset_postdata();
    ?>
</div>


  <?php echo home_url();?>/
  <?php echo get_stylesheet_uri(); ?>/
  <?php echo get_template_directory_uri(); ?>