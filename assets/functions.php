<?php
/**
 * Theme functions.
 *
 * @package luminio
 */

 add_theme_support('menus');
 add_post_type_support( 'page', 'excerpt' );
 add_post_type_support( 'post', 'excerpt' );
 add_theme_support('post-thumbnails');
 add_image_size('featured-l', 1200 , 900, false, array( 'jpeg_quality' => 100 ));
 add_image_size('acf-image', 1200 , 900, false,array( 'jpeg_quality' => 100 ) );
 add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'video' ) );
 add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
 // Add custom logo on customizer
 add_theme_support( 'custom-logo' );
 // site title
 add_theme_support( 'title-tag' );

/**
 * Menus
 */
register_nav_menus(array(
	'primary' => 'Primary Menu',
  ));

add_action('wp_enqueue_scripts', 'luminio_theme_scripts');
function luminio_theme_scripts()
{
  wp_register_style( 'luminio-style', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all' );

   // Homepage
   wp_register_style( 'homepage-luminio', get_template_directory_uri() . '/assets/css/homepage.css', array(), filemtime(get_template_directory() . '/assets/css/homepage.css'), 'all' );

    // header
    wp_register_style( 'header-luminio', get_template_directory_uri() . '/assets/css/header.css', array(), filemtime(get_template_directory() . '/assets/css/header.css'), 'all' );

  wp_register_script( 'custom-js', get_template_directory_uri() . '/assets/js/app.js', '',filemtime(get_template_directory() . '/assets/js/app.js'), true );

 wp_enqueue_script('custom-js');
  wp_enqueue_style('luminio-style');
 wp_enqueue_style('header-luminio');
 wp_enqueue_style('homepage-luminio');

}


/*allow svg*/
function custom_mime_types( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'custom_mime_types' );


