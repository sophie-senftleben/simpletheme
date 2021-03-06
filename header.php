<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Sophie Senftleben</title>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<section class="top-bar border-bottom navbar-light bg-light">
			<div class="container">
				<nav class="row navbar navbar-expand-sm align-items-start align-items-sm-center" id="top-navbar">
					<?php wp_nav_menu(
						array(
							'theme_location' => 'top_menu_left',
							'menu_id'        => 'about-menu',
							'container'      => false,
							'depth'          => 2,
							'menu_class'	 => 'top-menu navbar-nav mr-auto col-8 col-sm-5 navbar-expand justify-content-start order-2 order-sm-1',
							'walker'         => new Custom_Frontend_NavWalker(),
							'fallback_cb'    => 'Custom_Frontend_NavWalker::fallback'
						)
					); ?>
					<?php wp_nav_menu(
						array(
							'theme_location' => 'top_menu_middle',
							'menu_id'        => 'languages-menu',
							'container'      => false,
							'depth'          => 2,
							'menu_class'	 => 'language-icons navbar-nav col-4 col-sm-2 navbar-expand justify-content-end justify-content-sm-center pr-0 order-3 order-sm-2',
							'walker'         => new Custom_Frontend_NavWalker(),
							'fallback_cb'    => 'Custom_Frontend_NavWalker::fallback'
						)
					); ?>
					<?php wp_nav_menu(
						array(
							'theme_location' => 'top_menu_right',
							'menu_id'        => 'social-menu',
							'container'      => false,
							'depth'          => 2,
							'menu_class'	 => 'social-media-icons navbar-nav col-12 col-sm-5 navbar-expand order-1 order-sm-3 justify-content-between justify-content-sm-end pr-0',
							'walker'         => new Custom_Frontend_NavWalker(),
							'fallback_cb'    => 'Custom_Frontend_NavWalker::fallback'
						)
					); ?>
					<div class="dropdown-divider d-sm-none d-block"></div>
				</nav>
			</div>
		</section>
		<section class="logo jumbotron text-center">
			<div class="container-fluid">
				<h5><?php echo esc_attr( get_option( 'custom_general_settings' )['typewriter_pretext'] ); ?></h5>
				<h1 class="jumbotron-heading"><?php echo esc_attr( get_option( 'blogname' ) ); ?></h1>
				<p class="lead text-muted"><?php echo esc_attr( get_option( 'custom_general_settings' )['typewriter_static_text'] ); ?>
					<strong class="typewrite" data-period="2000" data-type='[ <?php echo esc_attr( get_option( 'custom_general_settings' )['typewriter_text'] ); ?> ]'>
						<span class="wrap"></span>
					</strong>
				</p>
			</div>
		</section>
		<section class="menu-bar navbar-light bg-light">
			<div class="container">
				<nav class="main-menu navbar navbar-expand-sm">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarContent">
						<?php wp_nav_menu(
						array(
							'theme_location' => 'main_menu',
							'menu_id'        => 'main-menu',
							'container'      => false,
							'depth'          => 2,
							'menu_class'	 => 'main-menu navbar-nav mx-auto w-100 justify-content-center',
							'walker'         => new Custom_Frontend_NavWalker(),
							'fallback_cb'    => 'Custom_Frontend_NavWalker::fallback'
						)
					); ?>
					</div>
			  </div>
			</nav>
			</div>
		</section>
	</header>
	