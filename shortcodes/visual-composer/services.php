<?php

if (!function_exists('vc_map')) {
  return;
}

// Element Class 
class services extends WPBakeryShortCode
{

  // Element Init
  function __construct()
  {
    add_action('init', array($this, 'services_mapping'));
    add_shortcode('services', array($this, 'services_html'));
  }

  // Element Mapping
  public function services_mapping()
  {

    // Stop all if VC is not enabled
    if (!defined('WPB_VC_VERSION')) {
      return;
    }

    // Map the block with vc_map()
    vc_map(
      array(
        'name' => __('Services', 'text-domain'),
        'base' => 'services',
        'description' => __('Services section.', 'text-domain'),
        'category' => __('Brace Elements', 'text-domain'),
        'icon' => get_template_directory_uri() . '/shortcodes/visual-composer/vc-brace-icon.png',
        'params' => array(
          array(
            'type' => 'textfield',
            'holder' => 'h3',
            'class' => 'title-class',
            'heading' => __('Service #1 Title', 'text-domain'),
            'param_name' => 'title_1',
            'value' => __('Default value', 'text-domain'),
            'description' => __('Section Title', 'text-domain')
          ),
          array(
            'type' => 'textarea',
            'holder' => 'p',
            'class' => 'title-class',
            'heading' => __('Service #1 Text', 'text-domain'),
            'param_name' => 'text_1',
            'value' => __('Default value', 'text-domain'),
            'description' => __('Section content.', 'text-domain')
          ),
          array(
            'type' => 'textfield',
            'holder' => 'img',
            'class' => 'title-class',
            'heading' => __('Service #1 URL', 'text-domain'),
            'param_name' => 'url_1',
            'value' => __('Default Value', 'text-domain'),
            'description' => __('Section URL.', 'text-domain')
          ),
          array(
            'type' => 'attach_image',
            'holder' => 'img',
            'class' => 'title-class',
            'heading' => __('Service #1 URL', 'text-domain'),
            'param_name' => 'image_1',
            'value' => __('36', 'text-domain'),
            'description' => __('Section background image', 'text-domain')
          ),

          array(
            'type' => 'textfield',
            'holder' => 'h3',
            'class' => 'title-class',
            'heading' => __('Service #2 Title', 'text-domain'),
            'param_name' => 'title_2',
            'value' => __('Default value', 'text-domain'),
            'description' => __('Section Title', 'text-domain')
          ),
          array(
            'type' => 'textarea',
            'holder' => 'p',
            'class' => 'title-class',
            'heading' => __('Service #2 Text', 'text-domain'),
            'param_name' => 'text_2',
            'value' => __('Default value', 'text-domain'),
            'description' => __('Section content.', 'text-domain')
          ),
          array(
            'type' => 'textfield',
            'holder' => 'img',
            'class' => 'title-class',
            'heading' => __('Service #2 URL', 'text-domain'),
            'param_name' => 'url_2',
            'value' => __('Default Value', 'text-domain'),
            'description' => __('Section URL.', 'text-domain')
          ),
          array(
            'type' => 'attach_image',
            'holder' => 'img',
            'class' => 'title-class',
            'heading' => __('Service #2 URL', 'text-domain'),
            'param_name' => 'image_2',
            'value' => __('36', 'text-domain'),
            'description' => __('Section background image', 'text-domain')
          ),

          array(
            'type' => 'textfield',
            'holder' => 'h3',
            'class' => 'title-class',
            'heading' => __('Service #3 Title', 'text-domain'),
            'param_name' => 'title_3',
            'value' => __('Default value', 'text-domain'),
            'description' => __('Section Title', 'text-domain')
          ),
          array(
            'type' => 'textarea',
            'holder' => 'p',
            'class' => 'title-class',
            'heading' => __('Service #3 Text', 'text-domain'),
            'param_name' => 'text_3',
            'value' => __('Default value', 'text-domain'),
            'description' => __('Section content.', 'text-domain')
          ),
          array(
            'type' => 'textfield',
            'holder' => 'img',
            'class' => 'title-class',
            'heading' => __('Service #3 URL', 'text-domain'),
            'param_name' => 'url_3',
            'value' => __('Default Value', 'text-domain'),
            'description' => __('Section URL.', 'text-domain')
          ),
          array(
            'type' => 'attach_image',
            'holder' => 'img',
            'class' => 'title-class',
            'heading' => __('Service #3 URL', 'text-domain'),
            'param_name' => 'image_3',
            'value' => __('36', 'text-domain'),
            'description' => __('Section background image', 'text-domain')
          ),

          array(
            'type' => 'textfield',
            'holder' => 'h3',
            'class' => 'title-class',
            'heading' => __('Service #4 Title', 'text-domain'),
            'param_name' => 'title_4',
            'value' => __('Default value', 'text-domain'),
            'description' => __('Section Title', 'text-domain')
          ),
          array(
            'type' => 'textarea',
            'holder' => 'p',
            'class' => 'title-class',
            'heading' => __('Service #4 Text', 'text-domain'),
            'param_name' => 'text_4',
            'value' => __('Default value', 'text-domain'),
            'description' => __('Section content.', 'text-domain')
          ),
          array(
            'type' => 'textfield',
            'holder' => 'img',
            'class' => 'title-class',
            'heading' => __('Service #4 URL', 'text-domain'),
            'param_name' => 'url_4',
            'value' => __('Default Value', 'text-domain'),
            'description' => __('Section URL.', 'text-domain')
          ),
          array(
            'type' => 'attach_image',
            'holder' => 'img',
            'class' => 'title-class',
            'heading' => __('Service #4 URL', 'text-domain'),
            'param_name' => 'image_4',
            'value' => __('36', 'text-domain'),
            'description' => __('Section background image', 'text-domain')
          ),

          array(
            'type' => 'textfield',
            'holder' => 'h3',
            'class' => 'title-class',
            'heading' => __('Service #5 Title', 'text-domain'),
            'param_name' => 'title_5',
            'value' => __('Default value', 'text-domain'),
            'description' => __('Section Title', 'text-domain')
          ),
          array(
            'type' => 'textarea',
            'holder' => 'p',
            'class' => 'title-class',
            'heading' => __('Service #5 Text', 'text-domain'),
            'param_name' => 'text_5',
            'value' => __('Default value', 'text-domain'),
            'description' => __('Section content.', 'text-domain')
          ),
          array(
            'type' => 'textfield',
            'holder' => 'img',
            'class' => 'title-class',
            'heading' => __('Service #5 URL', 'text-domain'),
            'param_name' => 'url_5',
            'value' => __('Default Value', 'text-domain'),
            'description' => __('Section URL.', 'text-domain')
          ),
          array(
            'type' => 'attach_image',
            'holder' => 'img',
            'class' => 'title-class',
            'heading' => __('Service #5 URL', 'text-domain'),
            'param_name' => 'image_5',
            'value' => __('36', 'text-domain'),
            'description' => __('Section background image', 'text-domain')
          ),

          array(
            'type' => 'textfield',
            'holder' => 'h3',
            'class' => 'title-class',
            'heading' => __('Service #6 Title', 'text-domain'),
            'param_name' => 'title_6',
            'value' => __('Default value', 'text-domain'),
            'description' => __('Section Title', 'text-domain')
          ),
          array(
            'type' => 'textarea',
            'holder' => 'p',
            'class' => 'title-class',
            'heading' => __('Service #6 Text', 'text-domain'),
            'param_name' => 'text_6',
            'value' => __('Default value', 'text-domain'),
            'description' => __('Section content.', 'text-domain')
          ),
          array(
            'type' => 'textfield',
            'holder' => 'img',
            'class' => 'title-class',
            'heading' => __('Service #6 URL', 'text-domain'),
            'param_name' => 'url_6',
            'value' => __('Default Value', 'text-domain'),
            'description' => __('Section URL.', 'text-domain')
          ),
          array(
            'type' => 'attach_image',
            'holder' => 'img',
            'class' => 'title-class',
            'heading' => __('Service #6 URL', 'text-domain'),
            'param_name' => 'image_6',
            'value' => __('36', 'text-domain'),
            'description' => __('Section background image', 'text-domain')
          ),
        ),
      )
    );
  }


