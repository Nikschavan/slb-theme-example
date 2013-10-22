<?php 
/* 
Plugin Name: Simple Lightbox: Custom Theme (Example)
Plugin URI: https://github.com/archetyped/slb-theme-example
Description: Custom theme example for Simple Lightbox
Version: 0.1
Author: Archetyped
Author URI: http://archetyped.com
Support URI: https://github.com/archetyped/slb-theme-example/wiki/Reporting-Issues

Copyright 2013 Sol Marchessault (sol@archetyped.com)
*/

/**
 * Initialize custom theme for Simple Lightbox
 * @param SLB_Themes $themes Themes controller
 */
function slb_theme_example_init($themes) {
	//Path to theme's directory
	$base_path = plugins_url();
	$base_url = site_url();
	if ( 0 === strpos($base_path, $base_url) ) {
		$base_path = substr($base_path, strlen($base_url));
	}
	$base_path .= '/' . basename( dirname( __FILE__ ) );
	
	//Theme properties
	//Uncomment properties to override parent theme's properties
	$properties = array (
		//Theme name
		'name'			=> __('Example Theme', 'slb-theme-example'),
		//Parent theme
		'parent'		=> 'slb_baseline',
		//Custom layout file
		/*'layout'		=> $base_path . '/layout.html',*/
		//Custom scripts - Each script is an array containing the script's properties
		//Example: array( $handle, $src [, $deps, $ver ] )
		'scripts'		=> array (
			/*array ( 'core', $base_path . '/js/client.js' ),*/
		),
		//Custom styles - Each style is an array containing the style's properties
		//Example: array( $handle, $src [, $deps, $ver] )
		'styles'		=> array (
			/*array ( 'core', $base_path . '/css/styles.css' ),*/
		),
	);
	
	$themes->add('slb_theme_example', $properties);
}

add_action('slb_themes_init', 'slb_theme_example_init');