<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;
use WP_Query;

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
 * indrukwekkend_quotes()
 *
 * Outputs mutliple quotes
 */
function indrukwekkend_quotes() {

    $args = array(
        'post_type' => 'quotes'
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) {
        $return .= '<div class="quotes-list">';
        while ( $query->have_posts() ) {
            $query->the_post();
            $return .= '<div class="quote-item">';
            $return .= '<div class="quote">';
            $return .= '<div class="quote-content">';
            $return .= '<p>' . get_the_content() . '</p>';
            $return .= '</div>';
            $return .= '<div class="quote-author">';
            $return .= '<p>' . get_the_title() . '</p>';
            $return .= '</div>';
            $return .= '</div>';
            $return .= '</div>';
        }
        $return .= '</div>';
    } else {
        $return = 'Nope. Helemaal niiiks.';
    }
    return $return;

}

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
 * indrukwekkend_merken()
 *
 * Outputs the brands on the homepage
 */
function indrukwekkend_merken() {

    $args = array(
        'post_type' => 'merken'
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) {
        $return .= '<div class="brands-list">';
        while ( $query->have_posts() ) {
            $query->the_post();
            $return .= '<div class="brands-item">';
            $return .= '<img class="img-fluid" width="120" src="' . get_the_post_thumbnail_url( $post->ID, 'full' ) . '" title="' . get_the_title() . '">';
            $return .= '</div>';
        }
        $return .= '</div>';
    } else {
        $return = 'Nope. Helemaal niiiks.';
    }
    return $return;

}

/**
 * indrukwekkend_cases()
 *
 * Outputs mutliple Cases
 */
function indrukwekkend_cases() {

    $args = array(
        'post_type' => 'cases'
    );
    $query = new WP_Query( $args );
    $return .= '<div class="container">';
    if ( $query->have_posts() ) {
        $return .= '<div class="row cases-list">';
        while ( $query->have_posts() ) {
            $query->the_post();
            $return .= '<div class="col-md-12 col-lg-6 col-xl-3 case">';
            $return .= '<div class="card mb-2 mt-2">';
            $return .= '<a href="' . get_the_permalink() . '" class="card-link">';
            $return .= '<div class="card-block">';
            $return .= '<h4 class="card-title">' . get_the_title() . '</h4>';
            $return .= '<p class="card-text">' . get_the_excerpt() . '</p>';
            $return .= '<a href="' . get_the_permalink() . '" class="card-link">Naar case</a>';
            $return .= '</div>';
            $return .= '</a>';
            $return .= '</div>';
            $return .= '</div>';
        }
        $return .= '</div>';
    } else {
        $return = 'Nope. Helemaal niiiks.';
    }
    $return .= '</div>';
    return $return;

}

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
 * indrukwekkend_teamleden()
 *
 * Outputs mutliple Teamleden
 */
function indrukwekkend_teamleden() {

    $args = array(
        'post_type' => 'teamleden'
    );
    $query = new WP_Query( $args );
    $return .= '<div class="container">';
    if ( $query->have_posts() ) {
        $return .= '<div class="row teamleden-list">';
        while ( $query->have_posts() ) {
            $query->the_post();
            $return .= '<div class="col-md-12 col-lg-6 col-xl-3 case">';
            $return .= '<div class="card mb-2 mt-2">';
            $return .= '<a href="' . get_the_permalink() . '" class="card-link">';
            $return .= '<div class="card-block">';
            $return .= '<h4 class="card-title">' . get_the_title() . '</h4>';
            $return .= '<p class="card-text">' . get_the_excerpt() . '</p>';
            $return .= '<a href="' . get_the_permalink() . '" class="card-link">Naar case</a>';
            $return .= '</div>';
            $return .= '</a>';
            $return .= '</div>';
            $return .= '</div>';
        }
        $return .= '</div>';
    } else {
        $return = 'Nope. Helemaal niiiks.';
    }
    $return .= '</div>';
    return $return;

}