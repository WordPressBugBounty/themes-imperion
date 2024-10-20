<?php
/**
 * The template for displaying the header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<a class="skip-link screen-reader-text" href="#site-content"><?php esc_html_e( 'Skip to content', 'imperion' ); ?></a>
<?php 
imperion_wp_body_open(); 
if(get_theme_mod("box_layout_mode", false))	echo '<div class="box-layout-style">'; 
?>
<div id="page" class="site <?php if (get_theme_mod('header_layout', 2) == 2) { echo(' burger-header'); } else { echo('normal-header'); } ?>">
	<div class="site-inner">	
		
		<header id="masthead" class="site-header" role="banner" >	
			
			<?php 
			
			do_action('imperion_header');	
			imperion_branding(); 
 			?>
			
		</header><!-- .site-header -->
		
		<?php
			if (get_theme_mod('header_layout', 2) != 2 && get_theme_mod('slider_in_home_page' , false)== true) {	
				do_action('imperion_home_slider');  
			}
			
			if(get_theme_mod("breadcrumb_enable", false) && !is_front_page()) {
				  get_template_part( 'templates/header', 'breadcrumb' );
				  echo "<div>";
			}			
		?>		

<div id="site-content">		
