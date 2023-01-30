<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="container">
      <?php the_content(); ?>
    </div>

<?php endwhile; else : ?>

  <div class="container">
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  </div>
  
<?php endif; ?>

<?php get_footer(); ?>