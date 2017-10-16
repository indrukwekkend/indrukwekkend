<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;
use WP_Query;

// ACF's Sync JSON
add_filter('acf/settings/save_json', __NAMESPACE__ . '\\acf_json_save_point');

function acf_json_save_point( $path ) {
	
	// update path
	$path = get_stylesheet_directory() . '/lib/acf-fields';
	
	// return
	return $path;
	
}

/**
 * Add <body> classes
 */
function body_class( $classes ) {

	// Add page slug if it doesn't exist
	if ( is_single() || is_page() && ! is_front_page() ) {
		if ( ! in_array( basename( get_permalink() ), $classes ) ) {
			$classes[] = basename( get_permalink() );
		}
	}
	// Add class if sidebar is active
	if ( Setup\display_sidebar() ) {
		$classes[] = 'sidebar-primary';
	}
	return $classes;

}
add_filter( 'body_class', __NAMESPACE__ . '\\body_class' );

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {

	return ' &hellip; <a href="' . get_permalink() . '">' . __( 'Continued', 'sage' ) . '</a>';

}
add_filter( 'excerpt_more', __NAMESPACE__ . '\\excerpt_more' );

/**
 * Cases Post Type
 */
function cases_post_type() {

	$labels = array(
		'name' => _x( 'Cases', 'Post Type General Name', 'sage' ),
		'singular_name' => _x( 'Case', 'Post Type Singular Name', 'sage' )
	);
	$args = array(
		'label' => __( 'Case', 'sage' ),
		'labels' => $labels,
		'supports' => array(
			'title',
			'editor'
		),
		'taxonomies' => array(
			'post_tag'
		),
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 6,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'capability_type' => 'page',
		'menu_icon' => 'dashicons-id-alt'
	);
	register_post_type( 'Cases', $args );

}
add_action( 'init', __NAMESPACE__ . '\\cases_post_type', 0 );

/**
 * Quote Post Type
 */
function quotes_post_type() {

	$labels = array(
		'name' => _x( 'Quotes', 'Post Type General Name', 'sage' ),
		'singular_name' => _x( 'Quote', 'Post Type Singular Name', 'sage' )
	);
	$args = array(
		'label' => __( 'Quote', 'sage' ),
		'labels' => $labels,
		'supports' => array(
			'title',
			'editor'
		),
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 6,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'capability_type' => 'page',
		'menu_icon' => 'dashicons-testimonial'
	);
	register_post_type( 'Quotes', $args );

}
add_action( 'init', __NAMESPACE__ . '\\quotes_post_type', 0 );

/**
 * Merken Post Type
 */
function merken_post_type() {

	$labels = array(
		'name' => _x( 'Merken', 'Post Type General Name', 'sage' ),
		'singular_name' => _x( 'Merk', 'Post Type Singular Name', 'sage' )
	);
	$args = array(
		'label' => __( 'Merk', 'sage' ),
		'labels' => $labels,
		'supports' => array(
			'title',
			'editor',
			'thumbnail'
		),
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 6,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'capability_type' => 'page',
		'menu_icon' => 'dashicons-tag'
	);
	register_post_type( 'Merken', $args );

}
add_action( 'init', __NAMESPACE__ . '\\merken_post_type', 0 );

/**
 * Teamleden Post Type
 */
function teamleden_post_type() {

	$labels = array(
		'name' => _x( 'Team Leden', 'Post Type General Name', 'sage' ),
		'singular_name' => _x( 'Team Leden', 'Post Type Singular Name', 'sage' )
	);
	$args = array(
		'label' => __( 'Team Leden', 'sage' ),
		'labels' => $labels,
		'supports' => array(
			'title',
			'editor',
			'thumbnail'
		),
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 6,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'capability_type' => 'page',
		'menu_icon' => 'dashicons-businessman'
	);
	register_post_type( 'Team Leden', $args );

}
add_action( 'init', __NAMESPACE__ . '\\teamleden_post_type', 0 );

/**
 * Replace Flex Layout title with content
 */
function my_acf_flexible_content_layout_title( $title, $field, $layout, $i ) {

	if ( $desc = get_sub_field( 'title' ) ) {
		return $title . " - " . $desc;
	} else {
		return $title;
	}
	return $title;

}
add_filter( 'acf/fields/flexible_content/layout_title', __NAMESPACE__ . '\\my_acf_flexible_content_layout_title', 10, 4 );

function wpdocs_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', __NAMESPACE__ . '\\wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
	return "...";
	return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
		get_permalink( get_the_ID() ),
		__( 'Read More', 'textdomain' )
		);
}
add_filter( 'excerpt_more', __NAMESPACE__ . '\\wpdocs_excerpt_more' );

function form_submit_button( $button, $form ) {
	return "<button class='btn btn-lg btn-orange btn-arrow arrow-right' id='gform_submit_button_{$form['id']}'><span>Versturen</span></button>";
}
add_filter( 'gform_submit_button', __NAMESPACE__ . '\\form_submit_button', 10, 2 );

/**
 * Huidige post uitsluiten van relatieve posts. Word gebruikt bij Cases.
 */
function exclude_id ( $args, $field, $post ) {
	$args['post__not_in'] = array( $post );
	return $args;
}
add_filter('acf/fields/relationship/query/name=cases', __NAMESPACE__ . '\\exclude_id', 10, 3);