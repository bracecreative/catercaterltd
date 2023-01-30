
  <footer>
    <div class="container d-flex flex-column flex-lg-row justify-content-around align-items-center">
      <!-- <div class="row">
        <div class="col-md-6 left-side">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/CC Logo.png" alt="Cater Cater Logo" class="logo">
          </a>

          <p>Unit 20.1, Highnam Business Centre
            <br>Highnam, Gloucestershire GL2 8DN</p>

          <p class="contact">Telephone:
            <a href="tel:01452527888">01452&nbsp;527888</a>
            <br> Email:
            <a href="mailto:office@catercater.co.uk">office@catercater.co.uk</a>
          </p>
        </div>

        <div class="col-md-6">
          <div class="right-side">
            <div class="inner-content">
              <p class="social">
                <a href="https://www.facebook.com/CaterCaterLtd/">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/CaterCaterLtd">
                  <i class="fab fa-twitter"></i>
                </a>
              </p>

              <p class="links">
                <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact Us</a> |
                <a href="<?php echo esc_url(home_url('/cookie-policy')); ?>">Cookie Policy</a> |
                <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a>
              </p>

              <p class="brace-link">
                Website created by
                <a href="http://www.brace.co.uk" target="_blank">Brace Creative Agency</a>
              </p>
            </div>
          </div>
        </div>
      </div> -->
      <a href="<?php echo esc_url(home_url()); ?>">
          <img src="<?php echo get_template_directory_uri() . '/img/CaterCater.png'; ?>" alt="CaterCater Logo">
      </a>
      <p class="links mb-2 m-md-0">
        <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact Us</a> |
        <a href="<?php echo esc_url(home_url('/cookie-policy')); ?>">Cookie Policy</a> |
        <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a> |
        <a href="<?php echo esc_url(home_url('/terms-of-business')); ?>">Terms of Business</a>
      </p>
      <p class="brace-link m-0">
        Website created by
        <a href="http://www.brace.co.uk" target="_blank">Brace Creative Agency</a>
      </p>
      <div class="social">
        <a href="https://twitter.com/CaterCaterLtd" target="_blank">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.facebook.com/CaterCaterLtd/" target="_blank">
          <i class="fab fa-facebook-f"></i>
        </a>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>

</html>