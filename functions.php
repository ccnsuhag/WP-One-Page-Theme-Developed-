<?php

require_once('template-parts/content-header.php');
require_once('template-parts/content-schedule.php');

require_once('template-parts/content-speaker.php');
require_once('template-parts/content-sticker.php');

require_once('inc/shortcode-mapper.php');


if ( ! function_exists( 'myfirsttheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function myfirsttheme_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'right'   => __( 'Right Menu', 'onepage' ),
        'secondary' => __('Secondary Menu', 'onepage' )
    ) );

    function add_menuclass($ulclass) {
        return preg_replace('/<a /', '<a class="page-scroll"', $ulclass);
     }
     add_filter('wp_nav_menu','add_menuclass');
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'myfirsttheme_setup' );




function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
   
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '', 'all');
    wp_enqueue_style( 'style-main', get_template_directory_uri() . '/css/style.css', array(), '', 'all');
    wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/css/themify-icons.css', array(), '', 'all');
    wp_enqueue_style( 'dosis-font', get_template_directory_uri() . '/css/dosis-font.css', array(), '', 'all');
    

    wp_enqueue_script( 'jquery-main', get_template_directory_uri() . '/js/jquery.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'scrolling-nav', get_template_directory_uri() . '/js/scrolling-nav.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'validator', get_template_directory_uri() . '/js/validator.js', array ( 'jquery' ), 1.1, true);

   
      if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
      }
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );





?>