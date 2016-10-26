<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 26/10/2016
 * Time: 16:16
 */

add_action('init', 'create_post_type_countries'); // Add Countries Custom Post Type
add_action('init', 'create_post_type_guidelines'); // Add Guidelines Custom Post Type


// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_countries()
{
    register_taxonomy_for_object_type('category', 'countries'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'countries');
    register_post_type('countries', // Register Custom Post Type
        array(
            'labels' => array(
                'name' => __('Shipping Countries', 'html5blank'), // Rename these to suit
                'singular_name' => __('Shipping Country', 'html5blank'),
                'add_new' => __('Add New', 'html5blank'),
                'add_new_item' => __('Add New Country', 'html5blank'),
                'edit' => __('Edit', 'html5blank'),
                'edit_item' => __('Edit Country', 'html5blank'),
                'new_item' => __('New Country', 'html5blank'),
                'view' => __('View Countries', 'html5blank'),
                'view_item' => __('View Countries Post', 'html5blank'),
                'search_items' => __('Search Countries', 'html5blank'),
                'not_found' => __('No Countries Posts found', 'html5blank'),
                'not_found_in_trash' => __('No Country Posts found in Trash', 'html5blank')
            ),
            'public' => true,
            'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'revisions',
                'thumbnail'
            ), // Go to Dashboard Custom HTML5 Blank post for supports
            'can_export' => true, // Allows export in Tools > Export
            'taxonomies' => array(
                'post_tag',
                'category'
            ) // Add Category and Post Tags support
        ));
}
// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_guidelines()
{
    register_taxonomy_for_object_type('category', 'guidelines'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'guidelines');
    register_post_type('guidelines', // Register Custom Post Type
        array(
            'labels' => array(
                'name' => __('Useful Information', 'html5blank'), // Rename these to suit
                'singular_name' => __('Useful Information', 'html5blank'),
                'add_new' => __('Add New', 'html5blank'),
                'add_new_item' => __('Add New', 'html5blanks'),
                'edit' => __('Edit', 'html5blank'),
                'edit_item' => __('Edit Information', 'html5blank'),
                'new_item' => __('New Information', 'html5blank'),
                'view' => __('View Information', 'html5blank'),
                'view_item' => __('View Information Post', 'html5blank'),
                'search_items' => __('Search Useful Information', 'html5blank'),
                'not_found' => __('No Information found', 'html5blank'),
                'not_found_in_trash' => __('No Information found in Trash', 'html5blank')
            ),
            'rewrite' => array(
                'slug' => 'useful-information-post'
            ),
            'public' => true,
            'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'revisions',
                'thumbnail'
            ), // Go to Dashboard Custom HTML5 Blank post for supports
            'can_export' => true, // Allows export in Tools > Export
            'taxonomies' => array(
                'post_tag',
                'category'
            ) // Add Category and Post Tags support
        ));
}