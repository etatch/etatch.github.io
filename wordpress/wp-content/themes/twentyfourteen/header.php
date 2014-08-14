<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="/css/zerogrid.css">
    	<link rel="stylesheet" href="/css/responsive.css">
	<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    	<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<header>
	<div class="wrap-header zerogrid">
		<div id="logo"><a href="/"><img src="/images/etatch-logo.png"/></a></div>
		<div class="menu">
			<ul class="navigation pull-right">
				<li><a href="/">HOME</a></li>
				<li><a href="/about.html">ABOUT</a></li>
				<li><a href="/services.html">SERVICES</a></li>
				<li><a href="/wordpress/?post_type=forum">COMMUNITY</a></li>
				<li>
					<a href="#">APPLY</a>
					<ul class="sub-menu">
			            <li><a href="#">Staff</a></li>
			            <li><a href="/partner.html">Partners</a></li>
			            <li><a href="#">Sponsored Network</a></li>
			        </ul>
				</li>
				<li><a href="/contact.html">CONTACT</a></li>
				<li><a href="//www.freedom.tm/login">DASHBOARD</a></li>
			</ul>
		</div>
	</div>
</header>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>
	<div id="main" class="site-main">