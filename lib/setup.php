<?php

namespace Roots\Sage\Setup;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {

    // Enable features from Soil when plugin is activated
    // https://roots.io/plugins/soil/
    add_theme_support( 'soil-clean-up' );
    add_theme_support( 'soil-nav-walker' );
    add_theme_support( 'soil-nice-search' );
    add_theme_support( 'soil-jquery-cdn' );
    add_theme_support( 'soil-relative-urls' );
    // Make theme available for translation
    // Community translations can be found at https://github.com/roots/sage-translations
    load_theme_textdomain( 'sage', get_template_directory() . '/lang' );
    // Enable plugins to manage the document title
    // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
    add_theme_support( 'title-tag' );
    // Register wp_nav_menu() menus
    // http://codex.wordpress.org/Function_Reference/register_nav_menus
    register_nav_menus( [
        'primary_navigation' => __( 'Primary Navigation', 'sage' )
    ] );
    // Enable post thumbnails
    // http://codex.wordpress.org/Post_Thumbnails
    // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
    // http://codex.wordpress.org/Function_Reference/add_image_size
    add_theme_support( 'post-thumbnails' );

    // Used for header foreground images
    add_image_size( 'header-land', 800, 600, false );

    // Used in the gallery template part
    add_image_size( 'gallery-square', 300, 300, true );
    add_image_size( 'gallery-land', 400, 300, true );
    add_image_size( 'gallery-port', 550, 650, true );

    // Used in the overlay's as per post foreground images
    add_image_size( 'overlay-land', 400, 300, false );

    // Used in template content parts

    add_image_size( 'heading-cases', 600, 9999, false );
    add_image_size( 'heading-image', 600, 700, false );
    add_image_size( 'heading-full-image', 750, 550, false );
    
    // Enable post formats
    // http://codex.wordpress.org/Post_Formats
    add_theme_support( 'post-formats', [
        'aside',
        'gallery',
        'link',
        'image',
        'quote',
        'video',
        'audio'
    ] );
    // Enable HTML5 markup support
    // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
    add_theme_support( 'html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form'
    ] );
    // Use main stylesheet for visual editor
    // To add custom styles edit /assets/styles/layouts/_tinymce.scss
    add_editor_style( Assets\asset_path( 'styles/main.css' ) );

}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\setup' );

/**
 * Register sidebars
 */
function widgets_init() {

    register_sidebar( [
        'name' => __( 'Primary', 'sage' ),
        'id' => 'sidebar-primary',
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ] );
    register_sidebar( [
        'name' => __( 'Footer', 'sage' ),
        'id' => 'sidebar-footer',
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ] );

}
add_action( 'widgets_init', __NAMESPACE__ . '\\widgets_init' );

/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {

    static $display;
    isset( $display ) || $display = ! in_array( true, [
        // The sidebar will NOT be displayed if ANY of the following return true.
        // @link https://codex.wordpress.org/Conditional_Tags
        is_404(),
        is_front_page(),
        is_page_template( 'template-custom.php' )
    ] );
    return apply_filters( 'sage/display_sidebar', $display );

}

/**
 * Theme assets
 */
function assets() {

    wp_enqueue_style( 'sage/css', Assets\asset_path( 'styles/main.css' ), false, null );
    if ( is_single() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    wp_enqueue_script( 'sage/js', Assets\asset_path( 'scripts/main.js' ), [
        'jquery'
    ], null, true );
    wp_enqueue_script( 'sage/custom_js', Assets\asset_path( 'scripts/custom.js' ), [
        'sage/js'
    ], null, true );

}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100 );

/**
 * Theme Plugins
 */
function register_required_plugins() {
    $plugins = array(
        array(
            'name'               => 'Advanced Custom Fields Pro',
            'slug'               => 'advanced-custom-fields-pro',
            'source'             => '/advanced-custom-fields-pro.zip',
            'required'           => true,
            'force_activation'   => true,
            'force_deactivation' => true,
        ),
        array(
            'name'               => 'Gravity Forms',
            'slug'               => 'gravityforms',
            'source'             => '/gravityforms.zip',
            'required'           => true,
            'force_activation'   => true,
            'force_deactivation' => true,
        ),
        array(
            'name'     => 'Instagram Feed',
            'slug'     => 'instagram-feed',
            'required' => true,
        ),
    );
    $config = array(
        'id'           => 'sage',
        'default_path' => get_template_directory() . '/lib/plugins',
        'menu'         => 'tgmpa-install-plugins',
        'parent_slug'  => 'themes.php',
        'capability'   => 'edit_theme_options',
        'has_notices'  => true,
        'dismissable'  => true,
        'is_automatic' => true,
    );
    tgmpa( $plugins, $config );
}
//add_action( 'after_setup_theme', __NAMESPACE__ . '\\register_required_plugins' );