<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 
get_header(); ?>

  <?php while (have_posts()) : the_post(); ?>
  <section class="single-post">
    <div class="header">
      <div class="container">
        <h1 class="heading"><?php echo the_title(); ?></h1>
        <h5 class="date">September 2018</h5>
      </div>
    </div>

    <div class="post-content">
      <div class="container">
        <?php echo the_content(); ?>
      </div>
    </div>
  </section>
  <?php endwhile; ?>

  <section class="page-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-8 my-auto">
          <h2 class="heading">
            We can turn your Ideas Into Reality...
          </h2>
        </div>
        <div class="col-lg-2 col-md-4 my-auto">
          <a href="<?php echo esc_url(get_page_link(14)); ?>" class="btn btn-grey">Contact Us</a>
        </div>
      </div>
    </div>
  </section>
 
<?php get_footer(); ?>