<?php

add_action( 'init', 'events' );
function events() {

register_post_type( 'Events',
    array(
'labels' => array(
    'name'               => __('Events'),
    'singular_name'      => __('Event'),
    'add_new_item'       => __('Add New Event'),
    'edit_item'          => __('Edit Event'),
    'new_item'           => __('New Event'),
    'view_item'          => __('View Event'),
    'search_items'       => __('Search Events'),
    'not_found'          => __('No event Found'),
    'not_found_in_trash' => __('No events found in Trash')
),

'hierarchical'         => false,
'menu_icon'            => 'dashicons-tickets',
'menu_position'        => 5,
'public'               => true,
'has_archive'          => true,
'show_in_admin_bar'    => false,
'show_ui'              => true,
'supports'             => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes')
));
}
