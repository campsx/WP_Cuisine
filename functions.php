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

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}


if ( function_exists('register_sidebar') )
  register_sidebar(array('name'=>'Sidebar',
  'before_widget' => '<div>',
  'after_widget' => '</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>',
));

/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform form-inline" action="' . home_url( '/' ) . '" >
      <div class="form-group">
        <input placeholder="'. __( 'Search for:' ) . '" class="form-control" type="text" value="' . get_search_query() . '" name="s" id="s" />
        <input class="btn btn-default" type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
      </div>
    </form>';

    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );

function displayDifficulty($difficulty){
	$value = null;
	$difficulty = trim(strtolower($difficulty));
	
	if($difficulty == "facile" || $difficulty == "moyen" || $difficulty == "difficile"){

		$value .= '<h4>Difficulté : <i class="fa fa-star" aria-hidden="true"></i>';
		if($difficulty == "facile")
			$value .= '<i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>';
		else if($difficulty == "moyen")
			$value .= '<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>';
		else
			$value .= '<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>';
		$value .= "</h4>";

	}elseif($difficulty != null){
		$value .= "<h4>Difficulté : Mal-renseignée : Merci de choisir 'facile', 'moyen' ou 'difficile'</h4>";
	}
	return $value;
}