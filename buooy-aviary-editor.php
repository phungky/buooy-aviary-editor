<?php
/**
Plugin Name:     Buooy Aviary Editor
Plugin URI:      http://buooy.com
Description:		Buooy Aviary Editor allows you to use the powerful Aviary editor to crop, edit and manage your images.
Version:	0.7.0
Author:          Aaron Lee
Author URI:      http://buooy.com
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Gets the version number
if(!defined('BUOOY_AVIARY_EDITOR_VERSION')){
	define('BUOOY_AVIARY_EDITOR_VERSION', 'v0.7.0');
}
// Gets the modal type
if(!defined('BUOOY_AVIARY_EDITOR_MODAL')){
	define('BUOOY_AVIARY_EDITOR_MODAL', 'thickbox');
}

define( 'BUOOY_AVIARY_EDITOR_BASE_NAME', plugin_basename( __FILE__ ) );

// Sets up everything
include_once __DIR__.'/'.BUOOY_AVIARY_EDITOR_VERSION.'/init.php';
