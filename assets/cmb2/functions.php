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

function frontpage_custom_meta( array $header_slider ) {

	$prefix = "_plumber_";

	$meta_boxes[] = array(
        'id' => 'front-page',
        'title' => 'Frontpage Inputs',
        'object_types'  => array( 'page', ), // Post type
        'show_on' => array( 'key' => 'id', 'value' => array( 4 ) ),
        'show_names' => true, // Show field names on the left
        'fields' => array(
        	array(
        		'name' => 'Header Slider Shortcode',
        		'type' => 'text',
        		'id'   => $prefix . 'header-slides'	
        	)

        )

    );

    return $meta_boxes;
}

add_filter( 'cmb2_meta_boxes', 'frontpage_custom_meta' );