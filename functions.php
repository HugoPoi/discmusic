<?php

/**
 * Proper way to enqueue scripts and styles
 */
function theme_scripts() {

  wp_enqueue_style( 'style', get_bloginfo( 'stylesheet_url' ), array('bootstrap'), filemtime(realpath(dirname(__FILE__)).'/style.css' ));
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css', array(), '3.3.4' );
  wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array('jquery'), '3.3.4', true );

}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );


add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'discmusic' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'discmusic' ),
  ) );

add_theme_support( 'post-thumbnails' );
