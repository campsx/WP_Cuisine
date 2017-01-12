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
      <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <?php
                wp_nav_menu( array(
                'menu' => 'top_menu',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'nav navbar-nav navbar-right',
                'walker' => new WpBootstrapNavwalker())
                );
              ?>
            </div>
        </div>
      </nav>
    </header>
