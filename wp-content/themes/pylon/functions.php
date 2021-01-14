<?php
// codester framework include
require_once(get_template_directory().'/inc/navwalker.php');
require_once(get_template_directory().'/inc/mj-wp-breadcrumb.php');
require_once(get_template_directory().'/inc/custom-post.php');
require_once(get_template_directory().'/theme-options/cs-framework.php');
define("VERSION", time());
define("ASSETS_DIR",get_template_directory_uri()."/assets/");
function godo_khaisha_hiou_theme_setup(){
    load_theme_textdomain('Godo Khaisha Hiou',get_template_directory_uri()."/language");
        add_theme_support('post-thumbnails');
        add_theme_support('title-tags');
        add_theme_support('automatic-feed-links');
        add_theme_support('html5',array(
                'search-form',
                'comment-form',
                'gallary',
                'caption',
                'comment-list'
        ));
        add_theme_support('custom-logo');
        register_nav_menu("top-menu",__("TOP MENU","Godo Khaisha Hiou"));
        register_nav_menu("footer-menu-left",__("Footer Left MENU","Godo Khaisha Hiou"));
        register_nav_menu("footer-menu-right",__("Footer Right MENU","Godo Khaisha Hiou"));
        add_image_size('blog_image', 370,250,true);
        add_image_size('single_blog', 1170,790,true);

}
add_action('after_setup_theme','godo_khaisha_hiou_theme_setup');


function godo_khaisha_hiou_assets(){
    $css_files = array(
        'google-font-css'       => 'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swapp',
        'bootstrap-css'     => ASSETS_DIR.'css/bootstrap.min.css',
        'fontawesome-all'           => ASSETS_DIR.'css/fontawesome-all.min.csss',
        'fontawesome-min'       => ASSETS_DIR.'css/font-awesome.min.css',
        'swiper-css'            => ASSETS_DIR.'css/swiper.min.css',
        'animate-css'       => ASSETS_DIR.'css/animate.min.css',
        'pylon-css'         => ASSETS_DIR.'css/pylon-icons.css',
        'odmeter-css'           => ASSETS_DIR.'css/odometer.min.css',
        'magnific-css'      => ASSETS_DIR.'css/magnific-popup.css',
        'bootstrap-sectct-css'          => ASSETS_DIR.'css/bootstrap-select.min.css',
        'nouislider-css'            => ASSETS_DIR.'css/nouislider.min.css',
        'nouislider-pips-css'           => ASSETS_DIR.'css/nouislider.pips.css',
        'bxslider-css'          => ASSETS_DIR.'css/bxslider.min.css',
        'popup-css'             => ASSETS_DIR.'css/magnific-popup.css',
        'main-css'          => ASSETS_DIR.'css/main.css',
        'media-css'             => ASSETS_DIR.'css/media.css',
    );
    foreach ($css_files as $handle => $css_file) {
        wp_enqueue_style($handle, $css_file, null, VERSION);
    }
    wp_enqueue_style("japan-css",get_stylesheet_uri(), null, VERSION);

    $js_files = array(
        'bootstrap-js' =>  array('src' => ASSETS_DIR. 'js/bootstrap.bundle.min.js', 'dep' => array('jquery')),
        'swiper-js' =>  array('src' => ASSETS_DIR. 'js/swiper.min.js', 'dep' => array('jquery')),
        'jquery-ajaxchip-js' =>  array('src' => ASSETS_DIR. 'js/jquery.ajaxchimp.min.js', 'dep' => array('jquery')),
        'magnific-js' =>  array('src' => ASSETS_DIR. 'js/jquery.magnific-popup.min.js', 'dep' => array('jquery')),
        'validate-js' =>  array('src' => ASSETS_DIR. 'js/jquery.validate.min.js', 'dep' => array('jquery')),
        'botstrap-select-js' =>  array('src' => ASSETS_DIR. 'js/bootstrap-select.min.js', 'dep' => array('jquery')),
        'wow-js' =>  array('src' => ASSETS_DIR. 'js/wow.js', 'dep' => array('jquery')),
        'adometer-js' =>  array('src' => ASSETS_DIR. 'js/odometer.min.js', 'dep' => array('jquery')),
        'appear-js' =>  array('src' => ASSETS_DIR. 'js/jquery.appear.min.js', 'dep' => array('jquery')),
        'wnumb-js' =>  array('src' => ASSETS_DIR. 'js/wNumb.min.js', 'dep' => array('jquery')),
        'nouislider-js' =>  array('src' => ASSETS_DIR. 'js/nouislider.min.js', 'dep' => array('jquery')),
        'bxslider-js' =>  array('src' => ASSETS_DIR. 'js/bxslider.min.js', 'dep' => array('jquery')),
        'isotop-js' =>  array('src' => ASSETS_DIR. 'js/isotope.pkgd.min.js'),
        'popup-js' =>  array('src' => ASSETS_DIR. 'js/jquery.magnific-popup.js', 'dep' => array('jquery')),
        'theme-active-js' =>  array('src' => ASSETS_DIR. 'js/theme.js', 'dep' => array('jquery'))

         );
    foreach ($js_files as $handle => $js_file) {
        wp_enqueue_script($handle , $js_file['src'], isset($js_file['dep']) ? $js_file['dep']: null,VERSION,true);
    }
    /*

    */
}
add_action('wp_enqueue_scripts','godo_khaisha_hiou_assets');

function godo_khaisha_hiou_footer_menu_one() {
    register_sidebar( array(
        'name'          => __( 'Footer Left Menu Sideber', 'godo khaisha hiou' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Add Some Footer Menu', 'godo khaisha hiou' ),
        'before_widget' => '<ul id="%1$s" class="widget %2$s">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h3 class="footer-widget__title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'godo_khaisha_hiou_footer_menu_one' );

function godo_khaisha_hiou_footer_menu_two() {
    register_sidebar( array(
        'name'          => __( 'Footer Right Menu Sideber', 'godo khaisha hiou' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Add Some Footer Menu', 'godo khaisha hiou' ),
        'before_widget' => '<ul id="%1$s" class="widget %2$s">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h3 class="footer-widget__title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'godo_khaisha_hiou_footer_menu_two' );

function godo_khaisha_hiou_footer_address() {
    register_sidebar( array(
        'name'          => __( 'Footer Address Sideber', 'godo khaisha hiou' ),
        'id'            => 'sidebar-4',
        'description'   => __( 'Write Here your office address', 'godo khaisha hiou' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget__title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'godo_khaisha_hiou_footer_address' );

function godo_khaisha_hiou_blog_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Blog Sideber', 'godo khaisha hiou' ),
        'id'            => 'blog_sidebar',
        'description'   => __( 'Add any widgets', 'godo khaisha hiou' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget__title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'godo_khaisha_hiou_blog_sidebar' );

function godo_khaisha_hiou_widget_nav_menu_args($nav_menu_args,$nav_menu,$args,$instance){
    $nav_menu_args['menu_class'] = 'list-unstyled footer-widget__link-list';
    return $nav_menu_args;
}
add_filter('widget_nav_menu_args','godo_khaisha_hiou_widget_nav_menu_args',10,4);


