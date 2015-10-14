<!doctype html>
<?php 
global $prefix;
global $footer_btn_lnk;
global $footer_cta_txt;
global $footer_btn_txt;
$prefix = "_plumber_";
$footer_cta_txt = get_post_meta( $post->ID, $prefix.'footer-cta-txt', true );
$footer_btn_txt = get_post_meta( $post->ID, $prefix.'footer-btn-txt', true );
$footer_btn_lnk = get_post_meta( $post->ID, $prefix.'footer-btn-lnk', true );
?>
  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    		<meta name="theme-color" content="#121212">
	    	<?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

	<header class="top-header">

<div class="row">
	<div class="site-title medium-8 columns">
       <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
		    <?php if ( is_active_sidebar( 'site-logo-widget' ) ) : ?>

			<?php dynamic_sidebar( 'site-logo-widget' ); ?>

			<?php else : ?>

			<!-- This content shows up if there are no widgets defined in the backend. -->
								
			<div class="alert help">
				<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
			</div>

			<?php endif; ?>
		</a>
    </div>
    <div class="site-contact medium-4 columns">
			
			<?php if ( is_active_sidebar( 'header-contact-widget' ) ) : ?>

			<?php dynamic_sidebar( 'header-contact-widget' ); ?>

			<?php else : ?>

			<!-- This content shows up if there are no widgets defined in the backend. -->
								
			<div class="alert help">
				<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
			</div>

			<?php endif; ?>
    </div>
</div>   
</header>
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">
				<div id="container">
					<header class="header" role="banner">
							
						 <!-- This navs will be applied to the topbar, above all content 
							  To see additional nav styles, visit the /parts directory -->
						 <?php get_template_part( 'parts/nav', 'top-offcanvas' ); ?>
						 <?php //get_template_part( 'parts/nav', 'top-topbar' ); ?>
								 	
					</header> <!-- end .header -->
