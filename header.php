<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<!-- Load icon font -->
		<link rel="stylesheet" href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Load Google Font: -->
		<link href="https://fonts.googleapis.com/css?family=Arbutus+Slab" rel="stylesheet">

		<?php wp_head(); ?>


	</head>
	<body <?php body_class(); ?>>

		<!-- full page container -->
		<div class="container">

			<!-- header -->
			<header class="main-header clear" role="banner">

				<div class="main-header__menu-toggle main-header__toggle main-header__partition main-header__partition--left" id="mobile-menu-toggle">Menu</div>
				<div class="main-header__title main-header__partition main-header__partition--center">
					<a href="<?php echo home_url(); ?>">
						<?php bloginfo( 'name' ); ?>
					</a>
				</div>
				<?php if( is_singular('long-form') ) :  ?>
					<div class="main-header__contents-toggle main-header__toggle main-header__partition main-header__partition--right" id="mobile-contents-toggle">Contents</div>
				<?php else: ?>
					<div class="main-header__contents-toggle main-header__toggle main-header__partition main-header__partition--right"></div>
				<?php endif; ?>
			</header>
			<!-- /header -->
					<!-- /logo -->
					<!-- nav -->
					<nav class="nav main-nav" role="navigation" id="main-nav">
						<?php html5blank_nav(); ?>
						<div class="social-links">
							<ul>
								<li><a href="#"><i class="im im-facebook"></i></a></li>
								<li><a href="#"><i class="im im-twitter"></i></a></li>
							</ul>
						</div>
					</nav>
					<!-- /nav -->
					
					<?php if( is_singular('long-form') ) :  ?>
						<div class="article-contents" id="article-contents">
							<ul class="article-contents__list" id="article-contents-list">
							</ul>
						</div>
					<?php endif; ?>


			<!-- begin main content wrap (everything between header and footer. Finished in footer.php) -->
			<div class="main-content">