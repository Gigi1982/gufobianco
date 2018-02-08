<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/img/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear gufobianco-header" role="banner">
                
                <div class="container-fluid">
                    <div class="gufobianco-utility-nav visible-md visible-lg">
                        <nav style="display:none;" class="language-switcher">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">ITALIANO</a>
                                </li>
                            </ul>
                        </nav>
                        <nav class="social-nav">
                            <ul class="list-unstyled">
                                <li><a target="_blank" href="https://www.facebook.com/Ristorante-Al-Gufo-Bianco-163238287082128/"><i class="icon icon-facebook"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/al_gufo_bianco_ristorante_/"><i class="icon icon-instagram"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="gufobianco-header-container">
                        <div class="mobile-nav-icon visible-xs visible-sm">
                            <a href="#" id="nav-icon3" class="hidden-md hidden-lg">
                              <span></span>
                              <span></span>
                              <span></span>
                              <span></span>
                            </a>
                        </div>
                        <!-- nav -->
                        <nav class="nav gufobianco-desktop-nav visible-md visible-lg" role="navigation">
                            <?php html5blank_nav(); ?>
                        </nav>
                        
                        <nav class="gufobianco-mobile-nav">
                            <?php html5blank_nav(); ?>
                        </nav>
                        <!-- /nav -->
                        <!-- logo -->
                        <div class="logo">
                            <a href="<?php echo home_url(); ?>">
                                <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                                <img src="<?php echo get_template_directory_uri(); ?>/img/gufo-logo.png" width="220" height="90" alt="Logo" class="logo-img">
                            </a>
                        </div>
                        <!-- /logo -->
                    </div>
                </div>
                
			</header>
			<!-- /header -->
