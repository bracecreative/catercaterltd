<?php

if (!function_exists('vc_map')) {
    return;
}

// Parent container
vc_map(array(
    'name'                    => __('Company Logo Slider', 'textdomain'),
    'base'                    => 'logo_section',
    'icon' => get_template_directory_uri() . '/shortcodes/visual-composer/vc-brace-icon.png',
    'category' => __('Brace Elements', 'text-domain'),
    'description'             => __('Container for logos', 'textdomain'),
    'as_parent'               => array('only' => 'logo_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    'content_element'         => true,
    "show_settings_on_create" => false,
    "is_container"            => true,
    'params'                  => array(),
    "js_view"                 => 'VcColumnView',
));
// Nested Element
vc_map(array(
    'name'            => __('Company Logo', 'textdomain'),
    'base'            => 'logo_item',
    'description'     => __('Company Logo', 'textdomain'),
    'icon'            => get_template_directory_uri() . '/shortcodes/visual-composer/vc-brace-icon.png',
    'content_element' => true,
    'as_child'        => array('only' => 'logo_section'), // Use only|except attributes to limit parent (separate multiple values with comma)
    'params'          => array(

        //BEGIN ADDING PARAMS
        array(
            'type' => 'attach_images',
            'holder' => 'p',
            'heading' => __('Company Logos', 'textdomain'),
            'param_name' => 'logo',
            'value' => __('', 'textdomain')
        ),
        //END ADDING PARAMS
    ),
));

// A must for container functionality, add the base name for your container to the end of WPBakeryShortCode_
if (class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_logo_section extends WPBakeryShortCodesContainer
    { }
}
// Add the base name for your nested element to the end of WPBakeryShortCode_
if (class_exists('WPBakeryShortCode')) {
    class WPBakeryShortCode_logo_item extends WPBakeryShortCode
    { }
}

// Shortcodes, just for this example for testing :)
// I keep the shortcodes in their own file so that 
// they don't rely on VC for outputting them, so 
// shortcodes will work when VC not enabled/installed 
// as some users may not want to use VC.
if (!function_exists('logo_section_output')) {

    function logo_section_output($atts, $content = null)
    {
        ob_start(); ?>

        <div class="brace-slick">
            <?php echo do_shortcode($content) ?>
        </div>

    <?php $html = ob_get_clean();
            return $html;
        }
        add_shortcode('logo_section', 'logo_section_output');
    }

    if (!function_exists('logo_item_output')) {

        function logo_item_output($atts, $content = null)
        {
            $gallery =  shortcode_atts(
                array(
                    'logo' => 'logo',
                ),
                $atts
            );

            $image_ids = explode(',', $gallery['logo']);

            ob_start(); ?>

        <?php foreach ($image_ids as $image_id) : ?>
            <?php $images = wp_get_attachment_image_src($image_id, 'full'); ?>

            <div class="brace-slick-container">
                <div class="brace-slick-container__image">
                    <img src="<?php echo $images[0]; ?>" alt="<?php echo $atts['title']; ?>">
                </div>
            </div>

        <?php endforeach; ?>

<?php $html = ob_get_clean();

        return $html;
    }
    add_shortcode('logo_item', 'logo_item_output');
}

/************************************************************************
 * END Example Nested
 *************************************************************************/
?>