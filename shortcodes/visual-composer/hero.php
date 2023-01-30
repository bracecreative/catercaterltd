<?php


if (!function_exists('vc_map')) {
  return;
}


// Element Class 
class hero extends WPBakeryShortCode
{

  // Element Init
  function __construct()
  {
    add_action('init', array($this, 'hero_mapping'));
    add_shortcode('hero', array($this, 'hero_html'));
  }

  // Element Mapping
  public function hero_mapping()
  {

    // Stop all if VC is not enabled
    if (!defined('WPB_VC_VERSION')) {
      return;
    }

    // Map the block with vc_map()
    vc_map(
      array(
        'name' => __('Hero', 'text-domain'),
        'base' => 'hero',
        'description' => __('Standard hero for pages.', 'text-domain'),
        'category' => __('Brace Elements', 'text-domain'),
        'icon' => get_template_directory_uri() . '/shortcodes/visual-composer/vc-brace-icon.png',
        'params' => array(
          array(
            "type" => "checkbox",
            "class" => "",
            "heading" => __("Blue Theme", "my-text-domain"),
            "param_name" => "blue_theme",
            "value" => __("", "my-text-domain"),
            "description" => __("(default is maroon)", "my-text-domain")
          ),
          array(
            'type' => 'textarea',
            'holder' => 'h3',
            'class' => 'title-class',
            'heading' => __('Title', 'text-domain'),
            'param_name' => 'title',
            'value' => __('Welcome', 'text-domain'),
            'description' => __('Section Title', 'text-domain')
          ),
          array(
            'type' => 'textarea',
            'holder' => 'p',
            'class' => 'title-class',
            'heading' => __('Section Content', 'text-domain'),
            'param_name' => 'text',
            'value' => __('We use local ingredients to create the freshest most inspired event menus, working with you when it comes to choice, personal preference and budget.', 'text-domain')
          ),
          array(
            "type" => "checkbox",
            "class" => "",
            "heading" => __("Enable Buttons", "my-text-domain"),
            "param_name" => "enable_buttons",
            "value" => __("", "my-text-domain"),
            "description" => __("Enter description.", "my-text-domain")
          ),
          array(
            'type' => 'textfield',
            'holder' => 'h3',
            'class' => 'title-class',
            'heading' => __('Primary Button Text', 'text-domain'),
            'param_name' => 'primary_button_text',
            'value' => __('View Menus', 'text-domain'),
            'description' => __('Primary button text.', 'text-domain')
          ),
          array(
            'type' => 'attach_image',
            'holder' => 'img',
            'class' => 'title-class',
            'heading' => __('Background Image', 'text-domain'),
            'param_name' => 'background_image',
            'value' => __('36', 'text-domain'),
            'description' => __('Section background image', 'text-domain')
          ),
          array(
            'type' => 'textfield',
            'holder' => 'p',
            'class' => 'title-class',
            'heading' => __('Primary Button URL', 'text-domain'),
            'param_name' => 'primary_button_url',
            'value' => __('Default value', 'text-domain'),
            'description' => __('The full URL for primary button', 'text-domain')
          ),
          array(
            "type" => "checkbox",
            "class" => "",
            "heading" => __("Enable Additional Buttons", "my-text-domain"),
            "param_name" => "enable_additional_buttons",
            "value" => __("", "my-text-domain"),
            "description" => __("", "my-text-domain")
          ),
          array(
            'type' => 'textfield',
            'holder' => 'h3',
            'class' => 'title-class',
            'heading' => __('Primary Button Option 1', 'text-domain'),
            'param_name' => 'primary_option_1',
            'value' => __('', 'text-domain'),
            'description' => __('Primary button first option text', 'text-domain')
          ),
          array(
            'type' => 'textfield',
            'holder' => 'p',
            'class' => 'title-class',
            'heading' => __('Primary Button Option 1 URL', 'text-domain'),
            'param_name' => 'primary_option_1_url',
            'value' => __('', 'text-domain'),
            'description' => __('The full URL for the first primary button option', 'text-domain')
          ),
          array(
            'type' => 'textfield',
            'holder' => 'h3',
            'class' => 'title-class',
            'heading' => __('Primary Button Option 2', 'text-domain'),
            'param_name' => 'primary_option_2',
            'value' => __('', 'text-domain'),
            'description' => __('Primary button second option text', 'text-domain')
          ),
          array(
            'type' => 'textfield',
            'holder' => 'p',
            'class' => 'title-class',
            'heading' => __('Primary Button Option 2 URL', 'text-domain'),
            'param_name' => 'primary_option_2_url',
            'value' => __('', 'text-domain'),
            'description' => __('The full URL for the second primary button option', 'text-domain')
          ),
          array(
            'type' => 'textfield',
            'holder' => 'h3',
            'class' => 'title-class',
            'heading' => __('Secondary Button Text', 'text-domain'),
            'param_name' => 'secondary_button_text',
            'value' => __('View Menus', 'text-domain'),
            'description' => __('Secondary button text.', 'text-domain')
          ),
          array(
            'type' => 'textfield',
            'holder' => 'p',
            'class' => 'title-class',
            'heading' => __('Secondary Button URL', 'text-domain'),
            'param_name' => 'secondary_button_url',
            'value' => __('Default value', 'text-domain'),
            'description' => __('The full URL for secondary button', 'text-domain')
          ),
        ),
      )
    );
  }


