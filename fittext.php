<?php
/**
 * ============================================================================
 * FitText
 * ============================================================================
 *
 * @package     WordPress
 * @subpackage  Plugin: WP FitText.js
 * @author      Neil Sweeney <neil@wolfiezero.com>
 * @license     GPL-2.0+
 *
 * ----------------------------------------------------------------------------
 *
 * @wordpress-plugin
 * Plugin Name:  WP FitText.js
 * Description:  A pure javascript library for inflating web type to use with WordPress content
 * Version:      1.0.0
 * Author:       Neil Sweeney <neil@wolfiezero.com>
 * Author URI:   http://wolfiezero.com/
 * License:      GPL-2.0+
 * License URI:  http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI:  wolfiezero/wp-fittext-js
 * GitHub Branch:      master
 */


// ----------------------------------------------------------------------------
// Accessed Directly
// ----------------------------------------------------------------------------

if( !defined( 'WPINC' ) ) die;


// ----------------------------------------------------------------------------
// Requires
// ----------------------------------------------------------------------------

require plugin_dir_path( __FILE__ ) . 'class-fittext.php';


// ----------------------------------------------------------------------------
// Hooks
// ----------------------------------------------------------------------------

// Actions
add_action( 'plugins_loaded', array( 'FitText', 'get_instance' ) );

// Filters
add_filter( 'wp_footer', array( 'FitText', 'build_script' ), 20 );

// Shortcode
add_shortcode( 'fittext', array( 'FitText', 'add_FitText' ) );
