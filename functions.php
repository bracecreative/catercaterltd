<?php

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';



function cc_theme_setup()
{

  register_nav_menus(array(

    'primary' => __('Primary Navigation')

  ));
}

add_action('after_setup_theme', 'cc_theme_setup');



add_action('wp_enqueue_scripts', 'cc_scripts');

function cc_scripts()
{

  // Bootstrap Stylesheet

  wp_enqueue_style('cc-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), null);



  // Font Awesome

  wp_enqueue_style('cc-fa', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css', array(), null);



  // Google Fonts

  wp_enqueue_style('cc-open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800', array(), null);

  wp_enqueue_style('cc-kristi', 'https://fonts.googleapis.com/css?family=Kristi', array(), null);



  // Hamburger Icon

  wp_enqueue_style('cc-hamburgers', get_template_directory_uri() . '/css/hamburgers.min.css');



  // Theme Stylesheet

  wp_enqueue_style('cc-style', get_stylesheet_uri());



  // Slick Slider Styles

  wp_enqueue_style('brace-slick-css', get_template_directory_uri() . '/slick/slick.css', array(), null);

  wp_enqueue_style('brace-slick-theme-css', get_template_directory_uri() . '/slick/slick-theme.css', array(), null);



  // Bootstrap Script

  wp_enqueue_script(
    'popper-script',

    'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
    array('jquery'),
    null,
    true
  );



  wp_enqueue_script(
    'bootstrap-script',

    'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js',
    array('jquery'),
    null,
    true
  );



  // Slick Slider JS

  wp_enqueue_script('brace-slick-js', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'), null);



  wp_enqueue_script(
    'cc-custom-script',

    get_template_directory_uri() . '/js/custom.js',
    array('jquery'),
    null,
    true
  );
}



add_action('init', 'brace_autoload_shortcodes', 1);



function brace_autoload_shortcodes()
{

  $dir = get_stylesheet_directory() . '/shortcodes/visual-composer';

  $pattern = $dir . '/*.php';



  $files = glob($pattern);

  foreach ($files as $file) {

    $parts = pathinfo($file);

    $name = $parts['filename'];



    require_once($file);
  }
}



function override_mce_options($initArray)

{

  $opts = '*[*]';

  $initArray['valid_elements'] = $opts;

  $initArray['extended_valid_elements'] = $opts;

  return $initArray;
}

add_filter('tiny_mce_before_init', 'override_mce_options');



function logos_shortcode()
{

  ob_start();

  get_template_part('shortcodes/logos');

  return ob_get_clean();
}

add_shortcode('logos_section', 'logos_shortcode');



function blog_posts_shortcode()
{

  ob_start();

  get_template_part('shortcodes/blog-posts');

  return ob_get_clean();
}

add_shortcode('blog_posts', 'blog_posts_shortcode');



add_filter('gform_enable_field_label_visibility_settings', '__return_true');



// Enable SVG Uploads

function add_file_types_to_uploads($file_types)
{

  $new_filetypes = array();

  $new_filetypes['svg'] = 'image/svg+xml';

  $file_types = array_merge($file_types, $new_filetypes);

  return $file_types;
}

add_action('upload_mimes', 'add_file_types_to_uploads');





// Google Analytics

add_action('wp_head', 'brace_analytics');



function brace_analytics()
{

  ?>

  <!-- Global site tag (gtag.js) - Google Analytics -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134153194-17"></script>

  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }

    gtag('js', new Date());



    gtag('config', 'UA-134153194-17');
  </script>

<?php

}



?>