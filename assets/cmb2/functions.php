<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function yourprefix_register_about_page_metabox() {
	// Start with an underscore to hide fields from custom fields list
	$prefix = "_plumber_";
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$cmb = new_cmb2_box( array(
		'id' => 'front-page',
        'title' => 'Frontpage Inputs',
		'object_types' => array( 'page', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array( 'id' => array( 4, ) ), // Specific post IDs to display this metabox
	) );
	$cmb->add_field( array(
		'name' => __( 'Header Slider Shortcode', 'cmb2' ),
		'desc' => __( 'Generates Shortcode for Revolution Slider for Frontpage top Slider', 'cmb2' ),
		'id'   => $prefix . 'header-slides',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Frontpage Callout Form Shortcode', 'cmb2' ),
		'desc' => __( 'Generates Frontpage Callout Enquery form', 'cmb2' ),
		'id'   => $prefix . 'frontpage-cta-form',
		'type' => 'text',
	) );

	// $cmb->add_field( array(
	// 	'name' => __( 'Footer Callout Button Text', 'cmb2' ),
	// 	'desc' => __( 'Generates Text for Footer Callout Button', 'cmb2' ),
	// 	'id'   => $prefix . 'footer-btn-txt',
	// 	'type' => 'text',
	// ) );

	// $cmb->add_field( array(
	// 	'name' => __( 'Footer Callout Button Link', 'cmb2' ),
	// 	'desc' => __( 'Generates Link for Footer Callout Button', 'cmb2' ),
	// 	'id'   => $prefix . 'footer-btn-lnk',
	// 	'type' => 'text',
	// ) );

	
}
add_action( 'cmb2_init', 'yourprefix_register_about_page_metabox' );


/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function yourprefix_register_about_page_metabox2() {
	// Start with an underscore to hide fields from custom fields list
	$prefix = "_plumber_";
	
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'metabox2',
		'title'        => __( 'Testimonial Category Input', 'cmb2' ),
		'object_types' => array( 'post', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) );
	$cmb->add_field( array(
		'name' => 'Testimonial Profession',
    	'type' => 'text',
        'id'   => $prefix . 'testimonial-pro',
		'type' => 'text'
	) );
}

add_action( 'cmb2_init', 'yourprefix_register_about_page_metabox2' );














