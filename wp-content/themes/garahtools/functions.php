<?php

if (site_url() == "http://localhost/garahtools") {
    define("VERSION", time());
} else {
    define("VERSION", wp_get_theme()->get("Version"));
}



// Required Fies

// include_once("inc/customizer/kirki-installer.php");
// include_once("inc/customizer/homepage-customize.php");


require_once(get_theme_file_path('lib/csf/codestar-framework.php'));
require_once(get_theme_file_path('inc/metaboxes/section-slider.php'));
require_once(get_theme_file_path('inc/metaboxes/section-type.php'));
require_once(get_theme_file_path('inc/metaboxes/page-section-drag-drop.php'));
require_once(get_theme_file_path('inc/metaboxes/section-callus.php'));
require_once(get_theme_file_path('inc/metaboxes/section-about.php'));
require_once(get_theme_file_path('inc/metaboxes/section-project.php'));
require_once(get_theme_file_path('inc/metaboxes/section-service.php'));
require_once(get_theme_file_path('inc/metaboxes/section-quality.php'));
require_once(get_theme_file_path('inc/metaboxes/section-team.php'));
require_once(get_theme_file_path('inc/metaboxes/section-testimonial.php'));

require_once(get_theme_file_path('inc/themeoptions/theme-options.php'));




// Theme Bootstraping
function garahtools_theme_setup()
{
    load_theme_textdomain('garahtools', get_theme_file_path('/languages'));
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('post-formats', array('image', 'gallery', 'quote', 'link', 'audio', 'video'));
    add_editor_style('/assets/css/editor-style.css');

    // register_nav_menu( "topmenu", __( "Top Menu", "garahtools" ) );

    register_nav_menus(array(
        'top-menu' => __('Top Menu', 'garahtools'),
        'footer-menu' => __('Footer Menu', 'garahtools'),
    ));
    // add_image_size("garahtools-home-square",400,400,true);


    //Woocommerce Related Theme Support
    add_theme_support('woocommerce');

    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}

add_action('after_setup_theme', 'garahtools_theme_setup');


