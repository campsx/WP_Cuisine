<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
    wp_title();
    echo " | ";
    bloginfo('name');
     ?></title>
     <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <div class="row">
        <div class="col-sm-1">Icone</div>
        <div class="col-sm-3">Titre</div>
        <div class="col-sm-8">NavBar</div>
      </div>
    </header>