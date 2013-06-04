<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<link rel='stylesheet' id='_s-style-css'  href='<?php bloginfo('template_directory'); ?>/normalize.css?ver=3.6-beta3' type='text/css' media='all' />
<link rel='stylesheet' id='_s-style-css'  href='<?php bloginfo('template_directory'); ?>/genericons.css?ver=3.6-beta3' type='text/css' media='all' />
<?php wp_head(); ?>

<!--[if lt IE 9]>
<link rel='stylesheet' id='_s-style-css'  href='<?php bloginfo('template_directory'); ?>/style-ie.css?ver=3.6-beta3' type='text/css' media='all' />
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">	
	<header id="masthead" class="site-header" role="banner">
    <div class="row">
        <div class="large-4 columns">
	<?php do_action( 'before' ); ?>
		<div class="site-branding">
			<h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a></h3>
		</div>
</div>
        <div class="large-8 columns">

		<nav id="site-navigation" class="navigation-main" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', '_s' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', '_s' ); ?>"><?php _e( 'Skip to content', '_s' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
</div>
</div>
	</header><!-- #masthead -->
		<?php if ( is_home() || is_front_page() ) : ?>
			<div id="main-img">
				 <img src="<?php header_image(); ?>"  alt="" />
			</div>
		<?php endif; ?>
	<div id="main" class="site-main">