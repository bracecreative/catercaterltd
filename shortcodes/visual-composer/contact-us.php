<?php

if (!function_exists('vc_map')) {
    return;
}

// Element Class
class contactUs extends WPBakeryShortCode {

  // Element Init
  function __construct() {
    add_action( 'init', array( $this, 'contact_us_mapping' ) );
    add_shortcode( 'contact_us', array( $this, 'contact_us_html' ) );
  }

  // Element Mapping
  public function contact_us_mapping() {

    // Stop all if VC is not enabled
    if ( !defined( 'WPB_VC_VERSION' ) ) {
      return;
    }

    // Map the block with vc_map()
    vc_map(
      array(
        'name' => __('Contact Us', 'text-domain'),
        'base' => 'contact_us',
        'description' => __('Contact section for any page.', 'text-domain'),
        'category' => __('Brace Elements', 'text-domain'),
        'icon' => get_template_directory_uri().'/shortcodes/visual-composer/vc-brace-icon.png',
        'params' => array(
          array(
              'type' => 'textfield',
              'holder' => 'h3',
              'class' => 'title-class',
              'heading' => __( 'Title', 'text-domain' ),
              'param_name' => 'title',
              'value' => __( 'Welcome', 'text-domain' ),
              'description' => __( 'Section Title', 'text-domain' )
          ),
          array(
            'type' => 'textfield',
            'holder' => 'p',
            'class' => 'title-class',
            'heading' => __( 'Form Shortcode', 'text-domain' ),
            'param_name' => 'form_shortcode',
            'value' => __( '[gravityform id=1 title=false description=false ajax=true tabindex=49]', 'text-domain' )
          ),
          array(
            'type' => 'textfield',
            'holder' => 'a',
            'class' => 'title-class',
            'heading' => __( 'Facebook URL', 'text-domain' ),
            'param_name' => 'facebook_url',
            'value' => __( 'https://www.facebook.com/CaterCaterLtd/', 'text-domain' )
          ),
          array(
            'type' => 'textfield',
            'holder' => 'a',
            'class' => 'title-class',
            'heading' => __( 'Twitter URL', 'text-domain' ),
            'param_name' => 'twitter_url',
            'value' => __( 'https://twitter.com/CaterCaterLtd', 'text-domain' )
          ),

        ),
      )
    );
  }


  // Element HTML
  public function contact_us_html( $atts, $content = null ) {

    // Params extraction
    extract(
      shortcode_atts(
        array(
          'title'   => 'Let\'s Discuss',
          'form_shortcode' => '[gravityform id=1 title=false description=false ajax=true tabindex=49]',
          'facebook_url' => 'https://www.facebook.com/CaterCaterLtd/',
          'twitter_url' => 'https://twitter.com/CaterCaterLtd',

        ),
        $atts
      )
    );

    // Fill $html var with data
    $html = '
    <section class="contact-us">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-6">
            <div class="contact-text">
              <div class="header">
                <h2 class="heading">
                  '. $title .'
                </h2>
                <p class="mb-0">Send us your enquiry -
                  <span>we aim to respond within 48 hours</span>
                </p>
              </div>

              <div class="contact-info">
                <div class="call">
                  <h5 class="heading">
                    Give us a call
                  </h5>
                  <p>
                    <i class="fas fa-phone"></i>
                    <a href="tel:01452527888">01452&nbsp;527888</a>
                  </p>
                </div>

                <div class="email">
                  <h5 class="heading">
                    Send us an email
                  </h5>
                  <p>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:office@catercater.co.uk"
                      >office@catercater.co.uk</a
                    >
                  </p>
                </div>
              </div>

              <div class="social">
                <a href="'. $twitter_url .'">
                  <i class="fab fa-twitter"></i>
                </a>

                <a href="'. $facebook_url .'">
                  <i class="fab fa-facebook"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 form-section">
            '. do_shortcode($form_shortcode) .'
          </div>
        </div>
      </div>
    </section>
    ';

    return $html;
  }

} // End Element Class


// Element Class Init
new contactUs();
