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


	<?php wp_head(); ?>
</head>
<?php global $goldbay?>
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
					<a href="<?php echo home_url('/')?>">
					<span>	<?php  echo bloginfo('name') ?>  </span> 				
					</a>
				</h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider">
				<?php if(isset($goldbay['h_image1-href']) && isset($goldbay['h_image1'])){ ?>
					<a href="<?php echo $goldbay['h_image1-href']?>">
						<img src="<?php echo $goldbay['h_image1']['url'] ?>" width="940" height="310" alt="" />
					</a>
				<?php }?>
				<?php if(isset($goldbay['h_image2-href']) && isset($goldbay['h_image2'])){ ?>
					<a href="<?php echo $goldbay['h_image2-href']?>">
						<img src="<?php echo $goldbay['h_image2']['url'] ?>" width="940" height="310" alt="" />
					</a>
				<?php }?>
				<?php if(isset($goldbay['h_image3-href']) && isset($goldbay['h_image3'])){ ?>
					<a href="<?php echo $goldbay['h_image3-href']?>">
						<img src="<?php echo $goldbay['h_image3']['url'] ?>" width="940" height="310" alt="" />
					</a>
				<?php }?>
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

