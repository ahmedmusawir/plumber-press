<?php
// SIDEBARS AND WIDGETIZED AREAS
function joints_register_sidebars() {

	/**
	 *
	 * Site Header w/ Logo and Contact
	 *
	 */
	register_sidebar(array(
		'id' => 'site-logo-widget',
		'name' => __('Site Logo Widget', 'jointstheme'),
		'description' => __('Site Logo Image Widget', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="site-logo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'id' => 'header-contact-widget',
		'name' => __('Site Header Contact Widget', 'jointstheme'),
		'description' => __('Site Header Contact Widget', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="header-contact-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	/**
	 *
	 * Frontpage Service Widgets
	 *
	 */
	register_sidebar(array(
		'id' => 'frontpage-service-widget-1',
		'name' => __('Frontpage Service  Widget 1', 'jointstheme'),
		'description' => __('The first Service widget.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="front-service-block %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'id' => 'frontpage-service-widget-2',
		'name' => __('Frontpage Service Widget 2', 'jointstheme'),
		'description' => __('The second Service widget.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="front-service-block %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'id' => 'frontpage-service-widget-3',
		'name' => __('Frontpage Service  Widget 3', 'jointstheme'),
		'description' => __('The third Service widget.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="front-service-block %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	/**
	 *
	 * Frontpage Callout
	 *
	 */
	register_sidebar(array(
		'id' => 'frontpage-callout-widget',
		'name' => __('FrontPage Callout Widget', 'jointstheme'),
		'description' => __('The first contact widget.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="frontpage-callout-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	/**
	 *
	 * Frontpage Plumber Pro
	 *
	 */
	register_sidebar(array(
		'id' => 'frontpage-pro-widget',
		'name' => __('FrontPage Preffesional Plumber Widget', 'jointstheme'),
		'description' => __('The first contact widget.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="frontpage-pro-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	/**
	 *
	 * Footer Callout
	 *
	 */
	register_sidebar(array(
		'id' => 'footer-cta',
		'name' => __('Footer Callout', 'jointstheme'),
		'description' => __('The footer callout widget.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="footer-cta %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	/**
	 *
	 * Footer Widgets
	 *
	 */
	register_sidebar(array(
		'id' => 'footer-widget-1',
		'name' => __('Footer Widget 1', 'jointstheme'),
		'description' => __('The first footer widget.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'id' => 'footer-widget-2',
		'name' => __('Footer Widget 2', 'jointstheme'),
		'description' => __('The second footer widget.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'id' => 'footer-widget-3',
		'name' => __('Footer Widget 3', 'jointstheme'),
		'description' => __('The third footer widget.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	/**
	 *
	 * Contact Page Widgets
	 *
	 */
	register_sidebar(array(
		'id' => 'contact-widget-1',
		'name' => __('Contact Page Widget 1', 'jointstheme'),
		'description' => __('The first contact widget.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'id' => 'contact-widget-2',
		'name' => __('Contact Page Widget 2', 'jointstheme'),
		'description' => __('The second contact widget.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	// register_sidebar(array(
	// 	'id' => 'sidebar1',
	// 	'name' => __('Sidebar 1', 'jointstheme'),
	// 	'description' => __('The first (primary) sidebar.', 'jointstheme'),
	// 	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h4 class="widgettitle">',
	// 	'after_title' => '</h4>',
	// ));

	// register_sidebar(array(
	// 	'id' => 'offcanvas',
	// 	'name' => __('Offcanvas', 'jointstheme'),
	// 	'description' => __('The offcanvas sidebar.', 'jointstheme'),
	// 	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h4 class="widgettitle">',
	// 	'after_title' => '</h4>',
	// ));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'jointstheme'),
		'description' => __('The second (secondary) sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!
?>