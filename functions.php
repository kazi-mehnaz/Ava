<?php
/** 
 *
 * Ava Functions
 * 
 * @package Wordpress
 * @subpackage ava
 * @since Ava 1.0.0
 * 
 */

// content width
if ( ! isset ( $content_width) ) {
    $content_width = 800;
}

// Ava theme support
if ( ! function_exists( 'ava_support' ) ) :
    /**
     *
     *  @since Ava 1.0.0
     */
    function ava_support() {

        // feed-links support
        add_theme_support( 'automatic-feed-links' );

        // title tag support
        add_theme_support( "title-tag" );

        // register nav menus
        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'ava' ),
            'footer' => __( 'Footer Menu', 'ava' )
        ) );

        // load theme textdomain
        load_theme_textdomain( 'ava', get_template_directory() . '/languages' );

        // thumbnail support
        add_theme_support( 'post-thumbnails' );

        // post formats support
        add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );

        // responsive embeds support
        add_theme_support( 'responsive-embeds' );

        // style editor support
        add_theme_support( 'editor-styles' );

        // html5 support
        add_theme_support( 'html5', array( 'style','script' ) );
    }
endif; // ava_support
add_action('after_setup_theme', 'ava_support');