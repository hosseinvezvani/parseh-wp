<?php
/**START load_file*//////////////////////////////////////////////////////////////////////
function load_file(){
    wp_enqueue_style('lightbox', get_template_directory_uri() . '/assets/css/ekko-lightbox.css',false);
    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css',false);
    wp_enqueue_style('bootstrap-rtl', get_template_directory_uri() . '/assets/css/bootstrap-rtl.min.css',false);
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.min.css',false);
    wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/aos.css',false);
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css',false);
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css',false);


    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/aos.js', array(), '1.0.0', true );
    wp_enqueue_script( 'FontAwesome', get_template_directory_uri() . '/assets/FontAwesome.Pro.5.12.0.Web/js/all.js', array(), '1.0.0', true );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap.bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'ekko-lightbox', get_template_directory_uri() . '/assets/js/ekko-lightbox.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'Custom', get_template_directory_uri() . '/assets/js/Custom.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'load_file' );
/***************Start menu**************/
// Include custom navwalker//////////////////////////////////////////////////////////////
require_once('inc/bs4navwalker.php');

// Register WordPress nav menu///////////////////////////////////////////////////////////
register_nav_menu('main-menu', 'منوی اصلی سایت');

// Register WordPress img-size//////////////////////////////////////////////////////////
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}
if (function_exists('add_image_size')){
    add_image_size( 'blog_posts_img', 187, 155,true);
    add_image_size( 'filter_posts_img', 192, 132,true);
    add_image_size( 'filter_lightbox_posts_img', 800, 600,true);
    add_image_size( 'img_team', 150, 150,true);
    add_image_size( 'some_claints_img', 100, 80,true);
    add_image_size( 'slider_img', 500, 500,true);
    add_image_size( 'post_single_page_img', 225, 200,true);
    add_image_size( 'relatedpost_img',50, 50,false);
}
//start post_view//////////////////////////////////////////////////////////////////////
function gt_get_post_view() {
    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
    return "$count بازدید";
}
function gt_set_post_view() {
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );
}
function gt_posts_column_views( $columns ) {
    $columns['post_views'] = 'Views';
    return $columns;
}
function gt_posts_custom_column_views( $column ) {
    if ( $column === 'post_views') {
        echo gt_get_post_view();
    }
}
add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );

///////////Start the_title_excerpt///////////////////////////////////////////////////////////////
function the_title_excerpt($before = '', $after = '', $echo = true, $length = false)
{
    $title = get_the_title();

    if ( $length && is_numeric($length) ) {
        $title = substr( $title, 0, $length );
    }

    if ( strlen($title)> 0 ) {
        $title = apply_filters('the_title_excerpt', $before . $title . $after, $before, $after);
        if ( $echo )
            echo $title;
        else
            return $title;
    }
}
//breadcrumb
function the_breadcrumb() {
    $sep = ' / ';
    if (!is_front_page()) {
        // Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        echo '<i class="fal fa-home fa-2x"></i>خانه</a>' . $sep;
        // Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category(' > ');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }
        // If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }
        // If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
        // if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) {
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }
        echo '</div>';
    }
}
// wp-bootstrap4.4-pagination.php for the awesome walker/////////////////////////////
class Topbar_Menu_Walker extends Walker_Nav_Menu
{
    // add main/sub classes to li's and links(&$output, $item,
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        // passed classes
        $classes = empty($item->classes) ? array() : (array)$item->classes;
        $class_names = esc_attr(implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item)));
        $active = in_array('current-menu-item', $item->classes);
        $indent = ' ';
        // build html
        $output .= $indent . '<li class="nav-item">';
        // link attributes
        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        if (in_array('current-menu-item', $item->classes)) {
            $attributes .= ' class="nav-link active"';
            $item_output = sprintf('%1$s<a%2$s>%3$s%4$s%5$s  <span class="sr-only">(current)</span></a>%6$s',
                $args->before,
                $attributes,
                $args->link_before,
                apply_filters('the_title', $item->title, $item->ID),
                $args->link_after,
                $args->after
            );
        } else {
            $attributes .= ' class="nav-link"';
            $item_output = sprintf('%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
                $args->before,
                $attributes,
                $args->link_before,
                apply_filters('the_title', $item->title, $item->ID),
                $args->link_after,
                $args->after
            );
        }
        // build html
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
?>