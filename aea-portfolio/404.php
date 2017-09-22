<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>
<body>

<div class="spinner-container"><div class="spinner"></div></div>

<div class="page-wrapper">
  
  <div class="content-wrapper"> 

    <div class="sidebar-image"></div>
    
    <div class="page-content">
      
      <div class="header-wrapper">

        <header>
            <div class="header__container">
                <a class="header__logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><h3 id="logo" class="header__logo">amy allen<span>.</span></h3></a>
                <nav class="header__nav">
              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'fallback_cb' => false ) ); ?>
                </nav>
            </div>
        </header>
        
        <div class="header__content">
          
          <div class="header__background-overlay"></div>

          <div class="header__content-text-ctn">

            <h1>Oops<span>!</span> I can't seem to find the page you're looking for<span>.</span></h1>

            <h2>Error code: 404</h2>
              
          </div>

          </div>

      </div>

<?php get_footer(); ?>
