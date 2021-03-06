<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="//use.typekit.net/xau8goq.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
		<header class="header cf" role="banner">
			<div class="wrap">
				<a href="<?php echo home_url(); ?>" class="logolink"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo" alt="The Rogue Gentlemen" /></a>
<!--				<a href="#nav" class="nav-toggle nav-toggle-menu icon-menu"><span class="is-vishidden">Menu</span></a>-->
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav' ) ); ?>
			</div>
		</header>
		<!-- End .header -->
<div role="main" class="wrap">
