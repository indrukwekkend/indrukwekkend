<?php

/*
 * Plugin Name: Site Plugin for indrukwekkend.nl
 * Description: Add various Custom Post Types.
 */

// Register Merken
function merken_post_type()
{
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
        'capability_type' => 'page'
    );
    register_post_type('Merken', $args);
}
add_action('init', 'merken_post_type', 0);

function merken_shortcode()
{
    $args = array(
        'post_type' => 'merken'
    );
    // The Query
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
add_shortcode('merken', 'merken_shortcode');

// Register Quotes
function quotes_post_type()
{
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
        'capability_type' => 'page'
    );
    register_post_type('Quotes', $args);
}
add_action('init', 'quotes_post_type', 0);

function quotes_shortcode($atts)
{
    
    // Attributes
    $atts = shortcode_atts(array(
        'id' => ''
    ), $atts);
    
    if ($atts['id'] > 0) {
        // Show single
        
        $return = 'Single qutoe';
    } else {
        // Show multiple
        
        $args = array(
            'post_type' => 'quotes'
        );
        // The Query
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
    }
    
    return $return;
}
add_shortcode('quote', 'quotes_shortcode');

?>