<?php
 

if (!function_exists('vc_map')) {
  return;
}


// Element Class 
class ingredients extends WPBakeryShortCode {
     
  // Element Init
  function __construct() {
    add_action( 'init', array( $this, 'ingredients_mapping' ) );
    add_shortcode( 'ingredients', array( $this, 'ingredients_html' ) );
  }
   
  // Element Mapping
  public function ingredients_mapping() {
       
    // Stop all if VC is not enabled
    if ( !defined( 'WPB_VC_VERSION' ) ) {
      return;
    }
       
    // Map the block with vc_map()
    vc_map( 
      array(
        'name' => __('Ingredients', 'text-domain'),
        'base' => 'ingredients',
        'description' => __('Ingredients section for page.', 'text-domain'), 
        'category' => __('Brace Elements', 'text-domain'),   
        'icon' => get_template_directory_uri().'/shortcodes/visual-composer/vc-brace-icon.png',     
        'params' => array(
          array(
            'type' => 'textfield',
            'holder' => 'h3',
            'class' => 'title-class',
            'heading' => __( 'Title', 'text-domain' ),
            'param_name' => 'title',
            'value' => __( 'Fresh Ingredients, Fantastic Food', 'text-domain' ),
            'description' => __( 'Section Title', 'text-domain' )
          ),
          array(
            'type' => 'textarea_html',
            'holder' => 'p',
            'class' => 'title-class',
            'heading' => __( 'Section Content', 'text-domain' ),
            'param_name' => 'content',
            'value' => __( '', 'text-domain' )
          ),
          array(
            'type' => 'attach_image',
            'holder' => 'img',
            'class' => 'title-class',
            'heading' => __( 'Left Image', 'text-domain' ),
            'param_name' => 'left_image',
            'value' => __( '36', 'text-domain' )
          ),
          array(
            'type' => 'attach_image',
            'holder' => 'img',
            'class' => 'title-class',
            'heading' => __( 'Middle Image', 'text-domain' ),
            'param_name' => 'middle_image',
            'value' => __( '36', 'text-domain' )
          ),
          array(
            'type' => 'attach_image',
            'holder' => 'img',
            'class' => 'title-class',
            'heading' => __( 'Right Image', 'text-domain' ),
            'param_name' => 'right_image',
            'value' => __( '36', 'text-domain' )
          )
        ),
      )
    );
  }
   
   
  // Element HTML
  public function ingredients_html( $atts, $content = null ) {
       
    // Params extraction
    extract(
      shortcode_atts(
        array(
          'title' => 'Fresh Ingredients, Fantastic Food',
          'left_image' => '36',
          'middle_image' => '36',
          'right_image' => '36'
        ), 
        $atts
      )
    );

    // Fill $html var with data
    $html = '
    <section class="ingredients">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-md-6 left-image" style="background-image: url('. wp_get_attachment_image_src( $left_image, 'full' )[0] .')">
            <!-- Background Image -->
          </div>
          <div class="col-md-6 content-right">
            <div class="header">
              <h2 class="heading">'. $title .'</h2>
            </div>

            <div class="content">
              <p>
              '. $content .'
              </p>
            </div>

            <div class="bottom-images">
              <div class="img-wrapper">
                '. wp_get_attachment_image( $middle_image, 'full') .'
              </div>

              <div class="img-wrapper">
                '. wp_get_attachment_image( $right_image, 'full') .'
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    ';      
      
    return $html; 
  }
   
} // End Element Class


// Element Class Init
new ingredients();
