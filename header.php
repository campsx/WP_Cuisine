<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://127.0.0.1/WP_Cuisine/wp-content/themes/WP_Cuisine/style.css">
    	<link rel="stylesheet" href="http://127.0.0.1/WP_Cuisine/wp-content/themes/WP_Cuisine/css/font-awesome.min.css">
    <title><?php
    wp_title();
    echo " | ";
    bloginfo('name');
     ?></title>
     <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
