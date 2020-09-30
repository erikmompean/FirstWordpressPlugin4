<?php 
/**
 * @package ErikPlugin
 */

/*

Plugin Name: Erik Plugin
Plugin URI: http://vivaldee.com
Description: This is my first attemp on writing a custom Plugin
Version 1.0.0
Author: Erik Mompean
License: GPLv2 or later
Text Domain: erik-pluin
*/

if ( ! defined( 'ABSPATH' ) ) {
    die;
}

class ErikPlugin 
{

    function __construct() {
        add_action( 'init', array( $this, 'custom_post_type' ) );
    }

    function activate() {
        flush_rewrite_rules();
    }

    function deactivate() {
        
    }

    function uninstall() {

    }

    function custom_post_type() {
        register_post_type( 'book' , ['public' => true, 'label' => 'Books' ]);
    }
    
 } 

if( class_exists( 'ErikPlugin' ) ) {
    $erikPlugin = new ErikPlugin();
}

// activation
register_activation_hook( __FILE__, array( 'ErikPlugin', 'activate' ) );

// deactivation
register_deactivation_hook( __FILE__, array( 'ErikPlugin', 'deactivate' ) );