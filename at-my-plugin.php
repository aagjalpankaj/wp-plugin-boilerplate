<?php
/**
 * Plugin Name: My Plugin
 * Plugin URI: http://www.thinkatat.com/at-my-plugin
 * Description: Simple, extensible and easy to use WordPress plugin boilerplate!
 * Version: 0.0.1
 * Author: thinkatat
 * Author URI: http://www.thinkatat.com
 * Text Domain: my-plugin
 * Domain Path: /languages
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit( 'This is not the way to call me.' );

// Plugin setup - Basic constants.
define( 'ATMYP_VERSION', '0.0.1' );
define( 'ATMYP_DIR', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'ATMYP_URL', untrailingslashit( plugins_url( basename( plugin_dir_path( __FILE__ ) ), basename( __FILE__ ) ) ) );

// Plugin setup - class Main singleton instance.
require_once( ATMAT_DIR . '/includes/class-main.php' );
$GLOBALS['ATMYP'] = new \AT\MYP\Main( ATMYP_VERSION );