  // Element HTML
  public function services_html($atts, $content = null)
  {

    // Params extraction
    extract(
      shortcode_atts(
        array(
          'title_1' => '',
          'text_1' => '',
          'url_1' => '',
          'image_1' => '36',
          'title_2' => '',
          'text_2' => '',
          'url_2' => '',
          'image_2' => '36',
          'title_3' => '',
          'text_3' => '',
          'url_3' => '',
          'image_3' => '36',
          'title_4' => '',
          'text_4' => '',
          'url_4' => '',
          'image_4' => '36',
          'title_5' => '',
          'text_5' => '',
          'url_5' => '',
          'image_5' => '36',
          'title_6' => '',
          'text_6' => '',
          'url_6' => '',
          'image_6' => '36'
        ),
        $atts
      )
    );

    // Fill $html var with data
    $html = '
    <section class="services">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-md-4 service" style="background-image: linear-gradient(rgba(35, 31, 32, 0.26), rgba(35, 31, 32, 0.26)), url(' . wp_get_attachment_image_src($image_1, 'full')[0] . ');">
            <a href="' . $url_1 . '">
              <div class="overlay-content">
                <h2 class="heading">' . $title_1 . '</h2>
                <hr>
                <p>' . $text_1 . '</p>
              </div>
            </a>
          </div>
          <div class="col-md-4 service" style="background-image: linear-gradient(rgba(35, 31, 32, 0.26), rgba(35, 31, 32, 0.26)), url(' . wp_get_attachment_image_src($image_2, 'full')[0] . ');">
            <a href="' . $url_2 . '">
              <div class="overlay-content">
                <h2 class="heading">' . $title_2 . '</h2>
                <hr>
                <p>' . $text_2 . '</p>
              </div>
            </a>
          </div>
          <div class="col-md-4 service" style="background-image: linear-gradient(rgba(35, 31, 32, 0.26), rgba(35, 31, 32, 0.26)), url(' . wp_get_attachment_image_src($image_3, 'full')[0] . ');">
            <a href="' . $url_3 . '">
              <div class="overlay-content">
                <h2 class="heading">' . $title_3 . '</h2>
                <hr>
                <p>' . $text_3 . '</p>
              </div>
            </a>
          </div>
          <div class="col-md-4 service" style="background-image: linear-gradient(rgba(35, 31, 32, 0.26), rgba(35, 31, 32, 0.26)), url(' . wp_get_attachment_image_src($image_4, 'full')[0] . ');">
            <a href="' . $url_4 . '">
              <div class="overlay-content">
                <h2 class="heading">' . $title_4 . '</h2>
                <hr>
                <p>' . $text_4 . '</p>
              </div>
            </a>
          </div>
          <div class="col-md-4 service" style="background-image: linear-gradient(rgba(35, 31, 32, 0.26), rgba(35, 31, 32, 0.26)), url(' . wp_get_attachment_image_src($image_5, 'full')[0] . ');">
            <a href="' . $url_5 . '">
              <div class="overlay-content">
                <h2 class="heading">' . $title_5 . '</h2>
                <hr>
                <p>' . $text_5 . '</p>
              </div>
            </a>
          </div>
          <div class="col-md-4 service" style="background-image: linear-gradient(rgba(35, 31, 32, 0.26), rgba(35, 31, 32, 0.26)), url(' . wp_get_attachment_image_src($image_6, 'full')[0] . ');">
            <a href="' . $url_6 . '">
              <div class="overlay-content">
                <h2 class="heading">' . $title_6 . '</h2>
                <hr>
                <p>' . $text_6 . '</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    ';

    return $html;
  }
} // End Element Class


// Element Class Init
new services();
