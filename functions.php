<?php

function myScriptStyles(){
  xp_enqueue_style('main_style');
}


function myMenus(){
  register_nav_menu('main_menu', 'Menu principal');
  register_nav_menu('footer_menu', 'Menu pied de page');
}

add_action('init', 'myMenus');

function mySidebars(){
  register_sidebar([
      'name'   => 'Barre latéral',
      'description' => 'Cette colone bite',
      'id' => 'sidebar-1'
  ]);
}
add_action('widgets_init', 'mySidebars');

/* Image à la une */
add_theme_support('post-thumbnails');

add_theme_support('custom-background');

/* custom post thumdflgdl */

add_action('after_setup_theme', 'wpdocs_theme_setup');

function wpdocs_theme_setup(){
  add_image_size( 'banner', 1240, 150, true);
}
