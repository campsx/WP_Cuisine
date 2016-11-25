<?php
/*  */
function my_scripts_styles()
{
	wp_enqueue_style('bootstrap-css',get_template_directory_uri().'css/bootstrap.min.css');
	wp_enqueue_style('main_style',get_stylesheet_uri());
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts', 'my_scripts_styles');

function my_menus()
{
	register_nav_menu('main_menu', 'Menu Principal');
	register_nav_menu('footer_menu', 'Menu de pied de page');
}

add_action('init', 'my_menus');

function my_sidebars()
{
	register_sidebar(array(
		'name' 			=> 'Barre latérale',
		'description'	=> 'Cette colonne s\'affiche sur toutes les pages, pour l\'instant...',
		'id'			=> 'sidebar-1'
	));
}

add_action('widgets_init','my_sidebars');

/* En-tête  */
add_theme_support("custom-header");