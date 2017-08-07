<?php
/*
Plugin Name: Site Plugin for indrukwekkend.nl
Description: Add various Custom Post Types.
*/


// Register Merken
function merken_post_type() {
    
    $labels = array(
        'name'                  => _x( 'Merken', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Merk', 'Post Type Singular Name', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Merk', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'Merken', $args );
    
}
add_action( 'init', 'merken_post_type', 0 );

?>