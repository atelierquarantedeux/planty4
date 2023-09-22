<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OceanWP WordPress theme
 */

 

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>

	<?php wp_body_open(); ?>

	<?php do_action( 'ocean_before_outer_wrap' ); ?>

	<div id="outer-wrap" class="site clr">

		<a class="skip-link screen-reader-text" href="#main"><?php echo esc_html( oceanwp_theme_strings( 'owp-string-header-skip-link', false ) ); ?></a>

		<?php do_action( 'ocean_before_wrap' ); ?>

		<div id="wrap" class="clr">

			<?php do_action( 'ocean_top_bar' ); ?>

			<?php do_action( 'ocean_header' ); ?>

			<?php do_action( 'ocean_before_main' ); ?>

			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?> role="main">

				<?php do_action( 'ocean_page_header' ); ?>






<div id="page" class="site">
	<header >
		
	 <div class="ContenaireHeader">
	 	
			
		<nav class="menuNavigation">

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main_menu',
					'container'      => 'false',
					'menu_class'     => 'cssHeader',
				)
			);
			?>

			<div class="DivCommander">	
			   <a href="http://localhost/planty5/commander/" class="LienCommander"> Commander </a>
			</div>
	 
	 
		</nav><!-- #site-navigation -->

	 </div>
	</header><!-- #masthead -->
