<?php

if (!function_exists('vc_map')) {
  return;
}

// Parent container
vc_map(array(
  'name'                    => __('Areas Covered Section', 'textdomain'),
  'base'                    => 'areas_section',
  'icon' => get_template_directory_uri() . '/shortcodes/visual-composer/vc-brace-icon.png',
  'category' => __('Brace Elements', 'text-domain'),
  'description'             => __('Areas covered container', 'textdomain'),
  // 'as_parent'               => array('only' => 'list_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
  'content_element'         => true,
  "show_settings_on_create" => false,
  "is_container"            => true,
  'params'                  => array(),
  "js_view"                 => 'VcColumnView',
));

// A must for container functionality, add the base name for your container to the end of WPBakeryShortCode_
if (class_exists('WPBakeryShortCodesContainer')) {
  class WPBakeryShortCode_areas_section extends WPBakeryShortCodesContainer
  { }
}

// Shortcodes, just for this example for testing :)
// I keep the shortcodes in their own file so that 
// they don't rely on VC for outputting them, so 
// shortcodes will work when VC not enabled/installed 
// as some users may not want to use VC.
if (!function_exists('areas_section_output')) {

  function areas_section_output($atts, $content = null)
  {

    $page_id = get_the_ID();
    $class = null;

    switch ($page_id) {
      case 5:
        $class = 'maroon';
        break;
      case 29:
        $class = 'maroon';
        break;
      case 14:
        $class = 'maroon';
        break;
      case 10:
        $class = 'maroon';
        break;
      case 120:
        $class = 'purple';
        break;
      case 154:
        $class = 'green';
        break;
      case 157:
        $class = 'blue';
        break;
      case 160:
        $class = 'maroon';
        break;
      case 162:
        $class = 'blue';
        break;
      case 164:
        $class = 'orange';
        break;
      default:
        $class = 'maroon';
    }

    ob_start(); ?>

      <section class="areas <?php echo $class; ?>">
        <div class="container">
          <div class="header">
            <h2 class="heading">
              Areas We Cover
            </h2>
            <?php echo do_shortcode($content) ?>
          </div>
        </div>
      </section>

  <?php $html = ob_get_clean();
      return $html;
    }
    add_shortcode('areas_section', 'areas_section_output');
  }
  ?>