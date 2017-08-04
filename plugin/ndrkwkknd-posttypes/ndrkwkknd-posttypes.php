<?php
/*
Plugin Name: Site Plugin for indrukwekkend.nl
Description: Add various Custom Post Types.
*/

include( 'cuztom/cuztom.php' );

function content_types()
{
    $book = register_cuztom_post_type( "Brand", array(), array() );
}
add_action( 'init', 'content_types' );


?>