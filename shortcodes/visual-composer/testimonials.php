<?php

if (!function_exists('vc_map')) {
    return;
}

// Parent container
vc_map(array(
    'name'                    => __('Tesimonial Section', 'textdomain'),
    'base'                    => 'testimonial_section',
    'icon' => get_template_directory_uri() . '/shortcodes/visual-composer/vc-brace-icon.png',
    'category' => __('Brace Elements', 'text-domain'),
    'description'             => __('Container for logos', 'textdomain'),
    'as_parent'               => array('only' => 'testimonial_content'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    'content_element'         => true,
    "show_settings_on_create" => false,
    "is_container"            => true,
    'params'                  => array(),
    "js_view"                 => 'VcColumnView',
));
// Nested Element
vc_map(array(
    'name'            => __('Testimonial', 'textdomain'),
    'base'            => 'testimonial_content',
    'description'     => __('Testimonial', 'textdomain'),
    'icon'            => get_template_directory_uri() . '/shortcodes/visual-composer/vc-brace-icon.png',
    'content_element' => true,
    'as_child'        => array('only' => 'testimonial_section'), // Use only|except attributes to limit parent (separate multiple values with comma)
    'params'          => array(

        //BEGIN ADDING PARAMS
        array(
            'type' => 'attach_image',
            'holder' => 'p',
            'heading' => __('Company Logo', 'textdomain'),
            'param_name' => 'logo',
            'value' => __('', 'textdomain')
        ),
        array(
            'type' => 'textfield',
            'holder' => 'p',
            'heading' => __('Name', 'textdomain'),
            'param_name' => 'name',
            'description' => __('Testimonial Name', 'textdomain'),
            'value' => __('', 'textdomain')
        ),
        array(
            'type' => 'textfield',
            'holder' => 'p',
            'heading' => __('Job Title', 'textdomain'),
            'param_name' => 'job_title',
            'description' => __('Testimonial Job Title', 'textdomain'),
            'value' => __('', 'textdomain')
        ),
        array(
            'type' => 'textarea',
            'holder' => 'p',
            'heading' => __('Testimonial Content', 'textdomain'),
            'param_name' => 'text',
            'description' => __('Testimonial Content', 'textdomain'),
            'value' => __('', 'textdomain')
        ),
        //END ADDING PARAMS
    ),
));

// A must for container functionality, add the base name for your container to the end of WPBakeryShortCode_
if (class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_testimonial_section extends WPBakeryShortCodesContainer
    { }
}
// Add the base name for your nested element to the end of WPBakeryShortCode_
if (class_exists('WPBakeryShortCode')) {
    class WPBakeryShortCode_testimonial_content extends WPBakeryShortCode
    { }
}

// Shortcodes, just for this example for testing :)
// I keep the shortcodes in their own file so that 
// they don't rely on VC for outputting them, so 
// shortcodes will work when VC not enabled/installed 
// as some users may not want to use VC.
if (!function_exists('testimonial_section_output')) {

    function testimonial_section_output($atts, $content = null)
    {
        ob_start(); ?>

        <div class="brace-slick-testimonial">
            <?php echo do_shortcode($content) ?>
        </div>

    <?php $html = ob_get_clean();
            return $html;
        }
        add_shortcode('testimonial_section', 'testimonial_section_output');
    }

    if (!function_exists('testimonial_content_output')) {

        function testimonial_content_output($atts, $content = null)
        {
            extract(shortcode_atts(
                array(
                    'logo' => '',
                    'name' => 'Default',
                    'job_title' => '',
                    'text' => 'Default',
                ),
                $atts
            ));

            $image_atts = wp_get_attachment_image_src($logo, 'full');
            $image_src = $image_atts[0];

            ob_start(); ?>

        <div class="brace-slick-testimonial__container">
            <?php if (!empty($logo)) : ?>
                <img src="<?php echo $image_src; ?>" alt="Company Logo">
            <?php endif; ?>
            <h4><?php echo $name; ?></h4>
            <?php if (!empty($job_title)) : ?>
                <h6><?php echo $job_title; ?></h6>
            <?php endif; ?>
            <p>"<?php echo $text; ?>"</p>
        </div>

<?php $html = ob_get_clean();

        return $html;
    }
    add_shortcode('testimonial_content', 'testimonial_content_output');
}

/************************************************************************
 * END Example Nested
 *************************************************************************/
?>