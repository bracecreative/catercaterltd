<section class="news">
  <div class="container">
    <div class="row">
      <?php 

      // the query
      $the_query = new WP_Query( array(
        'posts_per_page'   => -1,
        'post_type'        => 'post',
    ));
    
    ?>

      <?php if ( $the_query->have_posts() ) : ?>

        <!-- pagination here -->

        <!-- the loop -->
        <?php
          while ( $the_query->have_posts() ) : $the_query->the_post();
          $image_url = get_the_post_thumbnail_url();
        ?>
        <div class="col-md-4">
          <div class="post-content">
            <a href="<?php echo the_permalink(); ?>">
              <div class="featured-img" style="background-image: url(<?php echo $image_url ? $image_url : get_template_directory_uri() . '/img/sandwiches.jpg'; ?>);">
                <!-- Background Image -->
              </div>
            </a>
            <div class="content">
              <div class="header">
                <a href="<?php echo the_permalink(); ?>" class="heading">
                  <?php echo the_title(); ?>
                </a>
                <h5 class="date"><?php echo the_date(); ?></h5>
                <p><?php echo the_excerpt(); ?></p>
                <a href="<?php echo the_permalink(); ?>" class="read-more">Read More &rarr;</a>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <!-- end of the loop -->

        <!-- pagination here -->

        <?php wp_reset_postdata(); ?>

      <?php else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>
