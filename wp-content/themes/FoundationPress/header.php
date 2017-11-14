<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://fonts.googleapis.com/css?family=Courgette|Yellowtail|Oswald:300,400|Lobster|Lato|Patua+One" rel="stylesheet">
	
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>


	<header class="site-header" role="banner">
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle() ?>>
			<div class="title-bar-left">
				<button class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/FoundationPress/src/assets/images/ca-texmex-logo-clean.svg" alt="Cyclone Anayas Logo" style="max-width:100px;min-width:75px;"/></a>
				</span>
			</div>
		</div>

		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/FoundationPress/src/assets/images/ca-texmex-logo-clean.svg" alt="Cyclone Anayas Logo" style="max-width:125px;padding-left: 1em;"/></a>
				</div>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
		
	</header>

	<div class="container">
	<header class="" id="promo_row">
	<div class="row text-center">
	
	<div class="large-6 small-6 columns">
	<div class="row" style="display:none;">
	<div class="large-6 small-6 columns">
	<a href="" class="button tiny expanded">Gift Cards</a>
	</div>
	<div class="large-6 small-6 columns">
	<a href="" class="button tiny expanded">VIP Rewards</a>
	</div>
	</div>
	</div>

	<div class="large-6 small-6 columns text-right">
<a href="https://www.instagram.com/cyclonescantina/" target="_blank" rel="noopener"><img style="max-height: 35px;" src="http://localhost/catexmex/wp-content/themes/FoundationPress/src/assets/images/instagram-dist2.png" alt="instagram logo" /></a>
<a href="https://www.facebook.com/CyclonesCantina/" target="_blank" rel="noopener"><img style="max-height: 35px;" src="http://localhost/catexmex/wp-content/themes/FoundationPress/src/assets/images/facebook-dist2.png" alt="facebook logo" /></a>
<a href="https://twitter.com/CATexMexCantina" target="_blank" rel="noopener"><img style="max-height: 35px;" src="http://localhost/catexmex/wp-content/themes/FoundationPress/src/assets/images/twitter-dist2.png" alt="twitter logo" /></a>

	</div>
	
	</div>
	</header>