<?php

/**
 * @package     WordPress
 * @subpackage  Plugin: WP FitText.js
 * @author      Neil Sweeney <neil@wolfiezero.com>
 */
class FitText {


    /**
     * Instance of this class.
     *
     * @var  object
     */
    protected static $instance = null;


    /**
     * Text fields we want to alter
     *
     * @var  array
     */
    protected static $texts = array();


    /**
     * Initialize the plugin by setting localization and loading public scripts
     * and styles.
     */
    private function __construct() {

        // Define custom functionality.
        // Refer To http://codex.wordpress.org/Plugin_API#Hooks.2C_Actions_and_Filters

    }


    /**
     * Return an instance of this class
     *
     * @return  object
     */
    public static function get_instance() {

        // If the single instance hasn't been set, set it now.
        if( null == self::$instance ) {
            self::$instance = new self;
        }

        return self::$instance;

    }


    /**
     * Adds text fields to alter to the class array
     *
     * @param  array  $atts  WordPress attached attributes
     */
    public static function add_FitText( $atts = array() ) {

        extract( shortcode_atts( array(
            'id'    => null,
            'ratio' => 1
        ), $atts ) );

        if( $id ) {
            self::$texts[$id] = floatval( $ratio );
        }

        return false;

    }


    /**
     * Add the script stuff to the footer
     */
    public static function build_script() {

        $html  = '';
        $texts = self::$texts;

        if( count( $texts ) > 0 ) {
            $html .= '<!-- FitText -->';
            $html .= '<script src="' . plugins_url( 'fittext.js/fittext.js', __FILE__ ) . '"></script>';
            $html .= '<script>' . "\n";
            foreach( $texts as $id => $ratio ) {
                $html .= 'window.fitText( document.getElementById("' . $id . '"), ' . $ratio . ' );' . "\n";
            }
            $html .= '</script>';
        }

        echo $html;

    }


}
