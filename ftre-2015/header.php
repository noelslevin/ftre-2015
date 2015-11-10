<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_enqueue_style( 'ftre-2015-style', get_stylesheet_uri() ); ?>
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
      <header>
          <a class="menu-link" href="#">&#9776; Menu</a>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
          <a href="/" class="header-link">
              <div class="ftre-logo">
                <img class="header-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ftre-logo.png" alt="From the Rookery End" />
                  <h1 class="hidden"><?php bloginfo('name'); ?></h1>
              </div>
          </a>
      </header>