function garahtools_assets()
{
    wp_enqueue_style('garahtools-bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', null, '1.0');
    wp_enqueue_style('garahtools-fontawesome-css', get_template_directory_uri() . '/assets/css/fontawesome/css/font-awesome.min.css', null, '1.0');
    wp_enqueue_style('garahtools-owl-carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', null, '1.0');
    wp_enqueue_style('garahtools-bootstrap-select-css', get_template_directory_uri() . '/assets/css/bootstrap-select.min.css', null, '1.0');
    wp_enqueue_style('garahtools-magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.min.css', null, '1.0');
    wp_enqueue_style('garahtools-loader-css', get_template_directory_uri() . '/assets/css/loader.min.css', null, '1.0');
    wp_enqueue_style('garahtools-style-css', get_template_directory_uri() . '/assets/css/style.css', null, '1.0');
    wp_enqueue_style('garahtools-flaticon-css', get_template_directory_uri() . '/assets/css/flaticon.min.css', null, '1.0');
    wp_enqueue_style('garahtools-lightbox-css', get_template_directory_uri() . '/assets/css/lc_lightbox.css', null, '1.0');
    wp_enqueue_style('garahtools-skin2-css', get_template_directory_uri() . '/assets/css/skin/skin-2.css', null, '1.0');
    wp_enqueue_style('garahtools-switcher-css', get_template_directory_uri() . '/assets/css/switcher.css', null, '1.0');
    wp_enqueue_style('garahtools-revolution-settings-css', get_template_directory_uri() . '/assets/plugins/revolution/revolution/css/settings.css', null, '1.0');
    wp_enqueue_style('garahtools-revolution-navigation-css', get_template_directory_uri() . '/assets/plugins/revolution/revolution/css/navigation.css', null, '1.0');

    wp_enqueue_style('garahtools-google-fonts-teko', '//fonts.googleapis.com/css?family=Teko:300,400,500,600,700&amp;display=swap');
    wp_enqueue_style('garahtools-google-fonts-poppins', '//fonts.googleapis.com/css?family=Poppins&amp;display=swap');
    wp_enqueue_style('garahtools-google-fonts-roboto', '//fonts.googleapis.com/css?family=Roboto:400,500,700,900&amp;display=swap');

    // wp_enqueue_style( 'garahtools-editor-style.css', get_template_directory_uri().'/assets/css/editor-style.css',null,'1.0'); 
    // wp_enqueue_style( 'garahtools-rev-slider-12.css', get_template_directory_uri().'/assets/css/rev-slider-12.css',null,'1.0'); 
    wp_enqueue_style('garahtools-main-style', get_stylesheet_uri(), null, VERSION);



    wp_enqueue_script('garahtools-popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('garahtools-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('garahtools-bootstrap-select-js', get_template_directory_uri() . '/assets/js/bootstrap-select.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('garahtools-magnific-popup-js', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('garahtools-waypoints-js', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('garahtools-counterup-js', get_template_directory_uri() . '/assets/js/counterup.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('garahtools-waypoints-sticky-js', get_template_directory_uri() . '/assets/js/waypoints-sticky.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('garahtools-isotope.pkgd-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('garahtools-owl.carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('garahtools-stellar-js', get_template_directory_uri() . '/assets/js/stellar.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('garahtools-theia-sticky-sidebar-js', get_template_directory_uri() . '/assets/js/theia-sticky-sidebar.js', array('jquery'), '1.0', true);
    wp_enqueue_script('garahtools-jquery-bootstrap-touchspin-js', get_template_directory_uri() . '/assets/js/jquery.bootstrap-touchspin.js', array('jquery'), '1.0', true);
    wp_enqueue_script('garahtools-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0', true);
    wp_enqueue_script('garahtools-lc-lightbox-js', get_template_directory_uri() . '/assets/js/lc_lightbox.lite.js', array('jquery'), '1.0', true);
    wp_enqueue_script('garahtools-switcher-js', get_template_directory_uri() . '/assets/js/switcher.js', array('jquery'), '1.0', true);

    wp_enqueue_script('garahtools-themepunch-tools-js', get_template_directory_uri() . '/assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('garahtools-themepunch-revolution-js', get_template_directory_uri() . '/assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('garahtools-revolution-plugin-js', get_template_directory_uri() . '/assets/plugins/revolution/revolution/js/extensions/revolution-plugin.js', array('jquery'), '1.0', true);
    wp_enqueue_script('garahtools-rev-script-10-js', get_template_directory_uri() . '/assets/js/rev-script-10.js', array('jquery'), '1.0', true);



    // wp_enqueue_script( 'garahtools-map.script.js', get_template_directory_uri().'/assets/js/map.script.js', array('jquery'),'1.0',true); 
    // wp_enqueue_script( 'garahtools-rev-script-1.js', get_template_directory_uri().'/assets/js/rev-script-1.js', array('jquery'),'1.0',true); 
    // wp_enqueue_script( 'garahtools-rev-script-11.js', get_template_directory_uri().'/assets/js/rev-script-11.js', array('jquery'),'1.0',true); 
    // wp_enqueue_script( 'garahtools-rev-script-12.js', get_template_directory_uri().'/assets/js/rev-script-12.js', array('jquery'),'1.0',true); 
    // wp_enqueue_script( 'garahtools-rev-script-2.js', get_template_directory_uri().'/assets/js/rev-script-2.js', array('jquery'),'1.0',true); 
    // wp_enqueue_script( 'garahtools-rev-script-3.js', get_template_directory_uri().'/assets/js/rev-script-3.js', array('jquery'),'1.0',true); 
    // wp_enqueue_script( 'garahtools-rev-script-4.js', get_template_directory_uri().'/assets/js/rev-script-4.js', array('jquery'),'1.0',true); 
    // wp_enqueue_script( 'garahtools-rev-script-5.js', get_template_directory_uri().'/assets/js/rev-script-5.js', array('jquery'),'1.0',true); 
    // wp_enqueue_script( 'garahtools-rev-script-6.js', get_template_directory_uri().'/assets/js/rev-script-6.js', array('jquery'),'1.0',true); 
    // wp_enqueue_script( 'garahtools-rev-script-7.js', get_template_directory_uri().'/assets/js/rev-script-7.js', array('jquery'),'1.0',true); 
    // wp_enqueue_script( 'garahtools-rev-script-8.js', get_template_directory_uri().'/assets/js/rev-script-8.js', array('jquery'),'1.0',true); 
    // wp_enqueue_script( 'garahtools-rev-script-9.js', get_template_directory_uri().'/assets/js/rev-script-9.js', array('jquery'),'1.0',true); 

}

add_action('wp_enqueue_scripts', 'garahtools_assets');



// Register Widgets
function garahtools_widgets()
{
    register_sidebar(array(
        'name'          => __('Footer One', 'garahtools'),
        'id'            => 'footer-one',
        'description'   => __('Widgets in this area will be shown on footer area.', 'garahtools'),
        'before_widget' => '<div id="%1$s" class="widget widget_about %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ));


    register_sidebar(array(
        'name'          => __('Footer Two', 'garahtools'),
        'id'            => 'footer-two',
        'description'   => __('Widgets in this area will be shown on footer area.', 'garahtools'),
        'before_widget' => '<div id="%1$s" class="widget widget_services %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));


    register_sidebar(array(
        'name'          => __('Footer Three', 'garahtools'),
        'id'            => 'footer-three',
        'description'   => __('Widgets in this area will be shown on footer area.', 'garahtools'),
        'before_widget' => '<div id="%1$s" class="widget widget_services %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));


    register_sidebar(array(
        'name'          => __('Footer Four', 'garahtools'),
        'id'            => 'footer-four',
        'description'   => __('Widgets in this area will be shown on footer area.', 'garahtools'),
        'before_widget' => '<div id="%1$s" class="widget widget_newsletter %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget widget_newsletter">',
        'after_title'   => '</h3>',
    ));


    register_sidebar(array(
        'name'          => __('Footer Menu', 'garahtools'),
        'id'            => 'footer-menu',
        'description'   => __('Widgets in this area will be shown on footer area.', 'garahtools'),
        'before_widget' => '<ul id="%1$s" class="copyrights-nav %2$s">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));


    register_sidebar(array(
        'name'          => __('Shop', 'garahtools'),
        'id'            => 'shop',
        'description'   => __('Widgets in this area will be shown on footer area.', 'garahtools'),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ));
}

add_action('widgets_init', 'garahtools_widgets');



// Create Shortcode to Display Projects Post Meta

function garahtools_create_shortcode_projects_post_meta()
{
    $garahtools_query = get_post_meta(17, 'garahtools_section_project_metabox', true);

    if ($garahtools_query) :
        $garahtools_projects = $garahtools_query['projects'];
        $result = '';
        foreach ($garahtools_projects as $garahtools_project) :
            $result .= '<ul>';
            $result .= '<li>' . $garahtools_project['title'] . '</li>';
            $result .= '</ul>';
        endforeach;
    endif;

    return $result;
}

add_shortcode('projects_list', 'garahtools_create_shortcode_projects_post_meta');



// Create Shortcode to Display Services Post Meta

function garahtools_create_shortcode_services_post_meta()
{

    $garahtools_query = get_post_meta(18, 'garahtools_section_service_metabox', true);

    if ($garahtools_query) :
        $garahtools_services = $garahtools_query['services'];
        $result = '';
        foreach ($garahtools_services as $garahtools_service) :
            $result .= '<ul>';
            $result .= '<li>' . $garahtools_service['title'] . '</li>';
            $result .= '</ul>';
        endforeach;
    endif;

    return $result;
}

add_shortcode('services_list', 'garahtools_create_shortcode_services_post_meta');



// 
//Woocommerce
// 



//
// SHOP PAGE HOOK
//

// add_filter('wp_calculate_image_sizes', '__return_empty_array');
// add_filter('wp_calculate_image_srcset', '__return_empty_array');


remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
// remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
// remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
// remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
// remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price',10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
// remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);



// add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

// add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);

// // add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);



// function garahtools_before_shop_loop_item()
// {
//     echo '<div class="wt-box wt-product-box block-shadow  overflow-hide"><div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">';
// }
// add_action('woocommerce_before_shop_loop_item', 'garahtools_before_shop_loop_item');




// function garahtools_after_shop_loop_item_title()
// {
//     echo '</div>';
// }

// add_action('woocommerce_after_shop_loop_item_title', 'garahtools_after_shop_loop_item_title');

// function garahtools_after_shop_loop_item()
// {
//     echo '</div>';
// }

// add_action('woocommerce_after_shop_loop_item', 'garahtools_after_shop_loop_item');




// function simpleshop_product_add_to_cart_text($text){
// 	return '<i class="fa fa-cart-plus wt-icon-box-xs"></i>';
// }
// add_filter('woocommerce_product_add_to_cart_text','simpleshop_product_add_to_cart_text');





//
// SINGLE PRODUCT PAGE HOOK
//

remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);


remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
add_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);







/**
 * Filter WooCommerce  Search Field
 *
 */
function garahtools_custom_product_searchform($form)
{

    print_r($form);
    die();

    $form = '<form role="search" method="get" id="searchform" action="' . esc_url(home_url('/')) . '">
                        <div>
                                <label class="screen-reader-text" for="s">' . __('Search for:', 'woocommerce') . '</label>
                                <button type="submit" id="searchsubmit" />
                                        <span class="icon"><i class="fa fa-search"></i></span>   
                                </button>  
                                <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __('Search products...ggg', 'woocommerce') . '" />                           
                                 <input type="hidden" name="post_type" value="product" />
                        </div>
                </form>';
    return $form;
}

add_filter('get_product_search_form', 'garahtools_custom_product_searchform');
