<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
	<head>

	<meta charset="utf-8">
		<title>My WordPress Demo Website </title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="" name="keywords">
		<meta content="" name="description">

		<!-- Favicons -->
		<link href="<?php echo get_template_directory_uri();?>/assets/img/favicon.png" rel="icon">
		<link href="<?php echo get_template_directory_uri();?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700|Roboto:300,400,700&display=swap"
			rel="stylesheet">

		<!-- Bootstrap CSS File -->
		<link href="<?php echo get_template_directory_uri();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Vendor CSS Files -->
		<link href="<?php echo get_template_directory_uri();?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri();?>/assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri();?>/assets/vendor/aos/aos.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri();?>/assets/vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

		<!-- Template Main CSS File -->
		<link href="<?php echo get_template_directory_uri();?>/assets/css/style.css" rel="stylesheet">

		<?php wp_head(); ?>
	</head>

	<?php
		//wp_body_open();
	?>	
<body>

<div class="site-wrap">
  <div class="site-mobile-menu site-navbar-target">
	<div class="site-mobile-menu-header">
	  <div class="site-mobile-menu-close mt-3">
		<span class="icofont-close js-menu-toggle"></span>
	  </div>
	</div>
	<div class="site-mobile-menu-body"></div>
  </div>

  <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
	<div class="container">
	  <div class="row align-items-center">

		<div class="col-6 col-lg-4">
		  <h1 class="mb-0 site-logo"><a href="<?php echo site_url();?>" class="mb-0">My Blog</a></h1>
		</div>

		<div class="col-12 col-md-8 d-none d-lg-block">
		  <nav class="site-navigation position-relative text-right" role="navigation">

			<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
			  <li class="active"><a href="<?php echo site_url();?> " class="nav-link">Home</a></li>
			  <li><a href="#" class="nav-link">Features</a></li>
			  <li><a href="#" class="nav-link">Pricing</a></li>

			  <li class="has-children">
				<a href="#" class="nav-link">Blog</a>
				<ul class="dropdown">
				  <li><a href="#" class="nav-link">Blog</a></li>
				  <li><a href="#" class="nav-link">Blog Sigle</a></li>
				</ul>
			  </li>
			  <li><a href="#" class="nav-link">Contact</a></li>
			</ul>
		  </nav>
		</div>

		<div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">
		  <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse"
			data-target="#main-navbar">
			<span></span>
		  </a>
		</div>
	  </div>
	</div>
  </header>