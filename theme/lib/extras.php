<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;
use WP_Query;


/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


/**
 * ACF Additions
 */

// if( function_exists('acf_add_options_page') ) {
    
//     acf_add_options_page(array(
//         'page_title' 	=> 'Theme General Settings',
//         'menu_title'	=> 'Theme Settings',
//         'menu_slug' 	=> 'theme-general-settings',
//         'capability'	=> 'edit_posts',
//         'redirect'		=> false
//     ));
    
//     acf_add_options_sub_page(array(
//         'page_title' 	=> 'Merken',
//         'menu_title'	=> 'Merken',
//         'parent_slug'	=> 'theme-general-settings',
//     ));
// }


/**
 * Quote Post Type
 */
function quotes_post_type(){
    $labels = array(
        'name' => _x('Quotes', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Quote', 'Post Type Singular Name', 'text_domain')
    );
    $args = array(
        'label' => __('Quote', 'text_domain'),
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
        'menu_icon'   => 'dashicons-testimonial',
    );
    register_post_type('Quotes', $args);
}
add_action('init', __NAMESPACE__ . '\\quotes_post_type', 0);

/**
 * indrukwekkend_quotes()
 * 
 * Outputs mutliple quotes
 */
function indrukwekkend_quotes(){
    
    $args = array(
        'post_type' => 'quotes'
    );
    
    $query = new WP_Query($args);
    
    if ($query->have_posts()) {
        
        $return .= '<div class="brands-list">';
        
        while ($query->have_posts()) {
            
            $query->the_post();
            
            $return .= '<div class="quote">';
            
            $return .= '<div class="quote-content">';
            
            $return .= '<span class="encapsule"></span>';
            
            $return .= '<p>' . get_the_content() . '</p>';
            
            $return .= '<span class="encapsule"></span>';
            
            $return .= '</div>';
            
            $return .= '<div class="quote-author">';
            
            $return .= '<p>' . get_the_title() . '</p>';
            
            $return .= '</div>';
            
            $return .= '<div class="quote-nav">';
            
            $return .= '<ul>';
            
            $return .= '<li class="active">1</li>';
            
            $return .= '<li>2</li>';
            
            $return .= '<li>3</li>';
            
            $return .= '</ul>';
            
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
function merken_post_type(){
    $labels = array(
        'name' => _x('Merken', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Merk', 'Post Type Singular Name', 'text_domain')
    );
    $args = array(
        'label' => __('Merk', 'text_domain'),
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
        'menu_icon'   => 'dashicons-tag',
    );
    register_post_type('Merken', $args);
}
add_action('init', __NAMESPACE__ . '\\merken_post_type', 0);

/**
 * indrukwekkend_merken()
 * 
 * Outputs the brands on the homepage
 */
function indrukwekkend_merken(){
    $args = array(
        'post_type' => 'merken'
    );

    $query = new WP_Query($args);
    
    if ($query->have_posts()) {
        
        $return .= '<div class="brands-list">';
        
        while ($query->have_posts()) {
            
            $query->the_post();
            
            $return .= '<div class="brands-item">';
            
            $return .= '<img class="img-fluid" width="120" src="' . get_the_post_thumbnail_url($post->ID, 'full') . '" title="' . get_the_title() . '">';
            
            $return .= '</div>';
            
        }
        
        $return .= '</div>';
        
    } else {
        
        $return = 'Nope. Helemaal niiiks.';
        
    }
    
    return $return;
    
}

/**
 * Cases Post Type
 */
function cases_post_type(){
    
    $labels = array(
        'name' => _x('Cases', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Case', 'Post Type Singular Name', 'text_domain')
    );
    $args = array(
        'label' => __('Case', 'text_domain'),
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
        'menu_icon'   => 'dashicons-id-alt',
    );
    register_post_type('Cases', $args);
}
add_action('init', __NAMESPACE__ . '\\cases_post_type', 0);