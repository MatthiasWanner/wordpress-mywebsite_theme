<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body id="body" <?php body_class(); ?>>
<header class="header-page container">
	<div class="website-infos">
        <h1 class="blog-name"><a href="<?php echo get_option('home'); ?>" class="title-link"><?php bloginfo('name'); ?></a></h1>
        <h2 class="blog-description"><?php bloginfo('description'); ?></h2>
	</div>

	<div class ="nav-menu">
		<?php wp_nav_menu([
				'theme_location' => 'header_menu', 
				'container' => false,
				'menu_class' => 'navbar-nav']); ?>
	</div>
</header>
	<main class="main-container container">