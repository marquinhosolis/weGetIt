<!doctype html>
<html>
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<meta charset="utf-8">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
		<meta name="language" content="PT-BR">
		<meta content="pt-br" http-equiv="content-language">
		<link rel="stylesheet" href="https://use.typekit.net/cbw5bcl.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/lib/hamburgers.min.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/lib/hover.min.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.min.css">
		<?php wp_head(); ?> 
	</head>

	<body>
<header>
	<div class="container">
		<div class="headerLogo">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header-logo.png" alt="We Get It Logo">
		</div>
		<div class="hamburgerWrapper">
			<div class="hamburger hamburger--squeeze">
				<div class="hamburger-box">
				<div class="hamburger-inner"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="menuMobile">
		<nav>
			<ul>
				<li><a href="#">Products</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#" class="btn hvr-shutter-out-horizontal">Where to buy</a></li>
			</ul>
		</nav>
	</div>
</header>