<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Goldbay
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

<div class="header">
    <div class="header_resize">
      <div class="menu_nav">
				<?php 
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'mainNav',
							) );							
				?>
      </div>
      <div class="logo">
        <h1>
					<a href="<?php home_url('/')?>">
						<!-- <span>Goldbay</span> -->
						<!-- <small>Company Slogan Here</small> -->
						<?php  echo bloginfo('name') ?> 
					</a>
				</h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider">
					<a href="#">
						<img src="<?php echo get_template_directory_uri()?>/assets/images/slide1.jpg" width="940" height="310" alt="" />
					</a>
					<a href="#">
						<img src="<?php echo get_template_directory_uri()?>/assets/images/slide2.jpg" width="940" height="310" alt="" />
					</a>
					<a href="#">
						<img src="<?php echo get_template_directory_uri()?>/assets/images/slide3.jpg" width="940" height="310" alt="" />
					</a>
				</div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>







	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'goldbay' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$goldbay_description = get_bloginfo( 'description', 'display' );
			if ( $goldbay_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $goldbay_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'goldbay' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
	</header>#masthead -->

	<div id="content" class="site-content">
