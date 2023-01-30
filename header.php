<!doctype html>

<html lang="en">



<head>

  <!-- Required meta tags -->

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">



  <title>

    <?php if(is_front_page()) : ?>

    <?php bloginfo('name') ?> | <?php bloginfo('description'); ?>

    <?php else: ?>

    <?php wp_title(''); ?> | <?php bloginfo('name') ?>

    <?php endif; ?>

  </title>



  <?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>

  <header>

    <!-- <div class="contact-info">

      <div class="container-fluid">

        <div class="row">

          <div class="col-md-6 text-center text-md-left">

            <a href="tel:01452527888">01452&nbsp;527888</a>

          </div>



          <div class="col-md-6 text-center text-md-right">

            <a href="mailto:office@catercater.co.uk">office@catercater.co.uk</a>

          </div>

        </div>

      </div>

    </div> -->



    <!-- <div class="top-nav">

      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-4">

            <div class="social">

              <a href="https://twitter.com/CaterCaterLtd" target="_blank">

                <i class="fab fa-twitter"></i>

              </a>

              <a href="https://www.facebook.com/CaterCaterLtd/" target="_blank">

                <i class="fab fa-facebook-f"></i>

              </a>

            </div>

          </div>



          <div class="col-lg-4">

            <div class="logo-wrapper text-center">

              <a href="<?php echo esc_url(home_url()); ?>">

                <img src="<?php echo get_template_directory_uri(); ?>/img/CC Logo.png" alt="Cater Cater Logo" class="logo">

              </a>

            </div>

          </div>



          <div class="col-lg-4 d-none d-lg-block">

            <div class="contact-link">

              <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact Us</a>

            </div>

          </div>

        </div>

        <div class="top-nav-container">

          <div class="social">

            <a href="https://twitter.com/CaterCaterLtd" target="_blank">

              <i class="fab fa-twitter"></i>

            </a>

            <a href="https://www.facebook.com/CaterCaterLtd/" target="_blank">

              <i class="fab fa-facebook-f"></i>

            </a>

          </div>

          <div class="contact-link">

            <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact Us</a>

          </div>

        </div>

      </div>

    </div> -->



    <div class="bottom-nav">

      <nav class="navbar navbar-expand-lg">

        <button class="hamburger hamburger--collapse navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"

          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

          <span class="hamburger-box">

            <span class="hamburger-inner"></span>

          </span>

        </button>



        <a href="<?php echo esc_url(home_url()); ?>">

            <img src="<?php echo get_template_directory_uri() . '/img/CaterCater.png'; ?>" alt="CaterCater Logo">

        </a>



        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <?php

            wp_nav_menu( array(

              'theme_location'  => 'primary',

              'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.

              'container'       => false,

              'menu_class'      => 'navbar-nav',

              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',

              'walker'          => new WP_Bootstrap_Navwalker(),

            ) );

          ?>





<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/brewfork-logo.png" alt="Brewfork Logo" class="d-none d-lg-block brewfork-logo"> -->

        </div>

        <div class="bottom-nav-container">

          <div class="social">

            <a href="https://twitter.com/CaterCaterLtd" target="_blank">

              <i class="fab fa-twitter"></i>

            </a>

            <a href="https://www.facebook.com/CaterCaterLtd/" target="_blank">

              <i class="fab fa-facebook-f"></i>

            </a>

          </div>

        </div>

      </nav>

    </div>

  </header>