  // Element HTML
  public function hero_html($atts, $content = null)
  {

    // Params extraction
    extract(
      shortcode_atts(
        array(
          'title'   => 'Welcome',
          'text'   => 'We use local ingredients to create the freshest most inspired event menus, working with you when it comes to choice, personal preference and budget.',
          'button_url'   => 'contact',
          'enable_buttons' => false,
          'enable_additional_buttons' => false,
          'primary_button_text' => 'View Menus',
          'primary_button_url' => '',
          'primary_option_1' => 'Event Menus',
          'primary_option_1_url' => '',
          'primary_option_2' => 'Buffet/Lunch Menus',
          'primary_option_2_url' => '',
          'secondary_button_text' => 'Contact Us',
          'secondary_button_url' => '',
          'background_image' => '36',
          'blue_theme' => false
        ),
        $atts
      )
    );

    if ($blue_theme) {
      $blue_class =
        'blue';
      $button_class = 'btn-blue';
    } else {
      $blue_class = '';
      $button_class = '';
    }

    if ($enable_buttons && $enable_additional_buttons) :
      ob_start();
      ?>
      <div class="buttons">
        <ul class="buttons-list">
          <li>
            <a href="<?php echo $primary_button_url; ?>" class="btn btn-main parent-button <?php echo $button_class; ?>" target="_blank"><?php echo $primary_button_text; ?></a>
          </li>
          <li>
            <a href="<?php echo $primary_option_1_url; ?>" class="btn btn-main dropdown-btn child-button-one<?php echo $button_class; ?>" target="_blank"><?php echo $primary_option_1; ?></a>
          </li>
          <li>
            <a href="<?php echo $primary_option_2_url; ?>" class="btn btn-main dropdown-btn child-button-two<?php echo $button_class; ?>" target="_blank"><?php echo $primary_option_2; ?></a>
          </li>
        </ul>
        <a href="<?php echo $secondary_button_url; ?>" class="btn btn-dark"><?php echo $secondary_button_text; ?></a>
      </div>
      <?php $buttons = ob_get_clean(); ?>
    <?php
        elseif ($enable_buttons) :
          ob_start();
          ?>
      <div class="buttons">
        <a href="<?php echo $primary_button_url; ?>" class="btn btn-main <?php echo $button_class; ?>" target="_blank"><?php echo $primary_button_text; ?></a>
        <a href="<?php echo $secondary_button_url; ?>" class="btn btn-dark"><?php echo $secondary_button_text; ?></a>
      </div>
    <?php
          $buttons = ob_get_clean();
        else :
          ?>
      <?php $buttons = ''; ?>
    <?php endif;

        // Fill $html var with data

        ob_start(); ?>
    <section class="hero <?php echo $blue_class ?>" style="background-image:url(<?php echo wp_get_attachment_image_src($background_image, 'full')[0] ?>)">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 intro-text">
            <h1 class="heading"><?php echo $title ?></h1>
            <p><?php echo $text ?></p>
            <?php echo $buttons ?>
          </div>
        </div>
      </div>
    </section>

<?php $html = ob_get_clean();

    return $html;
  }
} // End Element Class


// Element Class Init
new hero();
?>