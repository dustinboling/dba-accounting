<?php
/***
Plugin Name: Accounting by DBA
Plugin URI: http://dustinboling.com/plugins/wordpress/dba-accounting/
Description: Invoicing and expense tracking for WordPress
Author: Dustin Boling Associates
Author URI: http://www.dustinboling.com/
Version: 0.1.0.0
License: http://www.opensource.org/licenses/mit-license.html  MIT License
***/

if( ! defined( "DS" ) )
	define( "DS", DIRECTORY_SEPARATOR );

if( ! defined( 'DBAA_ABSPATH' ) )
	define( 'DBAA_ABSPATH', plugin_dir_path( __FILE__ ) );

if( ! defined( 'DBAA_URL' ) )
	define( 'DBAA_URL', plugins_url() . '/' . basename( dirname( __FILE__ ) ) . '/' );

// Boot the app
include_once( DBAA_ABSPATH . 'config/boot.php' );