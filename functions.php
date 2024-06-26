<?php


require get_template_directory() . '/inc/customizer.php';

function sajiddev_load_scripts()
{
 wp_enqueue_style('sajiddev-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');

 wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);
 wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.1', true);
}
add_action('wp_enqueue_scripts', 'sajiddev_load_scripts');


function sajiddev_config(){

     $textdomain = 'sajiddev';
     load_theme_textdomain($textdomain, get_template_directory(). '/languages/');




     /********** Nav Menu ***********/
     register_nav_menus(
          array(
          'wp_sajiddev_main_menu' => 'Main Menu',
          'wp_sajiddev_footer_menu' => 'Footer Menu'
          )
     ); 

     $args = array(
          'height' => 225,
          'width' => 1920
     );
     add_theme_support('custom-header', $args);
     /********** Thumbnails ***********/
     add_theme_support('post-thumbnails');

     /********** Logo ***********/
     add_theme_support('custom-logo', array(
          'width' => 200,
          'height' => 110,
          'flex-width' => true,
          'flex-height' => true, 
     ));

     add_theme_support('automatic-feed-links');
     add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
     add_theme_support('title-tag');
 }
 add_action('after_setup_theme', 'sajiddev_config', 0);
 
 /********** Sidebar ***********/
 add_action('widgets_init', 'sajiddev_sidebars');
 function sajiddev_sidebars(){
     register_sidebar(
          array(
               'name' => __('Blog Sidebar', 'sajiddev'),
               'id' => 'sidebar-blog',
               'description' => __('This is a Blog Sidebar. You can add swidgets here...', 'sajiddev'),
               'before_widget' => '<div class="widget-wrapper">',
               'after_widget' => '</div>',
               'before_title' => '<h4 class="widget-title">',
               'after_title' => '</h4>'
          ) 
     );

     register_sidebar(
          array(
               'name' => __('Services 1', 'sajiddev'),
               'id' => 'services-1',
               'description' => __('This is a Sevices Sidebar. You can add service here.', 'sajiddev'),
               'before_widget' => '<div class="widget-wrapper">',
               'after_widget' => '</div>',
               'before_title' => '<h4 class="widget-title">',
               'after_title' => '</h4>'
          )
     );
     
     register_sidebar(
          array(
               'name' => __('Services 2', 'sajiddev'),
               'id' => 'services-2',
               'description' => __('This is a Sevices Sidebar. You can add service here.', 'sajiddev'),
               'before_widget' => '<div class="widget-wrapper">',
               'after_widget' => '</div>',
               'before_title' => '<h4 class="widget-title">',
               'after_title' => '</h4>'
          )
     );
     
     register_sidebar(
          array(
               'name' => __('Services 3', 'sajiddev'),
               'id' => 'services-3',
               'description' => __('This is a Sevices Sidebar. You can add service here.', 'sajiddev'),
               'before_widget' => '<div class="widget-wrapper">',
               'after_widget' => '</div>',
               'before_title' => '<h4 class="widget-title">',
               'after_title' => '</h4>'
          )
     );
     
 }

if ( ! function_exists('wp_body_open') ) {
     function wp_body_open(){
          do_action('wp_body_open');
     }
}