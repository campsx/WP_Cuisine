<?php

add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ) {
    function wpt_setup() {
       register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
    }
}
require_once('WpBootstrapNavwalker.php');

/* Add fonts to the Wordpress theme*/
function wp_Cuisine_fonts(){
  wp_enqueue_style( 'awesome-font', get_template_directory_uri() . '/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'wp_Cuisine_fonts' );

function myMenus(){
  //register_nav_menu('main_menu', 'Menu principal');
  register_nav_menu('footer_menu', 'Menu pied de page');
}

add_action('init', 'myMenus');

function mySidebars(){
  register_sidebar([
      'name'   => 'Barre latéral',
      'description' => 'Cette colone',
      'id' => 'sidebar-1'
  ]);
}
add_action('widgets_init', 'mySidebars');

function add_jquery() {
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.1.1.min');
}
add_action( 'wp_enqueue_scripts', 'add_jquery' );

/* Add bootstrap to the Wordpress theme */
function script_add_bootstrap() {
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
}
add_action( 'wp_enqueue_scripts', 'script_add_bootstrap' );

function style_add_bootstrap() {
  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
}
add_action('wp_enqueue_scripts', 'style_add_bootstrap');

/* Add our style in the end for override */
function wp_Cuisine_scripts(){
  wp_enqueue_style( 'WP_Cuisine-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wp_Cuisine_scripts' );
