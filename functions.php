<?php

function myScriptStyles(){
  wp_enqueue_style('main_style');
}


function myMenus(){
  register_nav_menu('main_menu', 'Menu principal');
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




/* Add bootstrap to the Wordpress theme*/
function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
}

add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );
