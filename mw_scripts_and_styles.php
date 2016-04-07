<?php
function mw_scripts_and_styles(){
  global $post;
  $prefix = 'mw-';
  $suffix = ".min.";

  //add in the scripts call here
  wp_enqueue_script('jquery');

  wp_enqueue_script( $prefix . 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), time(), false);
  wp_enqueue_script( $prefix . 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), time(), false);

  wp_enqueue_style( $prefix . 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', null, time() );
  wp_enqueue_style( $prefix . 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', null, time() );
  wp_enqueue_style( $prefix . 'style', get_template_directory_uri() . '/css/style.css', null, time() );

  $theme_data = array(
    'url' => get_bloginfo('wpurl'),
    'theme_path' => get_template_directory_uri()
  );
  wp_localize_script( $prefix . 'main-js', 'mw_theme', $theme_data );
}
add_action( 'wp_enqueue_scripts', 'mw_scripts_and_styles' );
  ?>
