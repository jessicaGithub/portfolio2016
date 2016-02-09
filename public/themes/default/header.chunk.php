<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="<?php echo Site::url(); ?>" />
    <link rel="dns-prefetch" href="//www.google-analytics.com" />
    
    <title><?php echo Site::name() . ' - ' . Site::title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo Site::description(); ?>">
    <meta name="keywords" content="<?php echo Site::keywords(); ?>">
    <meta name="robots" content="<?php echo Page::robots(); ?>">

    <?php Action::run('theme_meta'); ?>

    <!-- Open Graph Protocol -->
    <meta property="og:site_name" content="<?php echo Site::name(); ?>">
    <meta property="og:url" content="<?php echo Url::current(); ?>">
    <meta property="og:title" content="<?php echo Site::title(); ?> | <?php echo Site::name(); ?>">

    <!-- Google+ Snippets -->
    <meta itemprop="url" content="<?php echo Url::current(); ?>">
    <meta itemprop="name" content="<?php echo Site::title(); ?> | <?php echo Site::name(); ?>">

    <!-- Styles -->
    <?php Stylesheet::add('public/assets/css/app.css', 'frontend', 2); ?>
    <?php Stylesheet::load(); ?>

    <?php Action::run('theme_header'); ?>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav-icons -->
    <link rel="icon" href="<?php echo Site::url(); ?>/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo Site::url(); ?>/favicon.ico" type="image/x-icon">
  </head>

  <body>

  <div class="masthead">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="menu_toggle_container">
            <svg version="1.1" id="menu_toggle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
              <style type="text/css">
                .menu_toggle_lines{fill:none;stroke:#000000;stroke-width:5;stroke-miterlimit:10;}
              </style>
              <line id="menu_toggle_line_1" class="menu_toggle_lines" x1="18" y1="28.5" x2="83" y2="28.5"/>
              <line id="menu_toggle_line_2" class="menu_toggle_lines" x1="18" y1="50.5" x2="83" y2="50.5"/>
              <line id="menu_toggle_line_3" class="menu_toggle_lines" x1="18" y1="71.5" x2="83" y2="71.5"/>
            </svg>
          </a>
          <a class="navbar-brand" href="<?php echo Site::url(); ?>">
            <svg version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
              <style type="text/css">
                .logo{font-family:'PlayfairDisplay-Black'; font-size:78.0978px;}
              </style>
              <text id="j_left" transform="matrix(1 0 0 1 21.316 70.7146)" class="logo">J</text>
              <text id="j_right" transform="matrix(-1 0 0 1 78.8703 70.7146)" class="logo">J</text>
            </svg>
          </a>
        </div>
        <div class="overlay_menu">
          <ul>
              <?php //echo Menu::get(); ?>
              <?php //Users::getPanel(); ?>
              <li class="active" data-menuanchor="da-riddles"><a href="#da-riddles">Riddles</a></li>
              <li data-menuanchor="da-about"><a href="#da-about">About Me</a></li>
              <li data-menuanchor="da-gallery"><a href="#da-gallery">What I Do</a></li>
              <li data-menuanchor="da-contact"><a href="#da-contact">Contact Me</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php Action::run('theme_pre_content'); ?>
        </div>
    </div>
  </div>
