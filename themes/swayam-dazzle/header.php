<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

  </head>
  <body id="top">
    <header id="header" class="row">   

   		<div class="header-logo">
	        <a href="<?php echo site_url('/home') ?>">Swayam</a>
	    </div>

	   	<nav id="header-nav-wrap">
			<ul class="header-main-nav">
				<li><a href="<?php echo site_url('/home') ?>" title="home">Home</a></li>
        <li><a href="#pricing" title="pricing">Projects</a></li>
        <li><a href="<?php echo site_url('/about-us') ?>" title="about">About</a></li>
				<li><a href="<?php echo site_url('/contact') ?>" title="download">Contact</a></li>	
			</ul>
      <!-- <a href="#" title="sign-up" class="button button-primary cta">Sign Up</a> -->
		</nav>

		<a class="header-menu-toggle" href="#"><span>Menu</span></a>    	
   	
   </header>
