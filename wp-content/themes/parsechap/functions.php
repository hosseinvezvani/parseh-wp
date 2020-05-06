<?php
/**START load_file*/
function load_file(){
    wp_enqueue_style('lightbox', get_template_directory_uri() . '/assets/css/ekko-lightbox.css',false);
    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css',false);
    wp_enqueue_style('bootstrap-rtl', get_template_directory_uri() . '/assets/css/bootstrap-rtl.min.css',false);
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.min.css',false);
    wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/aos.css',false);
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css',false);
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css',false);


    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'FontAwesome', get_template_directory_uri() . '/assets/FontAwesome.Pro.5.12.0.Web/js/all.js', array(), '1.0.0', true );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap.bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'ekko-lightbox', get_template_directory_uri() . '/assets/js/ekko-lightbox.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'Custom', get_template_directory_uri() . '/assets/js/Custom.js', array(), '1.0.0', true );
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/aos.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'load_file' );
/***************Start menu**************/
// Include custom navwalker
require_once('inc/bs4navwalker.php');

// Register WordPress nav menu
register_nav_menu('main-menu', 'منوی اصلی سایت');
?>